<?php

if(isset($_POST['loginButton'])) {
    $username = sanitizeInput($_POST['username']);
    echo $username;
}
