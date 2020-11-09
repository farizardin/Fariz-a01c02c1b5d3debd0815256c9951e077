<?php
require_once('../Backend/App/Home.php');
$session_username = $_SESSION['username'];
$session_time = $_SESSION['time'];
?>
<!DOCTYPE html>
<html>
<body>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<button class="btn btn-primary" style="margin:2rem" onclick="location.href='../Backend/App/Logout.php'">Logout</button>
    <div class="container" style="width:50%; margin-top:3rem;">
        <div class="card" style="padding:3rem;">
        <h2 id="time" style="text-align: center;"></h2>
        <button class="btn btn-primary" onclick="myFunction()">Halo</button>
        <div id="status" style="margin-top:2rem;"></div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/app/app.js"></script>
<script>
var username = <?php echo "'".$session_username."'"; ?>;
var time = <?php echo "'".$session_time."'"; ?>;
function myFunction() {
    document.getElementById('status').innerHTML = "<h4>Hai "+username+", waktu login anda "+time+"</h4>";
}
</script>
</html>