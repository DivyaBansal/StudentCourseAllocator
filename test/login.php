<html>
<link href ="style.css" type="text/css" rel="stylesheet">

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
  width: 15%;
  display: inline-block;
  cursor: pointer; 
  border-radius: 8px;
  
}
</style>




<?php
session_start();
include 'connection.php';
$username=$_POST['username'];
$password =$_POST['password'];
if($username&&$password)
{
  $query=mysql_query("Select * from student where Roll_no=$username");
  $numrows = mysql_num_rows($query);
  if($numrows!==0)
  {
     while($row=mysql_fetch_assoc($query))
    {
     $dbusername = $row['Roll_no'];
     $dbpassword = $row['Password'];
    } 
      if($username==$dbusername&&$password==$dbpassword)
    {
      if($password=='12345')
     {
       @$_SESSION['username']=$username;
       include 'page2_index.php';
     }
     else
     {
       ?>
       <br><br><br><br><p>
       <center><FORM METHOD="LINK" ACTION="timetable.php">
       <div class="forgot">
     <br> <INPUT TYPE="submit" VALUE="Show Timetable"></button>
     </div>
     </FORM>
      <?php 
    }
   }
    else
   {
     echo "<br><br><br><br><br><center><b>Your password is incorrect!!!<br><br><br><br>";
     ?>
     <br><br><br><p>
     <FORM METHOD="LINK" ACTION="index1.php">
     <div class="forgot">
     <br> <INPUT TYPE="submit" VALUE="Go Back"></button>
     </div>
     </FORM>
     <?php 
   }
  }
 else
 die("That user doesn't exist");
}
 else
{
  ?>
<br><br><br><p>
<h3><mark><b> Please enter VALID username and password!!</b> </h3>
<FORM METHOD="LINK" ACTION="index1.php">
<div class="forgot">
 <br> <INPUT TYPE="submit" VALUE="Go Back"></button>
 </div>
</FORM>
<?php 
 }
?>
</html>

                                                                       