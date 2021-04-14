<?php
session_start();
$conn=mysqli_connect('localhost:3309','root','1234');
if($conn){
    echo" connection successful !!";
}else{
    echo" no connection made !";
}
mysqli_select_db($conn, 'seller');
$sellername = $_POST['sellername'];
$companyname = $_POST['companyname'];
$selleremail = $_POST['selleremail'];
$sellercontact = $_POST['sellercontact'];
$sellerproduct = $_POST['sellerproduct'];
$productquantity= $_POST['productquantity'];
$productpricerange = $_POST['productpricerange'];


// $q = "select * from signin where name= '$name' && password = '$pass'";
$q="insert into form3(sellername,companyname,selleremail,sellercontact,sellerproduct,productquantity,productpricerange)
 values('$sellername','$companyname','$selleremail','$sellercontact','$sellerproduct','$productquantity','$productpricerange')";

$num=mysqli_query($conn,$q);
if($num==1)
{ echo "record insert successfully !";
}
else
{
echo " not";
}
?>
<!DOCTYPE html>
<html >
<head>
    
    <title> GO EASY- SELLERLOGIN </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body {
    width: 100%;
    height: 100vh;
    background-image: url(12.jpg);
    background-size: cover;
    background-position: center;
}
</style>
</head>
<body style="background-color:Mistyrose;text-align:center; font-family:courier" >
<h2> Your details are Submitted successfully !!</h2>
<h2> We'll conact you soon when interested buyer contacts us !</h2>
<!-- <a href="login.php"> LOGOUT </a> -->
<div class="button">
                
                <a href="login.php" class="btn btn-outline-primary"> LOGOUT </a>
               
              </div>
</body>
</html>
