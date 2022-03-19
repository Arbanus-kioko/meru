
<?php
include('server.php');

if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select *from users where email='$email'";
$query=mysqli_query($conn,$sql)or die("error in login");
$count=mysqli_num_rows($query);


if ($count == 1) {

header("location:home.php");
}
elseif($count !== 0)
{
echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
}


}
?>


<!DOCTYPE html>
<html>

<head>
<title>Welcome  To Biobook - Sin up, Log in, Chat </title>
<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>

<div id="container">
<div class="sign-in-form">
<table>
<h1>Welcome to Biobook</h1>
<h2>Log in</h2>
<form method="post" action="signin.php" enctype="multipart/form-data">
<tr>
<td><label>Email</label></td>
<td><input type="email" name="email" placeholder="example@razor.com" class="form-1" title="Enter your email" required /></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" placeholder="~~~~~~~~~~" class="form-1" title="Enter your password" required /></td>
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
<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
</td>
</tr>
</form>
</table>

</div>
</div>

</body>

</html>
