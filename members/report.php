
<?php 
error_reporting(0);
$username="root";
$password="";
$host="localhost";
$database="fpms";
$db_link=mysqli_connect($host,$username,$password,$database)or die("ERROR".mysqli_error($db_link));
if (mysqli_connect_error()){
	echo "Could not connect to mysqli. Please try again";
	exit();
}
?>

<link rel="stylesheet" type="text/css" href="css/css1.css">
<script>
	function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
</script>

<body>



<div id="container">
<div id="header">





<table border="0" align="center" cellpadding="0" cellspacing="0" width="80%">
      
      <tr>
      <form action="r.php" method="get" ecntype="multipart/data-form">
        <td width="48%" height="37" align="right"><input type="text" name="d1" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="From Eg.2015-05-13" required /></td>
        <td width="15%" align="left"> <input type="text" name="d2" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="To Eg.2015-06-13" required  /> </td>
        <td width="0%" align="left"><input type="submit" id="btnsearch" value="Search" name="search" /></td>
        </form>
      </tr>
    
    </table></th>
  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #033; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #030; background: #030; color:#FFF;"> Summary  report </th>
    </tr>
    
      <tr height="30px">
      	<th style="border-bottom:1px solid #333;"> Admin_No </th>
      	<th style="border-bottom:1px solid #333;"> Name </th>
        <th style="border-bottom:1px solid #333;"> Fees paid </th>
        <th style="border-bottom:1px solid #333;"> Balance </th>
        <th style="border-bottom:1px solid #333;"> Branch</th>
        
      </tr>
      
        <!-- Search goes here! -->
 

  
  		<!-- Search end here -->
      
       <?php

if(isset($_GET['search'])){
			$d1 = $_GET['d1'];
			$d2 = $_GET['d2'];
			
$query="SELECT * FROm student WHERE Time BETWEEN '$d1' and '$d2'";
$result=mysqli_query($conn,$db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:35px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['username']; ?> </td>
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['Name']; ?> </td>
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['fees']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['balance']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['branch']; ?> </td>
        
      </tr>
   <?php
}}?>
      
    </table>
    
    <p>&nbsp;</p></td>
  </tr>

<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-bottom-color: #030; border-right-color: #030; border-bottom-style: solid; border-right-style: solid; border-bottom-width: 1px; border-right-width: 1px;">
      
      <tr>
        <td style="border-bottom-color: #030; border-bottom-style: none; border-bottom-width: 1px; border-right-width: 1px; border-top-width: 1px; border-left-color: #030; border-left-style: solid; border-left-width: 1px;"><b>Total Fees Paid:</b></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border-left-color: #030; height:35px; border-right-color: #030; border-left-style: solid; border-right-style: solid; border-left-width: 1px; border-right-width: 1px;">
        
        
		
		 <?php
			if(isset($_GET['search'])){
			$d1 = $_GET['d1'];
			$d2 = $_GET['d2'];
				$view1 = "SELECT sum(fees) FROm student WHERE Time BETWEEN '$d1' and '$d2'";
				$results=mysqli_query($conn,$db_link, $view1);
				for($i=0; $rows = mysqli_fetch_array($results); $i++){
				$total=$rows['sum(fees)'];
				echo $total;
			
				}
			}
	  ?>
        
        </td>
            </tr>
			<tr>
        <td style="border-bottom-color: #030; border-bottom-style: none; border-bottom-width: 1px; border-right-width: 1px; border-top-width: 1px; border-left-color: #030; border-left-style: solid; border-left-width: 1px;"><b>Total Balance:</b></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="border-left-color: #030; height:35px; border-right-color: #030; border-left-style: solid; border-right-style: solid; border-left-width: 1px; border-right-width: 1px;">
        
        <?php
			if(isset($_GET['search'])){
			$d1 = $_GET['d1'];
			$d2 = $_GET['d2'];
				$view1 = "SELECT sum(balance) FROm student WHERE Time BETWEEN '$d1' and '$d2'";
				$results=mysqli_query($conn,$db_link, $view1);
				for($i=0; $rows = mysqli_fetch_array($results); $i++){
				$total=$rows['sum(balance)'];
				echo $total;
				}
			}
	  ?>
        
        </td>
            </tr>
    </table>
</table>