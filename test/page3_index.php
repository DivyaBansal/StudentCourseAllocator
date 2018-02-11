<html>
<body>
 <h1><center>Course Allocation System</h1>
 <hr />
 <?php
  session_start();
  $username=$_SESSION['username'];
 function getName()
 {
  include'connection.php';
  $query = mysql_query("SELECT Name FROM student WHERE Roll_no=$username");
  echo $query;
 }
 
 function chooseUWE()
{
   include 'connection.php';
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
<h2>Hello,<?php getName(); ?></h2>
<p>
 1.Enter your preferred choices for UWE:<br>
     Preference1:<? chooseUWE();?><br>
     Preference2:<? chooseUWE();?><br>
     Preference3:<? chooseUWE();?><br><p>
 2.Enter your preferred choices for CCC:<br>
     Preference1:<? chooseCCC(); ?><br>
     Preference2:<? chooseCCC(); ?><br>
     Preference3:<? chooseCCC(); ?><br>
 </body>

</html>
