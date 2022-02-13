<?php
include('layout/header.php'); //warning, jei yra klaiduų
$usernameValue = $emailValue = $passErr = "";
if($_GET){
    $usernameValue = $_GET['username'];
    $emailValue = $_GET['email'];
    $passErr = $_GET['error'];
}

?>

    <h2>Please fill registration form!</h2>
    <form action="register.php" method="POST">

        <div class="form-floating">
            <input type="text" name="username" class="form-control" required value="<?php echo $usernameValue ?>">
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control" required value="<?php echo $emailValue ?>">
            <label for="email">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" required >
            <label for="password">Password</label>
        </div>
        <div class="form-floating">            
            <input type="password" name="confirmPassword" class="form-control" required>
            <label for="password">Confirm Password</label>
            <span class="badge bg-danger"><?php echo $passErr ?></span>
            
        </div>
        <button type="submit" class="btn btn-lg btn-primary">Register</button>
    
    </form>

  <?php include('layout/footer.php'); ?>