<html>
<h3>Mandatory courses:</h3>
<hr />
<?php
 session_start();
 $username=$_SESSION['username'];
 include 'connection.php';
 $q1=mysql_query("SELECT * FROM student where Roll_no=$username");
 $row=mysql_fetch_assoc($q1);
 $year=$row['Year'];
 $branch=$row['Branch'];
 $q=mysql_query("SELECT CourseId,CourseName FROM courses WHERE Branch='$branch' AND Year='$year' AND CourseType='Major'");
   if(!$q )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($q))
{
    echo "Course ID :{$row['CourseId']}  <br> ".
         "Course NAME : {$row['CourseName']} <br> ".
         "--------------------------------<br>";
} 
?>
<FORM METHOD="LINK" ACTION="index1.php">
<INPUT TYPE="submit" VALUE="Next ->">
</FORM>
</html>
