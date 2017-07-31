<!doctype html>
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
              
input[type=button] {
    background-color: #4CAF50;
   
    color: white;
    border: none;;
    font-size: 20px;
    border-radius: 2px;
}
a {
  color: $greyColor;
  
}
</style>


</head>

<body>
<center><big><h1>SignUp Form</h1></big></center>
<br>
<div class="container">
 <div class="row">

 <div class="col-md-3"></div>
<div class="col-md-6">
<div class="container-fluid">
<center>
  
    </center>
<br>
    <form class="form-horizontal" action="signup.php" method="post">

<div class="form-group">
      <label class="control-label col-sm-2" for="usr"><big>Full Name</big></label>
      <div class="col-sm-10">
      <input type="text" class="form-control input-lg" id="fn" placeholder="Enter Full Name" name="uname">
    </div>
    </div>
<div class="form-group">
      <label class="control-label col-sm-2" for="usr"><big>User ID:</big></label>
      <div class="col-sm-10">
      <input type="text" class="form-control input-lg" id="usrid" placeholder="Enter User ID" name="uid">
    </div>
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><big>Password:</big></label>
       <div class="col-sm-10">
      <input type="password" class="form-control input-lg" id="pwd" placeholder="Enter Password" name="pswd">
    </div>   
</div>
<div class="form-group">
      <label class="control-label col-sm-2" for="mail"><big>Email:</big></label>
       <div class="col-sm-10">
      <input type="email" class="form-control input-lg" id="mail" placeholder="Enter Email" name="email">
    </div>
    </div>
<div class="form-group">
      <label class="control-label col-sm-2" for="cont"><big>Contact Number:</big></label>
       <div class="col-sm-10">
      <input type="number" class="form-control input-lg" id="cont" placeholder="Contact Number" name="contact">
    </div>
    </div>
 <div class="checkbox">
    <input type="checkbox" checked="checked"> <span style="color:white;font-weight:bold">I Agree with terms and conditions</span> 
 </div>

   <input type="submit" class="btn btn-success btn-block" value="signup" />

<center><span style="color:white;font-weight:bold">Already have an account?</span><a href='signin.php'><strong><big>sign in</a></center>
 </form>
  </div>
 </div>
<div class="col-md-3"></div>
</div>
</div>
<?php 
session_start();
	$fname="";
	$user="";
	$pass="";
	$em="";
	$cont="";
	if(isset($_REQUEST['uid']) && isset($_REQUEST['pswd'])&& isset($_REQUEST['uname'])&& isset($_REQUEST['email'])&& isset($_REQUEST['contact']))
	{
		$fname=$_REQUEST['uname'];
		$user=$_REQUEST['uid'];
		$pass=$_REQUEST['pswd'];
		$em=$_REQUEST['email'];
		$cont=$_REQUEST['contact'];
		try
		{
			$con=mysql_connect("localhost","root","");
			$db=mysql_select_db("project",$con);
			if($db)
			{
				$str="insert into customer(uid,name,password,email,contact)values ('$user','$fname','$pass','$em',$cont)";
				mysql_query($str);
				echo"data inserted to table ";
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
</body>
</html>