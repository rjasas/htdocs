<?php 

if(isset($_GET['click']) && $_GET['click']==1){
    header('Location: http://localhost/practice/red.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body style = "background-color: blue;">
    
    <a href="http://localhost/practice/blue.php/?click=1">BLUE</a>

</body>
</html>