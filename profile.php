<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<center><big><h1>Welcome To My Profile</h1>
<hr/>
<?PHP
session_start();
if(isset($_SESSION['uid']))
	{
		$name=$_SESSION['uid'];
		echo "Welcome to $name";
		echo "<br> <a href=logout.php>Logout</a>";
	}
	else
	{
		header('Location: signin.php');	
	}
?>
</body>
</html>