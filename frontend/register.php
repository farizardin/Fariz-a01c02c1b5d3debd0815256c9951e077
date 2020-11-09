<?php
require_once('../backend/StartSession.php');
if(!empty($_SESSION)){
    $loc = 'index.php';
    header('Location: '.$loc);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="width:50%; margin-top:3rem;">
        <div class="card" style="padding:3rem;">
        <h2>Register</h2>
        <form action="../Backend/App/Register.php" method="post">
            <div class="form-group">
            <label for="username">Username:</label>
            <input type="username" class="form-control" id="email" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="repeatpassword" placeholder="Enter password" name="repeatpassword">
            </div>
            <div id="error-mgs" style="color:red; text-align:center;">
            <a href="login.php">Login</a>
            <?php
                if(!empty($_GET["message"])){
                    echo $_GET["message"];
                }
            ?>
            </div>
            <button type="submit" style="margin-top:1rem;" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</body>
<script>
</script>
</html>