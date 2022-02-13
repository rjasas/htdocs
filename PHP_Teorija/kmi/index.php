<?php
$username = "";

if ($_POST){
    $username = $_POST;
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
    
    <form method="POST">
        <label for="name">Jūsų vardas</label>
        <input type="text" name="vardas">   
        <input type="submit">    
    </form>

</body>
</html>

<?php
echo  $username = $_POST['vardas'];
?>