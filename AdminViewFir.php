<html>
<head>
<title>Fatch Fir</title>
  <LINK REL="SHORTCUT ICON"
    HREF="img3.png"></LINK><!-- Use link logo -->
    
   </head>
   </html>

<?php
	
$sn="localhost"; // server name;
$un="root"; // user path;
$pwd=""; // password;
$db="crimereport"; // database name;
$conn= mysqli_connect($sn, $un, $pwd, $db); // connection with mysql;
   	
  // checking connection;
 if ($conn){
	$query="select *from fir";
    $result= mysqli_query($conn, $query);
    
  if($query){
	    echo "<center><h3><u>FIR Details of Users</u></h3></center>";
            }
            }
else{
	echo "Data Not Retrive";
	 }

?>
<html>
<head>
 <style type="text/css">
   
    body{ 

      background-image: url('img11.jpg');
      background-repeat: no-repeat;
      background-attachment: ;
      background-size: 100%;
      background-position: cover;
          }/*background*/
 </style> 
</head>
<body>

 <table align="center" border="1px" bgcolor="silver" cellpadding="10px" cellspacing="10px">
   	 
  <tr>  <!-- <tr></tr> tag is used for table row; -->  
	<td><!-- <td></td> tag is used for table data; -->
	  <center>FIR_Id</center></td>
	  <td><center>Name</center></td>
	  <td><center>Address</center></td>
	  <td><center>Mobile No</center></td>
	  <td><center>Email</center></td>
	  <td><center>Crime Area</center></td>
	  <td><center>Police Station</center></td>
	  <td><center>FIR Time</center></td>
	  <td><center>FIR Date</center></td>
	  <td><center>Description</center></td>
	  <td><center>FIR Status</center></td>
    </tr>
		
<?php
   // fecthing data of mysql database;
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

<form action="FirUpdateDlt.php" method="POST" style="padding-right: 20">
	<br>
	<br>
	Enter FIR Id :&nbsp;&nbsp;&nbsp;
	<input type="text" name="updt" value="" required="" autocomplete="off">
	<br>
    (enter FIR Id)<br>
    <br>
    Enter FIR status:
    <input type="text" name="upt" value="" required="" autocomplete="off">
    <input type="submit" name="Update" value="Update">
      </form>

<form action="FirUpdateDlt.php" method="POST">
	<br>
	Delete :&nbsp;&nbsp;&nbsp;
	<input type="text" name="dlt" value="" required="" autocomplete="off">
	<input type="submit" name="dtl" value="Delete">
	<br>(enter FIR Id)

    </form>
<a href="Home.php">Back to home</a> &nbsp; <a href="Adminhome.php">Previous Page</a>
      </body>
        </html>