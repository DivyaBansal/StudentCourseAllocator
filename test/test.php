<?php
  include 'connection.php';
  session_start();
  $username=$_SESSION['username'];
  function getName()
 {
  $query = mysql_query("SELECT Name FROM student WHERE Roll_no='$username'");
  echo $query;
 }
 function chooseUWE()
 {
   $result = mysql_query("SELECT CourseName FROM courses WHERE CourseType='UWE'");
 ?>
  Name <select name="decision1"> 
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
<?
}
function chooseCCC()
{
   include 'connection.php';
   $result = mysql_query("SELECT CourseName FROM courses WHERE CourseType='CCC'");
  ?>
  Name <select name="decision2">
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
<?
}
?>