<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['email_id'])){
	header("location: index.php");
}
?>
<html>
<head>
	<?php
		$user = $_SESSION['email_id'];
		$get_user = "select * from users where email_id='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

	?>
	<title><?php echo "$first_name $last_name"; ?></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style>
	#cover-img{
		height: 400px;
		width: 100%;
	}#profile_photo{
		position: absolute;
		top: 160px;
		left: 40px;
	}
	#update_profile{
		position: absolute;
		top: 270px;
		cursor: pointer;
		left: 120px;
		border-radius: 4px;
		background-color: rgba(0,0,0,0.1);
		transform: translate(-50%, -50%);
	}
	#button_profile{
		position: absolute;
		top: 265px;
		left: 55%;
		cursor: pointer;
		transform: translate(-50%, -50%);
	}
</style>
<body>
<div class="row">
	<div class="col-sm-2">	
	</div>
	<div class="col-sm-8">
		<?php
			echo"
			<div>
				<div><img id='cover-img' class='img-rounded' src='cover/$cover_pic' alt='cover'></div>
				<form action='profile.php?u_id=$user_id' method='post' enctype='multipart/form-data'>

				<ul class='nav pull-left' style='position:absolute;top:10px;left:40px;'>
					<li class='dropdown'>
						<button class='dropdown-toggle btn btn-default' data-toggle='dropdown'>Change cover image</button>
						<div class='dropdown-menu'>
							<center>
							<p>Click <strong>Select cover image</strong> <br> <strong>Update Cover</strong></p>
							<label class='btn btn-info'> Select Cover
							<input type='file' name='u_cover' size='60' />
							</label><br><br>
							<button name='submit' class='btn btn-info'>Update cover image</button>
							</center>
						</div>
					</li>
				</ul>

				</form>
			</div>

			<div>
				<div><img id='profile_photo' src='users/$profile_pic' alt='Profile' class='img-circle' width='180px' height='185px'></div>
				<form action='profile.php?u_id=$user_id' method='post' enctype='multipart/form-data'>

				<ul class='nav pull-left' style='position:absolute;top:150px;left:40px;'>
					<li class='dropdown'>
						<button class='dropdown-toggle btn btn-default' data-toggle='dropdown'>Change profile photo</button>
						<div class='dropdown-menu'>
							<center>
							<p>Click <strong>Select profile photo</strong> <br> <strong>Update profile photo</strong></p>
							<label class='btn btn-info'> Select Profile photo
							<input type='file' name='u_image' size='60' />
							</label><br><br>
							<button name='update' class='btn btn-info'>Update profile photo</button>
							</center>
						</div>
					</li>
				</ul>

				</form>
			</div>
			";
		?>
		<?php

			if(isset($_POST['submit'])){
				$u_cover = $_FILES['u_cover']['name'];
				$image_tmp = $_FILES['u_cover']['tmp_name'];

				if($u_cover==''){
					echo "<script>alert('Please select cover image')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					exit();
				}else{
					move_uploaded_file($image_tmp, "cover/$u_cover");
					$update = "update users set cover_pic='$u_cover' where user_id='$user_id'";

					$run = mysqli_query($con, $update);

					if($run){
					echo "<script>alert('Cover image is updated')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					}
				}

			}

		?>
	</div>


	<?php
		if(isset($_POST['update'])){

				$u_image = $_FILES['u_image']['name'];
				$image_tmp = $_FILES['u_image']['tmp_name'];

				if($u_image==''){
					echo "<script>alert('Please select a profile photo.')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					exit();
				}else{
					move_uploaded_file($image_tmp, "users/$u_image");
					$update = "update users set profile_pic='$u_image' where user_id='$user_id'";

					$run = mysqli_query($con, $update);

					if($run){
					echo "<script>alert('Your profile has been updated.')</script>";
					echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
					}
				}

			}
	?>
	<div class="col-sm-2">
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-2" style="background-color: #e6e6e6;text-align: center;left: 0.9%;border-radius: 5px;">
		<?php
		echo"
			<center><h2><strong>About</strong></h2></center>
			<center><h4><strong>$first_name $last_name</strong></h4></center>
			<p><strong>Lives In: </strong> $user_country</p>
			<p><strong>Member Since: </strong> $register_date</p>
			<p><strong>Gender: </strong> $user_gender</p>
		";
		?>
	</div>
</div>
</body>
</html>
