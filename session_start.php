<?php

if (isset($_SESSION['LAST_REQUEST_TIME'])) {
    if (time() - $_SESSION['LAST_REQUEST_TIME'] > 900) {
        // session timed out, last request is longer than 15 minutes ago
        $_SESSION = array();
//       $user_id=$_SESSION['user_id'];  
//         echo $single_login = "UPDATE user_login SET login_status='0',logout_date=NOW() WHERE user_id='$user_id' ";
// exit
        session_destroy();
        header('Location: index.php'); 
    }
}
$_SESSION['LAST_REQUEST_TIME'] = time();



?>