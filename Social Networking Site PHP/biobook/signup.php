

<?php 

$servername='localhost';
$username='root';
$password="";
$dbname='Biobook';
$conn=new mysqli("$servername","$username","$password","$dbname");
if(!$conn){
	echo"connected success";
}
	
	if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$username2=$_POST['username2'];
		$birthday=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$email2=$_POST['email2'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		
		// 	$sql=mySQLI_query("select * from user WHERE email='$email'") or die (mySQLI_error());
		// 	$row=mySQLI_num_rows($sql);
		// 	if ($row > 0)
		// 	{
		// 	echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
		// 	}
		// 	elseif($password != $password2)
		// 	{
		// 	echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
		// 	}else
		// {
	   
	   $sql="INSERT INTO user (firstname,lastname,username,username2,birthday,gender,phone,email,email2,password,password2)
			VALUES ('$firstname','$lastname','$username','$username2','$birthday','$gender','$phone','$email','$email2','$password','$password2')";
			$results=mysqli_query($conn,$sql);
			if($results ==1)
			{
				
				header("location:index.php");
			}
			// echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
		
		}	

	
?>


<!DOCTYPE html>
<html>

	<head>
		<title> MERU UNVERSITY </title>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
		<center>	
			<h1>WELCOME TO MERU UNVERSITY SOCIAL MEDIA SITE</h1>
		</center>

			<h2>Sign up</h2>
			<b>All fields are required.</b>
		<br />
		
		<fieldset class="sign-up-form-1">
		<form method="post" action="signup.php" enctype="multipart/form-data">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>First name</label></td>
					<td><label>Last name</label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Enter your firstname....." class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="lastname" placeholder="Enter your lastname....." class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label>User name</label></td>
					<td><label>Repeat user name</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
					<td><input type="text" name="username2" class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: No one can follow your username.</td>
				</tr>
			</table>
		</fieldset>
		
		<br />		
		
		<fieldset class="sign-up-form-1">
			<legend>Profile information</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Birthday</label></td>
					<td>
					<select name=day style="font-size:18px;" required>
					<?php

					$day=1;
					while($day<=31)
					  {
					  echo "<option> $day
					  </option>";
					  $day++;
					  }
					?>
					</select>
					<select name=month style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name=year style="font-size:18px;" required>
					<?php
					$year=1901;
					while($year<=2014)
					  {
					  echo "<option> $year
					  </option>";
					  $year++;
					  }
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td>
					<input type="radio" name="gender" value="male" required /><label>Male</label>
					<input type="radio" name="gender" value="female" required /><label>Female</label>
					</td>
				</tr>
				<tr>
					<td><label>Mobile number</label></td>
					<td><input type="text" name="phone" placeholder="07......" maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
				</tr>
			</table>
		</fieldset>
		
		<br />
		
		<fieldset class="sign-up-form-1">
			<legend>Log in information</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Your email address</label></td>
					<td><label>Repeat email</label></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Enter your email address....." class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="email2" class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: no-one can see your email address.</td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><label>Enter password Again</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Enter your password....." class="form-1" title="Enter your username" required /></td>
					<td><input type="password" name="password2" class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: no-one else can see your password.</td>
				</tr>
			</table>
		</fieldset>
		
		<br />
		
			<strong>Yes, I have read and I accept the <a href="#">Biobook Terms of Use</a> and the <a href="#">Biobook Privacy Statement</a></strong>
			
		<br />
		<br />
					<input type="submit" name="submit" value="I Agree - Continue" class="btn-sign-in" title="Log in" />
		</form>
		
		</div>
	</div>

</body>

</html>