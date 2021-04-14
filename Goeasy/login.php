<html>
    <head>
        <title> LOGIN / REGISTER</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <style>
body{
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(14.jpg);
    background-size: cover;
    background-position: center;
}
.login-box{
    max-width: 700px;
    float: none;
    margin: 80px auto;
}
.login-left{
    background:rgba(135, 154, 214, 0.553);
    padding: 40px;

}
.login-right{
    background:rgb(187, 150, 150, 0.458);
    padding:40px;

}
.form-control{
    background-color: transparent !important;
}
</style>
<!-- <div class="banner6"> -->
<div class="navbar">
            <img src="logo 18.png" class="logo">
            <ul>
               <li><a href="home.html">HOME</a> </li>
               <li><a href="seller.html">FOR SELLERS</a> </li>
               <li><a href="buyer.html">FOR BUYERS</a> </li>
               <li><a href="about.html">ABOUT US</a> </li>
               <li><a href="contact.html">CONTACT US </a> </li>
               <li><a href="login.php">LOGIN / REGISTER</a> </li>

            </ul>
        </div>
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2> LOGIN </h2>
                <h5> Already Registered ? LOGIN HERE</h5>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label> Username</label>
                        <input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
    <label> Password</label>
    <input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> Login </button>
</form>
</div>

<div class="col-md-6 login-right">
                <h2> REGISTER </h2>
                <h5> NEW USER  ??  REGISTER HERE</h5>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label> Username</label>
                        <input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
    <label> Password</label>
    <input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> Register </button>
</form>
</div>
</div>


<!-- </div> -->
</body>
        </html>