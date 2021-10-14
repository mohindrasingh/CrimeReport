<html>
<head>
<title>Emergency contact</title>

	<!-- Use link logo -->
	<LINK REL="SHORTCUT ICON"
       HREF="img3.png"></LINK>
<body>
<?php
error_reporting(0); //ignoring error message;
$sn="localhost"; //server name;
$un="root"; //user name;
$pwd=""; //password;
$db="crimereports"; //database name;
$conn= mysqli_connect($sn, $un, $pwd, $db); //connectivity with mysql;

//checking connection
if ($conn){

	$query="select *from Emergency";
	$result= mysqli_query($conn, $query);
}

else{
	echo "Data Not Retrive";
}
?>
</body>
</head>
</html>

<html>
<head>
	<style type="text/css">
		body { 
  background-image: url('img10.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size: cover;
  background-position: cover; 
 

   } /*use for background image*/

		.s{
			margin-top: 50px;
			font-family: times new roman;
			font-size: 40px;
			font-style: italic;
			text-align: center;
		}
		.tab{
			font-size: 18px;
			font-family: algerian;
			text-align: center;
			background: transparent;

		}
	</style>
<body>
	<h1 class="s">Emergency Contact</h1>
<table class="tab" align="center" border="1px" bgcolor="silver" cellpadding="5px" cellspacing="2px">

	<tr><td><center>Serial No</center></td><td><center>Emergency Contact</center></td><td><center>Contact No</center></td></tr>
<?php
   //data fetching from mysql database
   while ($rows= mysqli_fetch_assoc($result)){
    ?>
    <tr><td><?php echo $rows['Serialno'];?></td>
    <td><?php echo $rows['Emergency_Contact'];?></td>
    <td><?php echo $rows['Contact_No'];?></td></tr>
   <?php
     }
      ?>
</table>
<br>
<center><a href="Home.php" style="color: white">Back to home</a></center>
</body>
</head>
</html>