<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bootstrap Example</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
 body{
      background-image: url("1.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
     display: block;
    background-size: cover; 
    }
	
.col-md-6{
  margin: 10px;
  height: 500;
  background-color: rgba(100, 100, 100, 0.3); 
}
              
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    font-size: 20px;
    border-radius: 3px;
}

a {
  color: blue;  
}

</style>
</head>

<body>
<center><big><h1>Login Form</h1></big></center>
<div class="container">
 <div class="row">

 <div class="col-md-3"></div>
<div class="col-md-6">
<div class="container-fluid">
<center>
  <div class="imgcontainer">
    <img src="user1.jpg" alt="Avatar" class="img-circle" height="100" width="100">
  </div>
</center>
<br>
    <form class="form-horizontal" action="signin.php" method="get">
<div class="form-group">
      <label for="usr"><big>User ID</big></label>
      <input type="text" class="form-control input-lg" id="usr" placeholder="Enter User ID" name="uid" />
    </div>
    <div class="form-group">
      <label for="pwd"><big>Password:</big></label>
      <input type="password" class="form-control input-lg" id="pwd" placeholder="Enter Password" name="pswd" />
    </div>   
    <div class="checkbox">
    <input type="checkbox" checked="checked"> <span style="color:white;font-weight:bold">Remember me</span> 
 </div>
 <input type="submit" class="btn btn-success btn-block" value="Login"/>
<center><span style="color:white;font-weight:bold">Don't have an account?</span><a href='signup.php'><strong><big>sign up</a></center>
<tr><td><a href="file:///C:/Users/15-R204TU/Desktop/sweta/templates/mypage.html"><center><h2>GO FOR BOOKS</h2></center></a></td></tr>
 </form>
 <?php
session_start();
	$user="";
	$pass="";
	if(isset($_REQUEST['uid']) && isset($_REQUEST['pswd']))
	{
		$user=$_REQUEST['uid'];
		$pass=$_REQUEST['pswd'];
		try
		{
			$con=mysql_connect("localhost","root","");
			$db=mysql_select_db("project",$con);
			if($db)
			{
				echo"connection successful";
				$str="select * from customer where uid='$user'";
				$r=mysql_query($str);
				$row = mysql_fetch_array($r);
				if($row['password'] == $pass)
				{
					$_SESSION['uid']=$user;
					header("Location: profile.php");
				}
				else
				{
					echo "<center><span color=white>User name & Password Is Wrong</span>";	
				}	
			}
			else
			{
				echo"connection unsuccessful";
			}
		}
		catch(Exception $e)
		{
			echo"error occured $e";
		}
	mysql_close($con);
	}
?>
  </div>
 </div>
<div class="col-md-3"></div>
</div>
</div>
</body>
</html>