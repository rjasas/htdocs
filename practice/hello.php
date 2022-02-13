<?php 
$nameErr = $emailErr = $webErr = $noteErr = $genderErr = "";
$userName = $email = $web = $note = $gender = "";
$formData = [];

function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST['userName'])){
        $nameErr = "Username is required";
    } else {
        $userName = testInput($_POST['userName']);
        if(!preg_match("/^[a-zA-Z-' ]*$/", $userName)){
            $nameErr = "Only letters and spaces allowed";
        } else {
            $formData['userName'] = $userName;
        }
    }

    if(empty($_POST['email'])){
        $emailErr = "Email is required";
    } else {
        $email = testInput($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Email format is not valid";
        } else {
            $formData['email'] = $email;
        }

    }

    if(empty($_POST['web'])){
        $webErr = "Website is required";
    } else {
        $web = testInput($_POST['web']);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)){
            $webErr = "URL is invalid";
        }else{
            $formData['web'] = $web;
        }
    }

    if(empty($_POST['note'])){
        $noteErr = "Note is required";
    } else {
        $note = testInput($_POST['note']);
    }
    $formData ['note'] = $note;

    if(empty($_POST['gender'])){
        $genderErr = "Gender is required";
    } else {
        $gender = testInput($_POST['gender']);
        $formData['gender'] = $gender;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello, <?php echo $_GET['userName'] ?></h1> -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
<label for="userName">Username*</label>
<br>
<input type="text" name="userName" value="<?php echo $userName;?>">
<span style="color: red"><?php echo $nameErr;?></span>
<br>
<label for="email">Email*</label>
<br>
<input type="text" name="email" value="<?php echo $email;?>">
<span style="color: red"><?php echo $emailErr;?></span>
<br>
<label for="web" name="email" >Website*</label>
<br>
<input type="text" name="web" value="<?php echo $web;?>">
<span style="color: red"><?php echo $webErr;?></span>
<br>
<label for="note">Note</label>
<br>
<textarea name="note" cols="30" rows="10"><?php echo $note;?></textarea>
<span style="color: red"><?php echo $noteErr;?></span>
<br>
<span>Gender:</span>
<br>
<label for="gender">Male</label>
<input type="radio" name="gender" value="male" <?php 
if(isset($gender) && $gender=="male"){
    echo "checked";
}?>>
<label for="gender">Female</label>
<input type="radio" name="gender" value="female" <?php 
if(isset($gender) && $gender=="female" ){
    echo "checked";
}?>>
<label for="gender">Undefinde</label>
<input type="radio" name="gender" value="undefinde" <?php 
if(isset($gender) && $gender=="undefind"){
    echo "checked";
}?>>
<span style="color: red"><?php echo $genderErr;?></span>

<br>
<span>* fields are required</span>
<br>
<input type="submit" value="Submit!">
</form>

<table>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Website</th>
        <th>Gender</th>
        <th>Note</th>
    </tr>
    <tr>
        <?php
        if (empty($nameErr) && empty($emailErr) && empty($webErr) && empty($noteErr) && empty($genderErr) && $_POST){
            echo "<td>".$formData['userName']."</td><td>".$formData['email']."</td><td>".$formData['web']."</td><td>".$formData['gender']."</td><td>".$formData['note']."</td>";
        }
        ?>
    </tr>
</table>


</body>
</html>