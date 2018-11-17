<?php
include("../../classes/Account.php");

if(isset($_POST['registerButton'])) {
    echo "hêhhe ";
    $username = sanitizeInput($_POST['username']);
    $firstName = sanitizeInput($_POST['firstName']);
    $lastName = sanitizeInput($_POST['lastName']);
    $email = sanitizeInput($_POST['email']);
    $confirmEmail = sanitizeInput($_POST['confirmEmail']);
    $password = sanitizeInput($_POST['password']);
    $confirmPassword = sanitizeInput($_POST['confirmPassword']);
    echo "Register-handler.php works";

    $user = new Account();
    $isSuccessful = $user->register($username, $firstName, $lastName, $email, $confirmEmail, $password, $confirmPassword);
    if($isSuccessful) {
        header("Location: index.php");
    } else {
        // $user->displayError();
    }
}

function sanitizeInput($data) {
    $data = strip_tags($data);
    $data = str_replace(" ", "", $data);
    return $data;
}


?>