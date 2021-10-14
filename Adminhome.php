<?php
session_start();
?>  
<html>	
<head>
	<!-- Use link logo -->
<LINK REL="SHORTCUT ICON"
  HREF="img3.png"></LINK>
     
 <!-- Using Css classes -->  
<style type="text/css">

	body{

      background-image: url('img5.jpg');/*image path.*/
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100%;
      background-position: cover;
		}
		

    nav a{
		
	  width: 150px;
	  height: 20px;
	  display: block;
	  padding: 20px;
	  text-decoration: none;
	  font-family: times new roman;
	  color: black;
	  text-align: center;
	  background-attachment: fixed;
	  border-top: 2px solid black;
	  border-bottom: 2px solid black;
	  border-left: 2px solid black;
	  border-right: 2px solid black;
	  border-top-right-radius: 25px;
	  border-top-left-radius: 25px;
	  border-bottom-right-radius: 25px;
	  border-bottom-left-radius: 25px;

	    } /*class of nav bar*/

	ul{

	  padding-top: 200px;
	  margin: 0 0 0 150px;
	  list-style: none;

	    } /* list of nav bar*/
	
	nav a:hover{

	  background: purple;
	  transition: 0.5s;
	  text-transform: uppercase;

	    } /*using hover in nav bar*/
	
	.active {

      background-color: red;
      display: block;

         } /*class for navigation active;*/

	.h1{

	  font-family: serif;
	  padding-top: 30px;
	  color: black;
	  font-size: 40px;
	  font-style: italic;
	  font-stretch: semi-expanded;

	     } /*class for heading 1*/

</style>
</head>
<body>
<center><h1 class="h1">Admin Home Page</h1></center>
	
  <nav><!-- coding of nav bar. -->
	<ul>
		
	  <li><a href="Home.php">Home</a></li> <!-- link of home page. -->
	  <br>
		
	  <li><a href="AdminViewFir.php">View FIR</a></li> <!--FIR display -->
	  <br>
		
	  <li ><a href="Adminlogout.php">Logout</a></li> <!-- link of logout page -->
	</ul>
    </nav>
    </body>
    </html>