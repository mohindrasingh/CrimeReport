<html>
<head>
<title>User FIR insert into database and fetch from database</title>

		 <!-- Use link logo -->
	<LINK REL="SHORTCUT ICON"
       HREF="img3.png"></LINK>

<style type="text/css">

		body{

			margin: 0;
			padding: 0;
			background-image: url('img4.jpg');
            background-repeat: no-repeat;
            background-attachment: ;
            background-size: cover;
            background-position: cover;
		} /*use background; */

		.H{
			padding-top: 30px;
			text-align: center;
		}/* Heading2 */

	</style>

</head>
<body>
	<h2 class="H">CRIME REPORTING!</h2>
</body>
</html>

<?php
error_reporting(0); //ignore error reorting message;
$sn= "localhost"; //server name;
$un= "root"; //user name;
$pwd= ""; //password;
$db= "crimereports"; //database name;
$conn= mysqli_connect( $sn, $un, $pwd, $db); //connection with database;
$un= $_POST['user']; //declare variables;
$adr=$_POST['adrs'];
$mob= $_POST['num'];
$em= $_POST['Email'];
$ca= $_POST['area'];
$ps= $_POST['pst'];
$tm= $_POST['time'];
$dt= $_POST['date'];
$dc= $_POST['desc']; 
 
 //check connection for data inserting.
	if($conn){

     $query= "insert into fir(Name, Address, MobileNo, Email, Crime_Area, Police_Station, FIR_time, FIR_date, Description) values ('$un', '$adr', '$mob', '$em', '$ca', '$ps', '$tm', '$dt', '$dc')";
    $result=mysqli_query($conn, $query);

$sn= "localhost"; //server name;
$un= "root"; //user name;
$pwd= ""; //password;
$db= "crimereports"; //database name;    
$conn= mysqli_connect( $sn, $un, $pwd, $db); //connection with database;
$mo= $_POST['num'];
   
   if($conn){
    	
	$query= "select *from fir where MobileNo='".$mo."' ";
    
    $result= mysqli_query($conn, $query);
    
    if($query){
	echo "<center><h3><u>Your FIR Registration Successfull</u></h3></center>";
   }
}
}

else
{
	echo "Somethings wents wrong";
}
	

?>
<html>
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
		
		<?php
		// Fetch fir from mysql database;
		while ($rows= mysqli_fetch_assoc($result)){
		?> 
		<tr>
		<td><?php echo $rows['FIR_Id'];?></td>
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
<br>
&nbsp; &nbsp; &nbsp; <a href="Home.php" style="color: white">Go to Home</a> &nbsp; <a href="UserFirreg.php" style="color: white">Previous Page</a> 
</body>
</html>