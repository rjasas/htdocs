<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="userName" placeholder="User Name">
        <input type="submit">
    </form>

    <?php 
    if($_POST['userName']){
        echo "<h1>Hello, ".$_POST['userName']."</h1>";
    } else {
        echo "Please enter your name";
    }
    ?>
<ul>
    <li>GET ir POST sukuria asocijuota masyva</li>
    <li>Ir GET ir POST turi globaliuosius kintamuosius $_GET ir $_POST </li>
    <li>GET masyvas perduodamas i URL</li>
    <li>POST masyvas perduodamas HTTP POST metodu</li>
    <li>GET turi ribota kieki informacijos, ka galime persiusti</li>
</ul>

<p>GET naudojam kada duomenys nera jautrus (svarbus), pvz.: paieska. GET metodu NIEKADA nesiunciame slaptazodziu</p>

</body>
</html>