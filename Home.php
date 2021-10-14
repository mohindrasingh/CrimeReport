<?php
session_start();

error_reporting(0);// ignore error message;
$sn = "localhost"; //server name;
$un = "root"; //user name;
$pwd = ""; //password;
$db = "crimereports"; // database name;
$conn = mysqli_connect($sn, $un, $pwd, $db); //connect with mysql database;

if(isset($_POST['mobile'])){
  
  $admob = $_POST['mobile'];
  $psd=$_POST['password'];

  $sql="select *from adminreg where Mobile='".$admob."' AND Password= '".$psd."' limit 1;";

  $result= mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1){

    header('location: Adminhome.php');   
  }

  else{
     header('location: Home.php');
  }
}

?>

<html>
<head>
<LINK REL="SHORTCUT ICON"
    HREF="img3.png"></LINK>  <!-- Use link logo -->

  <title>Home page of website</title>
    
	<style type="text/css">
   
		body{ 

			background-image: url('img2.jpg');
      background-repeat: no-repeat;
      background-attachment: ;
      background-size: 100%;
      background-position: cover;
		      }/*background*/
  
    html {
        font-size: 62.5%;

         }

    @media(max-width: 998px){

    html{
        font-size: 55%;
           }
             }

     @media(max-width: 768px){

    html{
        font-size: 45%;
           }
             }
  
	  ul{
		  padding: 8;
		  margin: 0 0 0 12rem;
		  list-style: none;
	      }/*navigation bar list class*/

  
	  li{
		  float: left;
	     } /*navigation bar buttons start at left*/

   
	  .logo img{

		     position: absolute;
		     margin-top: .9rem;
		     margin-left: 1.8rem;
		     width: 9rem;
         border-top-left-radius: 30rem;
         border-top-right-radius:  30rem;
         border-bottom-left-radius: 30rem;
         border-bottom-right-radius: 30rem;

	          } /*nav bar logo in navigation bar*/
   
	  nav a{

		    width: 9rem;
		    height: 1.5rem;
		    display: inline-block;
	      padding: 2rem 2rem;
		    text-decoration: none;
        font-size: 1.3rem;
		    font-family: times new roman;
        font-style: italic;
		    color: white;
		    text-align: center;
		    background-attachment: fixed;
		    border-bottom: .5rem solid black;
		    border-bottom-right-radius: 1.5rem;

	         } /*nav bar design coding*/

  
	  nav a:hover{
	      background: green;
		    transition: 0.5s;
		    text-transform: uppercase;

	         } /*hovering of nav bar buttons*/
 
	  .active {
        background-color: gray;
        display: block;

             } /*display active page*/


    .btn {
       border: .2rem solid black;
       background-color: white;
       font-style: italic;
       color: black;
       padding: 1.2rem 2rem;
       font-size: 1.6rem;
       width: 9rem;
       height: 4rem;
       cursor: pointer;
           } /*desiging of login button*/

    .success {
       border-color: blue;
       color: blue;
            } /*border color of login button*/

        
    .success:hover {
        background-color: blue;
        color: white;
        opacity: 0.9;
            }/*howering on login button*/

    
    .table {
       font-family: sans-serif;
       background-color: white;
       border: 1rem solid green;
       font-family: times new roman;
       font-style: italic;
       width: 50rem;
       height: 20rem;
       text-indent: 4rem;
       margin-top: 35rem;
       opacity: 0.5;
       border-top-left-radius: 3.5rem ;
       border-top-right-radius:  3rem;
       border-bottom-left-radius: 3rem;
       border-bottom-right-radius: 3rem;
   
             } /*desiging of table*/


</style>
</head>
<body>
  <!-- div class for nav bar logo -->
<div class="logo">
<img src="img3.png">
</div>
  <!-- nav bar links -->
<nav>
	<ul>
		<li><a class="active" href="Home.php">Home</a></li>
		<li><a href="News.php">News</a></li>
		<li><a href="UserFirreg.php">FIR Registration</a></li>
		<li><a href="UserContact.php">Emergency Contact</a></li>
		<li><a href="UserFirStatus.php">FIR Status</a></li>
    <li><a href="UserAbout.php">About Us</a></li>
	</ul>
   </nav>

   <center> <table class="table" cellpadding="6.5rem" cellspacing="6.5rem" >
   <form  method="POST">
    <tr>
      <td><center>
        <h2>Admin Login Here</h2>
        <br>

      <b>Admin Id:</b>
      <input type="text" name="mobile" pattern="[0-9]{10}" placeholder="Mobile no" value="" autocomplete="on" required></br>
      </br>

      <b>Password:</b>
      <input type="password" placeholder="Password" checked="uppercase" name="password" value="" required></br></center>
      </br>

      <center> <button class="btn success">Login</button></br></center>
      <br>

      <center><a href="AdminForget.php"><b>Forget Password?</b></a></center>
      </td></tr>

</form>
</table></center>
</body>
</html>
