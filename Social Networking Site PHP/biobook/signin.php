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
							$email=$_POST['email'];
							$password=$_POST['password'];
						
							$sql="SELECT * FROM user WHERE email = '$email' and password='$password'"
							or die("error in login");
							
							$result= mysqli_query($conn,$sql);
							$count = mysqli_num_rows($result);		
							if ($count == 1) 
							{
								header("Location:home.php");

							}
							elseif (!$count == 1) 
							{	
								echo "error";

								}
								// if ($count == 1) 
								// 	{
								// 	echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
								// 	} 
								// else if ($count > 0)
									// {
									// 	session_start();
									// 	$_SESSION['id'] = $row['user_id'];
									// 	header("location:home.php");
						
										
						}
?>
<!DOCTYPE html>
<html>

	<head>
		<title>MERU UNVERSITY</title>
		<link rel="stylesheet" type="text/css" href="css/signin.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
			<table>
			<h1>MERU UNIVERSITY SOCIAL MEDIA PLATFORM</h1>
			<h2>Log in</h2>
	<form method="post" action="signin.php" enctype="multipart/form-data">
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" placeholder="example@gmail.com" class="form-1" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" placeholder="********" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Clear" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		
		</div>
	</div>

</body>

</html>