<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name =trim($_POST["name"]);
    $email = trim($_POST["email"]);
    if(empty($name) || empty($email)){
        echo "All fields are required.";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format.";
}else{
    echo "hello $name, your email is $email";
}
}