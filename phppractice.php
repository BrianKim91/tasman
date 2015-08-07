<!DOCTYPE HTML>
<head>
	
	
	<title></title>

	
</head>

<body>
    <form name="form1" method="post" action="contact-php.html">
      <table>
      <tr>
      <td><span id="sprytextfield1">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      
      <tr>
      <td><span id="sprytextfield2">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone">
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      
      <tr>
      <td><span id="sprytextfield3">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      
      <tr>
      <td><span id="spryselect1">
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
          <option selected>Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
      </tr>
      
      <tr>
      <td><input name="submit" type="submit"></td>
      </tr>
      </table>
      
    </form>	




 <?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="111111"; // Mysql password 
$db_name="bsl_user"; // Database name 
	
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
	
$query = "INSERT INTO `user`  (`name`, `phone`, `email`, `lastname`, `gender`) VALUES ('".$_POST['name']."',
'".$_POST['phone']."'), '".$_POST['email']."', '".$_POST['gender']."');";

$result = mysql_query($query);

?>

</body>
</html>