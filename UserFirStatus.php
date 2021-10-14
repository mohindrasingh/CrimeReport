<html>
<head>
<title>FIR status for user</title>
	
	   <!-- Use link logo -->
 	<LINK REL="SHORTCUT ICON"
       HREF="img3.png"></LINK>

       	<!-- use css -->
       <style type="text/css">

		body{

		    background-image: url('img9.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: cover;
		      } /*use for background*/

    .h1{
        margin-top: 40px;
          }   
          
    .s{
        margin-top: 0px;
        font-size: 20px;
        font-family: times new roman;
           } /*form*/

	</style>
       
</head>
<body>
   <center><h1 class="h1">View FIR Status</h1></center>
   <center><table>
   <tr>
   <td>
   <form action="UserFirstatusfetch.php" method="POST" class="s">
   FIR Id:
   <input type="text" name="id" value="" required="" autocomplete="off"><br> 
   (enter your FIR Id)
   <input type="submit" value="view">
  </form>
  </td>
  </tr>
  </table>
  <a href="Home.php">Back to home</a> 
</body>
</html>