<!DOCTYPE HTML>
<head>
	
	
	<title></title>

	
</head>

<body>

<table>
<tr>
<form action="phppractice.php" method="post">
<td>First Name:</td><td><input type="text" name="first"><br></td></tr>
<td>Last Name:</td><td><input type="text" name="last"><br></td></tr>
<td>Phone:</td><td><input type="text" name="phone"><br></td></tr>
<td>Mobile:</td><td><input type="text" name="mobile"><br></td></tr>
<td>fax:</td><td><input type="text" name="fax"><br></td></tr>
<td>Email:</td><td><input type="text" name="email"><br></td></tr>
<td>Web:</td><td><input type="text" name="web"><br></td></tr>
<td><input type="submit"></td>
</form>
</table>
<?
$host="localhost";
$user="root";
$password="111111";
$database="user_information";

$first=$_POST['first'];
$last=$_POST['last'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$web=$_POST['web'];

mysql_connect($host,$user,$password);
@mysql_select_db($database) or die( "Unable to select database");


$query = "INSERT INTO contacts VALUES ('','John','Smith','01234 567890','00112 334455','01234 567891','johnsmith@gowansnet.com','http://www.gowansnet.com')";

mysql_query($query);
mysql_close();

?>

<?php
/************************
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="111111"; // Mysql password 
$db_name="user_information"; // Database name 
	
// Connect to server and select database.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
	
$query = "INSERT INTO `users`  (`email`, `password`, `firstname`, `lastname`, `gender`, `country`,  `updated`) VALUES ('".$_POST['email']."', MD5('".$_POST['password']."'), '".$_POST['firstname']."', 
	'".$_POST['lastname']."', '".$_POST['gender']."', '".$_POST['country']."', '".date('Y-m-d H:i:s')."');";

$result = mysql_query($query);
?>
*************************/
?>

</body>
</html>