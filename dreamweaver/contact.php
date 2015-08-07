<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="web-portfolio" content="Bike Shed London 2015">
<meta name="keywords" content="Dreamweaver-based web-page">
<meta name="author" content="Brian Kim">
<title>Contact</title>

<style type="text/css">


body { 
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	line-height: 1.5em;
	color: #333333;
} 
#innerMain {
	background-color: #FFCC00;
	height: 448px;
	width: 1024px;
	border-radius: 15px;
}
h1 {
	font-family: "Comic Sans MS", cursive, Sarina;
	margin: 0px;
	font-size: 4.5em;
}
h2 {
	margin: 0px;
	font-size: 1.75em;
}
#container {
	height: 768px;
	width: 1024px;
	margin-right: auto;
	margin-left: auto;
}
header {
	height: 95px;
	width: 989px;
	background-color: #000;
	color: #FFF;
	padding-top: 35px;
	padding-left: 35px;
}
#titleBar {
	height: 35px;
	width: 1024px;
	background-color: #FFCC00;
	text-align: center;
	padding-top: 15px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}
#main {
	height: 460px;
	width: 1024px;
}
#main #contentOne {
	height: 388px;
	width: 512px;
	float: left;
	padding-top: 72px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 60px;
}
#main #contentTwo {
	height: 388px;
	width: 425px;
	float: right;
	padding-top: 72px;
	overflow: hidden;
	padding-left: 0px;
	padding-right: 15px;
	font-size: 16px;
}
footer {
	height: 100px;
	width: 1024px;
}
#topNav {
	height: 35px;
	width: 1009px;
	font-weight: bold;
	text-transform: uppercase;
	color: #f5a06e;
	padding-top: 10px;
	padding-right: 0px;
	padding-bottom: 5px;
	padding-left: 15px;
	float: none;
}
#topNav a:hover {
	border-bottom-width: 1.5px;
	border-bottom-style: solid;
	border-bottom-color: #f5a06e;
}
#topNav a {
	font-weight: bold;
	text-transform: uppercase;
	color: #f5a063;
	text-decoration: none;
	display: inline-block;
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 0px;
	padding-left: 0px;
}
footer #bottomNav {
	height: 40px;
	width: 1025px;
	text-decoration: none;
	text-align: center;
	padding-top: 10px;
	margin-right: 15px;
	float: none;
}
#bottomNav a {
	color: #f5a06e;
	text-transform: capitalize;
	font-weight: bold;
	text-decoration: none;
}
#bottomNav a:hover {
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #f5a06e;
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
</head>

<body>
<div id="container">
<header>
<h1>Bike Shed London 2015</h1>
</header>
<div id="titleBar">
  <h2>Racing is  Life + Before or After</h2>
</div>
<!-- end titleBar-->
<nav id="topNav"><a href="index.html">Home</a> <a href="about.html">About Us</a><a href="exhibits.html"> Exhibits</a><a href="contact.html"> Contact Us</a></nav><!-- end topNav -->
<div id="main">
<div id="innerMain">
<div id="contentOne"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.286534094263!2d-0.05884099999999358!3d51.507959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x438a8f1c8d683e45!2sTobacco+Dock!5e0!3m2!1sen!2snz!4v1437441183035" width="512" height="290" frameborder="0" style="border:0" allowfullscreen></iframe></div><!-- end contentOne -->
  <div id="contentTwo">
    
    <form name="form1" method="post" action="contact.php">
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
if(isset($_REQUEST["submit"]))
{
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$gender=$_POST["gender"];

mail('keepboy50@nate.com');

echo "Successfully Sent the Email<br><a href='../index.html'>back to Homepage</a>";
}
?>
   

    
  </div><!-- end contentTwo -->
  </div><!-- end innermMain -->
</div>
<!-- end main -->
<footer>
<nav id="bottomNav">
<p><a href="https://www.facebook.com/BikeShedMotorcycleClub?fref=photo"><img src="Image/social-facebook-box-blue-icon.png" width="48" height="50" alt="facebook"></a><a href="https://instagram.com/bikeshedmc"><img src="Image/instagram.jpg" width="50" height="50" alt="instagram"></a><a href="http://thebikeshed.cc/"><img src="Image/logo.jpg" width="50" height="50" alt="logo"></a></p>

</nav>
</footer>
</div><!-- container -->
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>
</body>
</html>
