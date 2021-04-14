<?php
session_start();
$con=mysqli_connect('localhost:3309','root','1234');
if($con){
    echo" connection successfully made !!";
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
    echo" duplicate data ";
    
    
}else{
    $qy= "insert into signin(name , password) values ('$name' , '$pass')";
    mysqli_query($con, $qy);
}



?>

<!DOCTYPE html>
<html >
<head>
    
    <title> GO EASY- RegisterHOME </title>
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
<body style="background-color:Mistyrose;text-align:center; font-family:courier" >
<h2> You are registered with GO EASY successfully !!</h2>
<h2> Login with same username and password NOW !</h2>
<h2> Fill out the form at the earliest and start you journey online NOW !!</h2>
<div class="button">
                
                <a href="login.php" class="btn btn-outline-primary"> LOGIN </a>
               
              </div>
</body>
</html>