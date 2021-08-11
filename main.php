<!DOCTYPE html>
<html lang="en">
<head>
    <title>Finsta Login and Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>

    body{
	    background-image: url('images/bg.jpg');
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	    background-size: cover;
      overflow-x: hidden;
    }
    #centered1{
        position: absolute;
        font-size: 10vw;
        top: 30%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    #centered2{
        position: absolute;
        font-size: 10vw;
        top: 50%;
        left: 40%;
        transform: translate(-50%, -50%);
    }
    #centered3{
        position: absolute;
        font-size: 10vw;
        top: 70%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    #signup{
        width: 60%;
        border-radius: 30px;
    }
    #login{
        width: 60%;
        background-color: #fff;
        border: 1px solid #1da1f2;
        color: #1da1f2;
        border-radius: 30px;
    }
    #login:hover{
        width: 60%;
        background-color: #fff;
        color: #1da1f2;
        border: 2px solid #1da1f2;
        border-radius: 30px;
    }
    .well{
        background-color: #187fab;
    }
</style>
<body>
    <div class="row">
        <div>
            <div class="well">
                <center><h2 style="color:white;">Finsta</h2></center>
            </div>
        </div>
    </div>
    <div class ="row">
        <div class = "col-sm-6" style="left:30%;">
            <img src="images/logo.png" class="img-rounded" title="finsta" width="80px" height="80px">
            <h2><strong>Rewamp your online presence. <br>Experience the world at your fingertips.</strong><br><br></h2>
            <h4><strong>Join Finsta Today.</strong></h4>
            <form method="post">
                <button id = "signup" class = "btn btn-primary btn-lg" name = "signup">Sign Up</button>
                <?php
                    if(isset($_POST['signup'])){
                        echo "<script>window.open('signup.php','_self')</script>";
                    }
                ?>
                <button id = "login" class = "btn btn-primary btn-lg" name = "login">Login</button>
                <?php
                    if(isset($_POST['login'])){
                        echo "<script>window.open('signin.php','_self')</script>";
                    }
                ?>
            </form>
        </div>
    </div>

</body>
</html>
