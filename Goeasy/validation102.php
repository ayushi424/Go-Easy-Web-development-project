<?php
session_start();
$conn=mysqli_connect('localhost:3309','root','1234');
if($conn){
    echo" connection successful !!";
}else{
    echo" no connection made !";
}
mysqli_select_db($conn, 'buyer');
$buyername = $_POST['buyername'];
$buyeremail = $_POST['buyeremail'];
$buyercontact = $_POST['buyercontact'];
$buyproduct = $_POST['buyproduct'];
$buyproductquantity= $_POST['buyproductquantity'];
$buyproductprice = $_POST['buyproductprice'];


// $q = "select * from signin where name= '$name' && password = '$pass'";
$q="insert into form1(buyername,buyeremail,buyercontact,buyproduct,buyproductquantity,buyproductprice)
 values('$buyername','$buyeremail','$buyercontact','$buyproduct','$buyproductquantity','$buyproductprice')";

$num=mysqli_query($conn,$q);
if($num==1)
{ echo "record inserted succesfully !!";
}
else
{
echo " try again:( ";
}
?>

<!DOCTYPE html>
<html >
<head>
    
    <title> GO EASY- BuyerLOGIN </title>
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
<h2> We'll conact you soon with best deals/offers !</h2>
<div class="button">
                
                <a href="login.php" class="btn btn-outline-primary"> LOGOUT </a>
               
              </div>
</body>
</html>
