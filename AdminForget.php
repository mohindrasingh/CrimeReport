<html>
<head>
<title>Forgot Password</title>

<LINK REL="SHORTCUT ICON"
       HREF="img3.png"></LINK><!-- Use link logo -->
       <!-- Using Css -->
   <style type="text/css">

      body{

       	 background-image: url('img14.jpg');
		 background-repeat: no-repeat;
		 background-attachment:fixed;
		 background-size: cover;
		 background-position: cover; 
 
       	  } /*Backgraound*/
       	
      .table{
       		
       	 border: 2px;
       	 border-color: black;
       	 color: solid black;
       	 text-align: center;
       	 padding-top: 60px;
       	 height: 50px;

           } /*class for table tag */

      .form{
       	 text-align: center;
       	 padding-top: 20px;
         padding-bottom: 2px;
       	 padding-left: 20px;
       	 padding-right: 20px;

       	    } /*class for form tag*/

      .s{
       	 font-family: Algerian;
		 text-align: center;
		 color: solid black;
		 font-size: 35px;
		 font-family: times new roman;
		 font-style: italic;
		 padding-top: 15px;

       	   }/*class for heading 1*/

    </style>
  </head>
<body>
	
	<center><h1 class="s">Forget Password</h1></center><!-- using for heading -->
	
	<center><table  class="table" border="1"><!-- using table tag for table -->
	<tr><!-- <tr></tr> is used for table rows -->
			
	<td><!-- <td></tr> is used for table data -->
				
    <form class="form" action="AdminForgetValid.php"  method="POST">		
	Enter Mobile No:
	<input type="text" name="mb" pattern="[0-9]{10}" placeholder="Mobile No" value="" required="" autocomplete="off">
	<br>
	<br>
	Enter New Password:
	<input type="text" name="pd" pattern=".{5,}" placeholder="Enter Password" value="" required="" autocomplete="off"><br>
	&nbsp;<strong>(Must contain 5 or more characters)</strong> 
	<br>
	<br>
	Enter Confirm Password:
	<input type="text" name="pw" placeholder="Confirm Password" value="" required="" autocomplete="off">
	<br>
	<br>
	<center><input type="submit" name="submit" value="Submit"></center>
</form>
</td>
</tr>
</table></center>
</body>
</html>