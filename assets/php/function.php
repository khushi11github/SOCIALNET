<?php

require_once 'config.php';
$dp = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("database is not connected");

function showPage($page, $data = "") {
    include("assets/pages/$page.php");
}

// Function to show error
function showerror($field) {
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        if (isset($error['field']) && $field == $error['field']) { // Check if 'field' key exists
?>
<div class="alert alert-danger" role="alert">
    <?=$error['msg'] ?>
</div>
<?php
        }
    }
}

//FUNCTION FOR SHOE PREVFORMDATA
function showFormData($field) {

    if (isset($_SESSION['formdata'])) {
        $formdata = $_SESSION['formdata'];
       return $formdata[$field];

    }

}

// for checking duplicates
function isEmailRegistered($emal){
    global $db;
     $query ="SELECT count(*) as row FROM users WHERE email ='$email'";
     $run=mysqli_query($db,$query);
     $return_data =mysqli_fetch_assoc($run);
     return $return_data;
}
function validateSignupForm($formdata) {
    $response = array(
        'msg' => '',
        'status' => true,
        'field' => '' // Initialize field to prevent undefined key issues
    );

    if (!isset($formdata['first_name']) || empty($formdata['first_name'])) { 
        $response['msg'] = "First name is not given";
        $response['status'] = false;
        $response['field'] = 'first_name';
        return $response; // Early return on error
    }

    if (!isset($formdata['last_name']) || empty($formdata['last_name'])) { 
        $response['msg'] = "Last name is not given";
        $response['status'] = false;
        $response['field'] = 'last_name';
        return $response; // Early return on error
    }

    if (!isset($formdata['email']) || empty($formdata['email'])) { 
        $response['msg'] = "Email is not given";
        $response['status'] = false;
        $response['field'] = 'email';
        return $response; // Early return on error
    }
    if (!isset($formdata['username']) || empty($formdata['username'])) { 
        $response['msg'] = "Username is not given";
        $response['status'] = false;
        $response['field'] = 'username';
        return $response; // Early return on error
    }
    if (!isset($formdata['password']) || empty($formdata['password'])) { 
        $response['msg'] = "Password is not given";
        $response['status'] = false;
        $response['field'] = 'password';
        return $response; // Early return on error
    }
    return $response; // If no errors found
}
?>
