<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html >
<head>
    
    <title> GO EASY-LOGIN HOME</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body {
    width: 100%;
    height: 100vh;
    background-image: url(12.jpg);
    background-size: cover;
    background-position: center;
}
.login-box{
    max-width: 1000px;
    float: none;
    margin: 10px auto;
}
.login-left{
    background:rgba(104, 69, 69, 0.205);
    padding: 30px;
}
.login-right{
    background:rgb(133, 90, 90, 0.59);
    padding:30px;
}
.form-control{
    background-color: transparent !important;
}
</style>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body style="background-color:Mistyrose;text-align:center; font-family:courier" >

<!-- <div class="banner7"> -->
    <div class="container">
    
               <h2 class="text-center text-success"> WELCOME <?php echo $_SESSION['username']; ?> </h2>
               <!-- <a href="login.php"> LOGOUT </a> -->
               <div class="button">
                
                <a href="login.php" class="btn btn-outline-danger"> LOGOUT </a>
               
              </div>

               <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2> FOR SELLERS </h2>
                <form action="validation101.php" method="post">
<div class="form-group">
<label> Seller name</label>
<input type="text" name="sellername" class="form-control" required>
</div>
<div class="form-group">
    <label> Company name</label>
    <input type="text" name="companyname" class="form-control" required>
</div>
<div class="form-group">
    <label> seller email</label>
    <input type="email" name="selleremail" class="form-control" required>
</div>
<div class="form-group">
    <label>seller Contact</label>
    <input type="text" name="sellercontact" class="form-control" required>
</div>
<div class="form-group">
    <label> Product type</label>
    <input type="text" name="sellerproduct" class="form-control" required>
</div>
<div class="form-group">
    <label> Product quantity</label>
    <input type="text" name="productquantity" class="form-control" required>
</div>
<div class="form-group">
    <label> Product Price Range</label>
    <input type="text" name="productpricerange" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary"> SUBMIT </button>
</form>
</div>


<div class="col-md-6 login-right">
                <h2> FOR BUYERS </h2>
                <form action="validation102.php" method="post">
                    <div class="form-group">
                        <label> Buyer name</label>
                        <input type="text" name="buyername" class="form-control" required>
</div>
<div class="form-group">
    <label> Buyer email</label>
    <input type="email" name="buyeremail" class="form-control" required>
</div>
<div class="form-group">
    <label>Buyer Contact</label>
    <input type="text" name="buyercontact" class="form-control" required>
</div>
<div class="form-group">
    <label> Buy Product type</label>
    <input type="text" name="buyproduct" class="form-control" required>
</div>
<div class="form-group">
    <label> Buy Product quantity</label>
    <input type="text" name="buyproductquantity" class="form-control" required>
</div>
<div class="form-group">
    <label> Buy Product Price Range </label>
    <input type="text" name="buyproductprice" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary"> SUBMIT </button>
</form>
</div>
    
    </div>
<!-- </div>     -->
</body>
</html>