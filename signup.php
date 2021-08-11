<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        overflow-x: hidden;
    }
    .main-content{
        width: 50%;
        height: 40%;
        margin: 10px auto;
        background-color: #fff;
        border: 2px solid #e6e6e6;
        padding: 40px 50px;
    }
    .header{
        border: 0px solid #000;
        margin-bottom: 5px;
    }
    .well{
        background-color: #187fab;
    }
    #signup{
        width: 60%;
        border-radius: 30px;
    }
</style>
<body>
<div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color:white;">Finsta</h1></center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class = "col-sm-12">
            <div class = "main-content">
                <div class="header">
                    <h3 style="text-align:center;"><strong>Join Finsta</strong></h3><hr>
                </div>
                <div class="l-part">
                    <form action="" method = "post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" placeholder="Email Address" name="u_email" required="required">
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron"></i></span>
                            <select class="form-control" name="u_country" required="required">
                                <option disabled>Select Your Country</option>
                                <option>India</option>
                                <option>USA</option>
                                <option>Japan</option>
                                <option>Russia</option>
                                <option>France</option>
                                <option>Germany</option>
                                <option>Australia</option>
                                <option>United Kingdom</option>
                                <option>Canada</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-chevron"></i></span>
                            <select class="form-control input-md" name="u_gender" required="required">
                                <option disabled>Gender</option>
                                <option>Female</option>
                                <option>Male</option>
                                <option>Others</option>
                            </select>
                        </div><br>
                        
			<div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input type="date" class="form-control input-md" placeholder="DOB" name="u_birthday" required="required">
                        </div><br>
			
                        <a style="text-decoration: none; float: right; color:#187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>
                        <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
                        <?php include("insert_user.php");?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>