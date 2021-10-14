<?php
// ignore error message;
error_reporting(0);
$sn="localhost";
$un="root";
$pwd="";
$db="crimereports";
$id= $_POST['updt'];
$st= $_POST['upt'];
$conn= mysqli_connect($sn, $un, $pwd, $db);
// checking connectivity;
    if ($conn){
	$query="update fir set Status = '".$st."' where FIR_Id= '".$id."' ";
   mysqli_query($conn, $query);
   header('location: AdminViewFir.php'); // jump page into view fir of admin;
}

$sn="localhost";
$un="root";
$pwd="";
$db="crimereports";
$dt= $_POST['dlt'];
$conn= mysqli_connect($sn, $un, $pwd, $db);
   	if($conn){
   		$query= "delete from fir where FIR_Id= '".$dt."' ";
   		mysqli_query($conn, $query);
   		header('location: AdminViewFir.php'); // jump page into view fir of admin;
   		
   	}
else{
	echo "Something wrong.";
}
?>