<?php
session_start();
//connect to db
function connect_mysql()
{
	$conn=@mysql_connect("localhost","root","test1234")or die ("mysql can not connect!"); 
	@mysql_select_db("Tom_projects",$conn) or die ("db can not connect!`".mysql_error()); 
	mysql_query('SET NAMES UTF8')or die ("UTF8 can not work!"); 
}

//*******************************************************************
function regist_user_all($uemail,$uaddr,$uphone)
{
	$sql="UPDATE `q5_users` SET `uemail`='$uemail',`uaddr`='$uaddr',`uphone`='$uphone' WHERE" ; 
	mysql_query($sql); 
	//echo "Sign in ok!";  
}
//sign in user info to db
function regist_user($uname,$upwd)
{
	$sql="INSERT INTO `q5_users`(`uname`, `upwd`,`addtime`) VALUES ('$uname','$upwd',now())" ; 
	mysql_query($sql); 
	$insert_id=mysql_insert_id();
	//echo "Sign in ok!";  
	?>
	<!--********************************************************************-->
	<div style="margin:40px auto; width:600px;border: 0px solid #000;">
		<form action="index.php" method="post">
		<fieldset>
		    <legend><strong>Add Other user info</strong></legend> 
		    <table>
		    	<tr><td>Email: </td><td><input type="text" name="uemail" required></td></tr>
		    	<tr><td>Address:</td><td><input type="text" name="uaddr" required></td></tr>
		    	<tr><td>Phone:</td><td><input type="text" name="uphone" required></td></tr>
		    	<?php
		    		echo "<input type='text' name='uid' value='$insert_id'>";
		    	?>
		    	<tr><td colspan="2" style="text-align: center;"><input style="width:100px;" type="submit" name="uinfo_add" value="Add"></td></tr>
		    </table>		
		</fieldset>
	</form> 
</div>
	<?php
}
//*****************************************************************
function login_sys($uname,$upwd)
{
	$sql="SELECT `id`,`admin` FROM `q5_users` WHERE `uname`='$uname' and `upwd`='$upwd'" ; 
	//echo $sql;
	$result=mysql_query($sql);
	$nubrows=mysql_num_rows($result); 
	if ($nubrows==1) {
		$rs=mysql_fetch_array($result);
		$_SESSION["uname"]=$uname;
		$_SESSION["admin"]=$rs["admin"];
		if ($rs["admin"]==1) {
			//echo"admin";
			header("Location:admin.php");
		}
		else
		{
			//echo"user";
			header("Location:users.php");
		}
		 
	}
	else
	{
		echo"username or password wrong!"; 
		/*echo "<SCRIPT LANGUAGE='JavaScript'>-
    window.alert('Succesfully Updated')
    window.location.href='users.php';
    </SCRIPT>";*/
	}
}
if(isset($_POST['uinfo_add'])){ 
	$uemail=$_POST['uemail']; 
	$uaddr=$_POST['uaddr']; 
	$uphone=$_POST['uphone']; 
	connect_mysql();
	regist_user($uname,$upwd);
}

//login to  sys
if(isset($_POST['login'])){ 
	$uname=$_POST['uname']; 
	$upwd=$_POST['upwd']; 
	connect_mysql();
	login_sys($uname,$upwd);
}
//**********************************************************
//register new user
if(isset($_POST['register'])){ 
	$uname=$_POST['uname']; 
	$upwd=$_POST['upwd']; 
	connect_mysql();
	regist_user($uname,$upwd);
}
else
{
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div style="margin:40px auto; width:300px;border: 1px solid #000;">
	<fieldset>
	    <legend><strong>User Sign up / Sign in</strong></legend> 
	<form action="index.php" method="post"> 
	 <table>
	    	<tr><td>User Name:</td><td> <input type="text" name="uname" required></td></tr>
	<tr><td>Password:</td><td><input type="text" name="upwd" required></input></td></tr>
	<tr><td><input type="submit" name="login" value="Login"></td><td><input type="submit" name="register" value="Register"></td></tr>
</form> 
</fieldset>
</div>
</body>
</html>
<?php
}
?>
