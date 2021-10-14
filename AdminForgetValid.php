<html>
<head>
	<!-- Use link logo -->
   <LINK REL="SHORTCUT ICON"
       HREF="img3.png"></LINK>
</head>
<body>

<!-- tag of php -->
<?php
session_start();
//error_reporting(0); // ignoring report message
$sn="localhost"; //server name;
$un="root"; //user name;
$pwd=""; //password;
$db="crimereport"; //database name;
$conn= mysqli_connect($sn, $un, $pwd, $db); //connect with database;
$a= $_POST['mb']; //variables declaration;
$p= $_POST['pd'];
$cpa= $_POST['pw'];

 // check condition.
  if($a ==1234567890 and $p == $cpa){

	 $query= "update adminreg set Password= '".$p."' where Mobile='".$a."' ";
	  $result= mysqli_query($conn, $query);
	   echo "Password Changed";
	     
		}

	else{
		echo "Mobile Number or password doesn't matched";	 		       
	   	  }
			
?>

</body>
<br>
<a href="Home.php"> GoTo Home</a>
</html>