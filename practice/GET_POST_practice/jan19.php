<?php 
$color = 'black';
if (isset($_GET['color']) && $_GET[''] = 1){
    $color = 'red';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $color ?>;
        }
    </style>
</head>
<body>
    <a href="http://localhost/practice/GET_POST_practice/jan19.php">Nuoroda</a>
    <a href="http://localhost/practice/GET_POST_practice/jan19.php/?color=1">Nuoroda2</a>
</body>
</html>