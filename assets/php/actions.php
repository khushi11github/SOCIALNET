<?php
require_once 'function.php';


if(isset($_GET['signup'])){
   $response = validateSignupForm($_POST);
   print_r($response);

   if($response['status']){

   }else{
    $_SESSION['error']=$response;
    $_SESSION['formdata'] = $_POST;
    header('Location: ../../?signup');
    exit;
   }
}

?>