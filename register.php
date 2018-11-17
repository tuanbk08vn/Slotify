<?php
//    include('includes/handlers/register-handler.php');
//    include('includes/handlers/login-handler.php');
    include('classes/Account.php');
    $account = new Account();
    if(isset($_POST['registerButton'])) {
        $username = $_POST['username'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $confirmEmail = $_POST['confirmEmail'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $isSuccessful = $account->register(
                $username,
                $firstName,
                $lastName,
                $email,
                $confirmEmail,
                $password,
                $confirmPassword
        );

        if( ! $isSuccessful) {
            echo "Cannot register in this time";
        }
        echo "Successfully!";
    }

?>
<html>
<head>
    <title>Resigter</title>
</head>

<h1>Login</h1>
<form id="loginForm" action="register.php" method="POST">
    <p>
        <label for="username"></label>
        <input type="username" id="username" name="username" placeholder="e..g. tuanbkvn ">
    </p>

    <p>
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="********">
    </p>

    <input type="submit" name="loginButton" value="Log In"/>
</form>



<h1>Register your account</h1>
<form id="registerForm" action="register.php" method="POST">
    <p><?php echo $account->displayError(); ?></p>
    <p>
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="e..g. tuanbkvn">
    </p>

    <p>
        <label for="firstName"></label>
        <input type="text" id="firstName" name="firstName" placeholder="e..g. Tuan">
    </p>

    <p>
        <label for="lastName"></label>
        <input type="text" id="lastName" name="lastName" placeholder="e..g. Pham" >
    </p>

    <p>
        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="e..g. tuanbk08vn@gmail.com" >
    </p>

    <p>
        <label for="confirmEmail"></label>
        <input type="confirmEmail" name="confirmEmail" placeholder="e..g. tuanbk08vn@gmail.com">
    </p>

    <p>
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="********">
    </p>

    <p>
        <label for="confirmPassword"></label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="********">
    </p>

    <input type="submit" name="registerButton" value="Sign Up"/>
</form>

</html>