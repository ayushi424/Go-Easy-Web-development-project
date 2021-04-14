<?php
session_start();
$con=mysqli_connect('localhost:3309','root','1234');
if($con){
    echo" connection made successfully !!";
}else{
    echo" no connection made !";
}
mysqli_select_db($con, 'session');
$name = $_POST['user'];
$pass = $_POST['password'];
$q = "select * from signin where name= '$name' && password = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){
   $_SESSION['username'] = $name;
   header('location:loginhome.php');
}else{
    echo" Invalid Login !";
    
}



?>

<!doctype html>
<html>
<head>
    <title>Invalid Login@GO EASY</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
body {
    width: 100%;
    height: 100vh;
    background-image: url(11.jpg);
    background-size: cover;
    background-position: center;
}
</style>
</head>
<body style="background-color:Mistyrose;text-align:center; font-family:courier">
<h3> It seems like You entered wrong USERNAME OR PASSWORD :( </h3>
<h3> Please TRY AGAIN with valid USERNAME and PASSWORD. </h3>

<div class="container">
<div class="button">
          <a href="login.php" class="btn btn-outline-primary"> LOGIN AGAIN</a>
</div>
    
    
    

</div>
</body>
</html>