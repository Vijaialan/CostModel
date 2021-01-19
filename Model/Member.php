<?php
namespace Phppot;

class Member
{
    public $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }

  
    public function isCompanynameExists($companyname)
    {
        $query = 'SELECT * FROM user_login where company_name = ?';
        $paramType = 's';
        $paramValue = array(
            $companyname
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function isEmailExists($email)
    {
       $query = 'SELECT * FROM user_login where user_name	 = ?';
        $paramType = 's';
        $paramValue = array(
            $email
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    } 

      public function isCompanyCodeExists($code)
    {
        $query = 'SELECT * FROM user_login where comp_unique_code  = ?';
        $paramType = 's';
        $paramValue = array(
            $code
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }


    public function registerMember()
    {

        //$isCompanynameExists = $this->isCompanynameExists($_POST["company_name"]);
        $isEmailExists = $this->isEmailExists($_POST["email"]);
        // if ($isCompanynameExists) {
        //     $response = array(
        //         "status" => "error",
        //         "message" => "Company name already exists."
        //     );
        // } else 
        if ($isEmailExists) {
            $response = array(
                "status" => "error",
                "message" => "Email already exists."
            );
        } 
        else {
            if (! empty($_POST["password"])) {

                $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
            }
            $query = 'INSERT INTO user_login (user_name, user_password, first_name, last_name,job_title,company_name,comp_unique_code) VALUES (?, ?,?,?,?,?,?)';
            $paramType = 'sssssss';
            $paramValue = array(
                $_POST["email"],
                $_POST["password"],
                $_POST["fname"],
                $_POST["lname"],
                $_POST["job_title"],
                $_POST["company_name"],
                $_POST["comp_unique_code"]
            );
            $memberId = $this->ds->insert($query, $paramType, $paramValue);

            if (! empty($memberId)) {
                $response = array(
                    "status" => "success",
                    "message" => "You have registered successfully... <a href='index.php'>Click her to login</a>"
                );
            }
        }
        return $response;
    }

   
    public function getMember($username)
    {
         $query = 'SELECT * FROM user_login where user_name = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    /**
     * to login a user
     *
     * @return string
     */
    public function loginMember()
    {
        
        $memberRecord = $this->getMember($_POST["username"]);
        //print_r($memberRecord);
        
        $loginPassword = 0;

        if (! empty($memberRecord)) {
            if (! empty($_POST["login-password"])) {
                 $password = $_POST["login-password"];
            }
             $hashedPassword = $memberRecord[0]["user_password"];
           //exit();
            $loginPassword = 0;
            if ($password==$hashedPassword) {

                 $loginPassword = 1;
            }
        } else {
            $loginPassword = 0;
        }
        if ($loginPassword == 1) {
            
            session_start();
            $_SESSION["user_id"] = $memberRecord[0]["user_id"];
            $_SESSION["user_name"] = $memberRecord[0]["user_name"];
            $_SESSION["user_type"] = $memberRecord[0]["user_type"];
            $_SESSION["created_date"] = $memberRecord[0]["created_date"];
            $_SESSION["job_title"] = $memberRecord[0]["job_title"]; 
            $_SESSION["first_name"] = $memberRecord[0]["first_name"]; 
            $_SESSION["last_name"] = $memberRecord[0]["last_name"]; 
            session_write_close();
            if($memberRecord[0]["user_type"]==0  || $memberRecord[0]["user_type"]==1){
                $url = "./home.php";
            }
            elseif($memberRecord[0]["user_type"]==2 || $memberRecord[0]["user_type"]==3){
                $url = "./cost_profile.php";
            }
            
            header("Location: $url");
        } else if ($loginPassword == 0) {
            $loginStatus = "Invalid username or password.";
            return $loginStatus;
        }
    }



    public function fetchNAICScode()
    {
        $query = 'SELECT NAICS_code,NAICS_title FROM master_industry_code';
        $NAICSCode = $this->ds->select($query);
        return $NAICSCode;
    }

    public function fetchIduData($indusCode,$indusDesc)
    {
      $query = "SELECT NAICS_code,NAICS_title FROM master_industry_code WHERE NAICS_code = '$indusCode' OR NAICS_title = '$indusDesc' ";
        $IduData = $this->ds->select($query);
        return $IduData;
    }

}

