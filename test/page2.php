
<html>
<link href ="yop.css" type="text/css" rel="stylesheet">

<p><br><br><p>
<br>
<br>
<p>
<style>
.forgot input[type="submit"] {
  background: #003366 ;
  color: #ffffff;
  font-family:AR CENA;
  font-size: 20px;
  font-weight: 400; 
  padding: 8px 7px;
  width: 10%;
  display: inline-block;
  cursor: pointer; 
  border-radius: 8px;
  
}
</style>


<?php
session_start();
 $username=$_SESSION['username'];
 include 'connection.php';
 $new_password1=$_POST['np1'];
 $new_password2=$_POST['np2'];
 if(!$new_password1)
 {
 	echo "Enter a valid password!! <br>";
 }
 if($new_password1!==$new_password2)
 {
   echo'<html>
   <body><h4>Oops! Incorrect Password!<h4><br>
   <br>
   </body>
   </html>';
   include 'page2_index.php';
 }
 else
 {
   $q=mysql_query("update student set Password=$new_password1 where Roll_no=$username");
   echo "<center><b><h2>"."PASSWORD CHANGED SUCESSFULLY!";
?>
<FORM METHOD="LINK" ACTION="page4_index.php">
<div class="forgot">
<br><br><INPUT TYPE="submit" VALUE="Continue">
</div>
</FORM>
<?php 
  }
  error_reporting(E_ALL & ~E_DEPRECATED);
?>
</html>