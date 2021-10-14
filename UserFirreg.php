<html>
<head>
<title>User FIR Registration Page</title>
	
<LINK REL="SHORTCUT ICON"
   HREF="img3.png"><!-- Use link logo -->

<style>


    html {
        font-size: 60.5%;

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

body { 
  background-image: url('img20.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size: cover;
  background-position: cover; 
 
} /*use for background image*/

.s1{
	color:black;
	font-size: 5.5rem;
	font-family: times new roman;
	font-style: italic;
	
}/*use for heading 2*/

.s2{
	text-align: center;
	color: solid black;
	font-size: 3.5rem;
	font-family: times new roman;
	font-style: italic;
	padding-top: 1.5rem;
	
}/*heading 1*/

.button {
  background-color: silver;
  border: none;
  color: black;
  padding: 1.5rem 3.2rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 1.6rem;
  cursor: pointer;
  border-top-left-radius: .5rem;
  border-top-right-radius: .5rem;
  border-bottom-left-radius: .5rem;
  border-bottom-right-radius: .5rem;

} /* reset and submit button*/

.table{
	font-size: 2rem;
	color: ;
	font-style: bold;
	border-collapse: collapse;
	text-align: center;
    border-color: black;
} /* table*/

</style>
<body>
	<h2 class="s1">"CRIME REPORTING"</h2>

    <h1 class="s2">"FIR REGISTRATION HERE"</h1>

    <table class="table" align="center" cellpadding="20rem" cellspacing="9rem" border="2rem">	
	<form action="UserFIRFatch.php" method= "POST">
	<tr><td>Name:</td>
    <td><input type="text" name="user" value="" required="" autocomplete="off">
    </td></tr>

    <tr><td>Address:</td>
    <td><input type= "text" name="adrs" value="" required="" autocomplete="off"></td></tr>

	<tr><td>Mobile No:</td>
	<td><input type="text" pattern="[0-9]{10}" name="num" value="" required="" autocomplete="off">
	<br></td></tr>
	
	
	<tr><td>Email:*</td>
	<td><input type="email" name="Email" value="" autocomplete="off">
	<br></td></tr>

	<tr><td>Crime Area:</td>
	<td><input type="Address" name="area" value="" required="" autocomplete="off"></td></tr>

	<tr><td>Police Station:</td>
	<td><input type="text" name="pst" value="" required="" autocomplete="off">
	<br></td></tr>

	<tr><td>FIR Time:</td>
	<td><input type="time" name="time" value="" required="">
	<br></td></tr>

	<tr><td>FIR Date:</td>
	<td><input type="Date" name="date" value="" required="">
	<br></td></tr>

	<tr><td>FIR Description:</td>
	<td><textarea name="desc" required="" autocomplete="off" rows="5" cols="20"></textarea>  
    <br></td></tr>
	
	<tr><td>
	<button type="reset" class="button" value="Reset">Reset</button></td>
		<td><input type="submit" class="button" value="Submit"></td></tr>
    </table>
   </form>
  </head>
 </body>
</html>