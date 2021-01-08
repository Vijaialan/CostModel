<?php
use Phppot\Member;
require_once './Model/Member.php';
$member = new Member();//object



if(isset($_POST["username"])){
$EmailResponse = $member->isEmailExists($_POST["username"]);
if($EmailResponse > 0){
          echo  $response = "<span style='color: red;'>Email id already exist.</span>";
      }
}

if(isset($_POST["companyName"])){
$CompNameResponse = $member->isCompanynameExists($_POST["companyName"]);
if($CompNameResponse > 0){
          echo  $response = "<span style='color: red;'>Company name already exist.</span>";
      }      
}

if(isset($_POST["companyCode"])){
$CompCode = $member->isCompanyCodeExists($_POST["companyCode"]);
if($CompCode > 0){
          echo  $response = "<span style='color: red;'>Company code already exist.</span>";
      }      
}

?>