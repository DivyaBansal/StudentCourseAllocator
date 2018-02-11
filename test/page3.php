<html>
<link href ="to.css" type="text/css" rel="stylesheet">
<h3><b>Your Mandatory courses:</b></h3>
<?php
 $username=$_SESSION['username'];
 include 'connection.php';
 $q1=mysql_query("SELECT * FROM student where Roll_no=$username");
 $row=mysql_fetch_assoc($q1);
 $year=$row['Year'];
 $branch=$row['Branch'];
 $q=mysql_query("SELECT CourseId,CourseName,Instructor FROM courses WHERE Branch LIKE '%$branch%' AND Year='$year' AND CourseType LIKE '%Major%'");
   if(!$q )
{
  die('Could not get data: ' . mysql_error());
}
echo '<html><body><table width="600" border="1" cellspacing="1" cellpadding="1", style="margin:0px auto align ="left";>'.
     '<tr><th width="100">Course Id</th> <th width="100">Course Name</th> <th width="100">Course Instructor</th> </tr></table></body></html>';
while($row = mysql_fetch_array($q))
{
	$id=$row['CourseId'];
	$name=$row['CourseName'];
    echo '<html><body><table width="600" border="1" cellspacing="1" cellpadding="1", style="margin:0px auto align="left";>'.
          '<tr><td  align="center" width="100">'.$row['CourseId'].'<br><br></td>'.
          '<td align="center" width="100">'.$row['CourseName'].'<br><br></td>'.
          '<td align="center" width="100">'.$row['Instructor'].'<br><br></td>'.
          '</tr></table></body></html>';
    mysql_query("INSERT INTO allocated VALUES($username,'$id','$name')");
} 
error_reporting(E_ALL & ~E_DEPRECATED);
          /*
         "<b> Course ID :</b>{$row['CourseId']}  <br> ".
         "<b> Course NAME :</b> {$row['CourseName']} <br> ".
         "<b> Course Instructor: </b>{$row['Instructor']} <br>".
         "--------------------------------<br>";
         

         */

?>
</html>