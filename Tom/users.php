<?php
session_start();
//if ($_SESSION["admin"]!=1) {
	//echo "You do not have permission to access this page!";
//}
//else
//{
//*************************************************************
	//connect to db
	function connect_mysql()
	{
		$conn=@mysql_connect("localhost","root","test1234")or die ("mysql can not connect!"); 
		@mysql_select_db("Tom_projects",$conn) or die ("db can not connect!`".mysql_error()); 
		mysql_query('SET NAMES UTF8')or die ("UTF8 can not work!"); 
	}

	function create_range_select($selected_id){
			connect_mysql();
			$sql="SELECT `id`, `pbrand` FROM `brand_range`" ; 
			$i=0;
			$result=mysql_query($sql);
			while ($rs=mysql_fetch_array($result)) {
				if ($rs['id']==$selected_id) {
					echo "<option value='".trim($rs['id'])."' selected>".ucwords($rs['pbrand'])."</option>";
				}
				else{
					echo "<option value='".trim($rs['id'])."'>".ucwords($rs['pbrand'])."</option>";
				}
				$i++;
			}
	}

	function create_range_search_result(){
			connect_mysql();
			$sql="SELECT `id`, `prange` FROM `q5_products_range`" ; 
			$result=mysql_query($sql);
			while ($rs=mysql_fetch_array($result)) {
				echo "<option value='".$rs['id']."'>".ucwords($rs['prange'])."</option>";
			}
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<style type="text/css">
		.myTable {border: 1px solid black;width: 100%;table-layout:fixed ;}
	   .myTable tr:nth-child(even) {background: #CCC}
	   .myTable tr:nth-child(odd) {background: #FFF}
	   .myTable td{text-align: center;word-wrap:break-word;}
	   .myTable th{background-color: #173B0B;color: #fff;}
		</style>
		<script language="JavaScript" type="text/javascript">
	function select(obj){
	window.location.href='users.php?id='+obj.options[obj.selectedIndex].value;
	return; 
	}
	</script>
	</head>
	<body>
		<div style="margin:40px auto; width:600px;border: 0px solid #000;">
		
		<!--********************************************************************-->
		<form action="users.php" method="post">
		<fieldset>
		    <legend><strong>Products information</strong></legend> 
		    <table class="myTable" style="border-bottom: : 0px solid black;">
		    	
		    	<?php
		    		if(!empty($_GET['id'])){ 
						$prange=$_GET['id']; 
						?>
		    	<tr><td colspan="3" style="text-align: right;" >Product rice range($): </td><td colspan="1" style="text-align: right;" ><select name="prange" onchange="select(this)">
		    		<option value="0">Please select </option>
		    		<?php create_range_select($prange);?>
		    		<!--<option value="1">1-10</option><option value="2">10-20</option>-->

		    		</select> <!--<input style="width:100px;" type="submit" name="search_range" value="Go">--></td></tr>
		    </table><br><table class="myTable">
		    <tr><th  style="width:50px;">ID</th><th style="width:100px;">Name</th><th style="width:300px;">Detail</th><th>Price($)</th></tr>
		    	<?php
						connect_mysql();
						$sql="SELECT `id`, `pname`, `pdetail`, `pprice` FROM `q5_products` where `prangeid`=$prange" ; 
						$result=mysql_query($sql);
						while ($rs=mysql_fetch_array($result)) {
							echo "<tr><td>".$rs['id']."</td><td><a href='users.php?id=".$prange."&pid=".$rs['id']."'>".ucwords($rs['pname'])."</a></td><td>".ucwords($rs['pdetail'])."</td><td>".ucwords($rs['pprice'])."</td></tr>";
						}
					}
					else
					{
						?>
						<tr><td colspan="3" style="text-align: right;" >Product Brand range: </td><td colspan="1" style="text-align: right;" ><select name="prange" onchange="select(this)">
							<option value="0">Please select </option>
		    		<?php create_range_select();?>
		    		</select></td></tr>
						<?php
					}
		    	?>
		    </table>		
		</fieldset>
	</form> 
	</div>


	<!--*********************************************************************************************-->

	<div style="margin:40px auto; width:600px;border: 0px solid #000;">
		
		<!--********************************************************************-->
		<form action="users.php" method="get">
		<fieldset>
		    <legend><strong>Products information</strong></legend> 
		    <table class="myTable" style="border-bottom: : 0px solid black;">
		    	
		    	<?php
		    		if(!empty($_GET['pid'])){ 
						$pid=$_GET['pid']; 
						connect_mysql();
						$sql="SELECT `id`, `pname`, `pdetail`, `pprice` FROM `q5_products` where `id`=$pid" ; 
						$result=mysql_query($sql);
						while ($rs=mysql_fetch_array($result)) {
							echo "<tr><td>Product Name</td><td>".ucwords($rs['pname'])."</td></tr>
								<tr><td>Product Detail</td><td>".ucwords($rs['pdetail'])."</td></tr>
								<tr><td>Product Price</td><td>".ucwords($rs['pprice'])."</td></tr>";
						}
					}
					else
					{
						?>
						<!--<tr><td colspan="3" style="text-align: right;" >Product rice range($): </td><td colspan="1" style="text-align: right;" ><select name="prange" onchange="select(this)">
							<option value="0">Please select </option>
		    		<?php create_range_select();?>
		    		
		    		</select></td></tr>-->
						<?php
					}
		    	?>
		    </table>		
		</fieldset>
	</form> 
	</div>
	</body>
	</html>
<?php
//}
?>