<?php 

$username = $email = $password = $confirmPassword = "";
if($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
} else {
    header("Location: index.php");
    exit;
}

// echo $username.$email.$password.$confirmPassword;

if($password === $confirmPassword){
    $password = password_hash($password, PASSWORD_DEFAULT);
    // echo $password;
} else {
    header("Location: ../Sample_system/?username=".$username."&email=".$email."&error=passwords+do+not+match");
    exit;
}

header("Location: ../Sample_system/welcome.php?username=".$username);
?>