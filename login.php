<?php
include('connection/conn.php');

if (isset($_POST['sign_up'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];

     if (!($password == $con_password)) 
    {
        $err = "Password did not match...";
        header('location:register.php?err='.$err);
    }else {
        $sql = "INSERT INTO registration (first_name, last_name, email, gender, password) VALUES ('$firstname', '$lastname', '$email', '$gender', '$password')";
			$query = mysqli_query($conn, $sql);

			if ($query) 
			{
				$succ = "Registration successful...";
				header('location:login.php?succ='.$succ);
			}else
			{
				$err = "Registration failed...";
				header('location:login.php?err='.$err);
			}
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>AsoDogs | Register</title>
	<style>
	 h3{
		font-size: 40px;
		padding-left: 50px;
		font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
	}
	</style>
</head>
<body>
<h3>ASODOGS</h3>
<?php 
	if (isset($_GET['succ'])) 
	{
?>
	<h4><?php echo ($_GET['succ']); ?></h4>
<?php
	}elseif (isset($_GET['err']))
	{
?>
		<h4><?php echo ($_GET['err']); ?></h4>
<?php	
	}
 ?>
<div class="container">
			<div class="row">
				
				<div class="col-md-6 contact-grid">
					<h4 style="text-align: center;">Sign Up</h4><br>
					<form method="post" action="" enctype="multipart/form-data">
						<input type="text" class="form-control" name="firstname" value="FirstName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'FirstName';}" required=""> <br>
						<input type="text" class="form-control" name="lastname" value="LastName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'LastName';}" required=""><br>
						<input type="email" name="email" class="form-control" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required=""><br>
						<input type="text" class="form-control" name="gender" value="Gender" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Gender';}" required=""><br>
						<input type="password" class="form-control" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"  required=""><br>
						<input type="password" class="form-control" name="con_password" value="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}"  required=""><br>
						<input type="submit" name="sign_up" value="Sign up" >
					</form>
				</div>
				<div class="col-md-6 contact-grid">
					<h4 style="text-align: center;">Sign In</h4><br>
					<form method="post" action="login_process.php">
						<input type="email" class="form-control" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required=""> <br>
						<input type="password" class="form-control" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required=""><br>
						<input type="submit" name="sign_in" value="Sign In" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>