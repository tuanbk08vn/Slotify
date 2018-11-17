<?php
//    include('includes/handlers/register-handler.php');
//    include('includes/handlers/login-handler.php');

?>
<html>
<head>
    <title>Resigter</title>
</head>

<h1>Login</h1>
<form id="loginForm" action="login-handler.php" method="POST">

    <p>
        <label for="username"></label>
        <input type="username" id="username" name="username" placeholder="e..g. tuanbkvn " required>
    </p>

    <p>
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="********" required>
    </p>

    <button type="submit" name="loginButton">LOGIN</button>
</form>



<h1>Register your account</h1>
<form id="registerForm" action="/includes/handlers/register-handler.php" method="POST">
    <p>
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="e..g. tuanbkvn" required>
    </p>

    <p>
        <label for="firstName"></label>
        <input type="text" id="firstName" name="firstName" placeholder="e..g. Tuan" required>
    </p>

    <p>
        <label for="lastName"></label>
        <input type="text" id="lastName" name="lastName" placeholder="e..g. Pham" required>
    </p>

    <p>
        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="e..g. tuanbk08vn@gmail.com" required>
    </p>

    <p>
        <label for="confirmEmail"></label>
        <input type="confirmEmail" name="confirmEmail" placeholder="e..g. tuanbk08vn@gmail.com" required>
    </p>

    <p>
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="********" required>
    </p>

    <p>
        <label for="confirmPassword"></label>
        <input type="confirmPassword" id="confirmPassword" name="confirmPassword" placeholder="********" required>
    </p>

        <button type="submit" name="registerButton">SIGN UP</button>
</form>

</html>