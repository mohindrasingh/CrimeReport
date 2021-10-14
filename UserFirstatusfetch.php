<html>
<head>
	<title>Fetch FIR status for user</title>

	 <!-- Use link logo -->
	<LINK REL="SHORTCUT ICON"
       HREF="img3.png"></LINK>	
</head>
</html>

 <?php
error_reporting(0); //ignore error report;
$sn   = "localhost"; //server name;
$un   = "root"; //user name;
$pwd  = "";  //password;
$db   = "crimereports"; //database name;
$conn = mysqli_connect( $sn, $un, $pwd, $db); //connection with mysql database;
$i = $_POST['id']; //declare variable;

	  //check connectioin;
    if (isset($_POST['id']) <> "FIR_Id"){
    		header('location: AdminFirStatus.php');
    		echo "Wrong FIR id entered";

}

else{
			$query="select FIR_Id, Name, Address, MobileNo, Email, Crime_Area, Police_Station, FIR_time, FIR_date, Description, Status from fir where FIR_Id='".$i."' ";
	    $result= mysqli_query($conn, $query);
	    if($query){
	    		echo "<h1>CRIME REPORTING</h1> ";
	    		echo "<center><h3><u>FIR Status</u></h3></center>";
	}
}

 ?>

 <html>
<head>
	<title>Fetch FIR Status for user</title>
<style type="text/css">

		body{

			margin: 0;
			padding: 0;
			background-image: url('img21.jpg');
            background-repeat: no-repeat;
            background-attachment: ;
            background-size: cover;
            background-position: cover;
		} /*use background; */

	</style>
</head>
<body>
	
<table align="center" border="1px" bgcolor="silver" cellpadding="10px" cellspacing="10px">

	<tr><td><center>FIR Id</center></td>
	<td><center>Name</center></td>
    <td><center>Address</center></td>
	<td><center>Mobile No</center></td>
	<td><center>Email</center></td>
	<td><center>Crime Area</center></td>
    <td><center>Police Station</center></td>
	<td><center>FIR Time</center></td>
	<td><center>FIR Date</center></td>
    <td><center>Description</center></td>
    <td><center>FIR Status</center></td></tr>

		  <!-- Fetch fir from mysql database -->
		<?php
		while ($rows= mysqli_fetch_assoc($result)){
		?> 
		<tr><td><?php echo $rows['FIR_Id'];?></td>
		<td><?php echo $rows['Name'];?></td>
		<td><?php echo $rows['Address'];?></td>
	    <td><?php echo $rows['MobileNo'];?></td>
	    <td><?php echo $rows['Email'];?></td>
        <td><?php echo $rows['Crime_Area'];?></td>
        <td><?php echo $rows['Police_Station'];?></td>
        <td><?php echo $rows['FIR_time'];?></td>
        <td><?php echo $rows['FIR_date'];?></td>
        <td><?php echo $rows['Description'];?></td>
        <td><?php echo $rows['Status'];?></td>
        </tr>
		<?php
		}
		?>
</table>
<a href="Home.php" style="color: white">Go to Home</a>&nbsp; <a href="UserFirstatus.php" style="color: white">Previous Page</a>
</body>
</html>