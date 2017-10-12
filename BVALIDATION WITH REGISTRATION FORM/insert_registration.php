<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	session_start();
	include_once("connection.php");
	$c=new connection();
	$c->connect();
	if(isset($_REQUEST["captcha"]))
	{
	if($_SESSION["captcha"]==$_REQUEST["captcha"])
	{
		if($_REQUEST["txtpwd"]==$_REQUEST["txtcpwd"])
		{
			$c->sql="insert into registration values('','".$_REQUEST["txtfname"]."','".$_REQUEST["txtlname"]."','".$_REQUEST["taadd"]."','".$_REQUEST["txtzipcode"]."','".$_REQUEST["txtphn"]."','".$_REQUEST["txtemailid"]."','".$_REQUEST["txtuname"]."','".$_REQUEST["txtpwd"]."','user')";
			$c->insert_update_delete($c->sql);	
			echo "<script>alert('Your registration done Successfully!');
					document.location='index.php?page=login.php'</script>";
		}
		else
		{
			echo "<script>alert('Please enter correct confirm password!');
					document.location='index.php?page=registration.php'</script>";
		}
	}
	else
	{
	echo "<script>alert('Invalid Code');document.location='index.php?page=registration.php'</script>";
	}
	}
	
	
?>
</body>
</html>
