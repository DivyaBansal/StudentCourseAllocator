
 <html>
 <link href ="to.css" type="text/css" rel="stylesheet">
 <style>
.forgot input[type="submit"] {
  background: #003366;
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
 <form action="validate.php" method ="post">
 <h1><center><b>COURSE REGISTRATION</b></h1>

 <?php
  session_start();
  $username=$_SESSION['username'];
 function getName()
 {
  GLOBAL $username;
  include'connection.php';
  $query = mysql_query("SELECT Name FROM student WHERE Roll_no=$username");
  $name=mysql_fetch_array($query);
  echo $name['Name'];
  error_reporting(E_ALL & ~E_DEPRECATED);
 }
 
 function chooseUWE($decision1)
{
   include 'connection.php';
   $result = mysql_query("SELECT CourseName FROM courses WHERE CourseType LIKE '%UWE%'");
  ?>
  <select name="<?=$decision1?>"> 
  <?php
    $i=0;
    while($row = mysql_fetch_array($result)) {
  ?>
  <option value="<?=$row["CourseName"];?>"><?=$row["CourseName"];?></option>
  <?php
  $i++;
  }
  ?>
</select>
<?php 
 }
?>
<?php 
function chooseCCC($decision2)
{
   include 'connection.php';
   $result = mysql_query("SELECT CourseName FROM courses WHERE CourseType='CCC'");
  ?>
  <select name="<?=$decision2?>">
  <?php
    $i=0;
    while($row = mysql_fetch_array($result)) {
  ?>
  <option value="<?=$row["CourseName"];?>"><?=$row["CourseName"];?></option>
  <?php
  $i++;
  }
  ?>
  </select>
<?php 
 }
 error_reporting(E_ALL & ~E_DEPRECATED);
?>
<br>
<h4> Welcome <?php getName(); ?>!!</h4>
<p>
  <?php include'page3.php';?>
 <h3>Enter your preferred choices for UWE:</h3>
     <b>Preference1</b>:<?php chooseUWE("prefUWE1");?><br>
     <b>Preference2</b>:<?php chooseUWE("prefUWE2");?><br>
     <b>Preference3</b>:<?php chooseUWE("prefUWE3");?><br><p>
 <h3>Enter your preferred choices for CCC:</h3>
     <b>Preference1</b>:<?php chooseCCC("prefCCC1"); ?><br>
     <b>Preference2</b>:<?php chooseCCC("prefCCC2"); ?><br>
     <b>Preference3</b>:<?php chooseCCC("prefCCC3"); ?><br><br>
     <div class ="forgot">

     <br><input type="submit" value="Submit"></button>
   </div>
</form>
</html>