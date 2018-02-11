<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
$q1=mysql_query("SELECT count(*) From allocated WHERE CourseName='$UWE1'");
$q4=mysql_query("SELECT Capacity,CourseId,Instructor FROM courses WHERE CourseName='$UWE1'");
$row1=mysql_fetch_assoc($q1);
$row4=mysql_fetch_assoc($q4);
$id1=$row4['CourseId'];

while($row=mysql_fetch_array($query))
{
 $major=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' and nine LIKE '%$major%' and nine LIKE '%$UWE1%'");
 if(mysql_fetch_array($q))
 {
    break;
 }
 if($row1['count(*)']<$row4['Capacity'])
 {
    mysql_query("INSERT INTO allocated VALUES($username,'$id1','$UWE1')");
     echo
          "You have been alloted UWE: <br>".
          "Course ID :{$row4['CourseId']}  <br> ".
          "Course NAME : $UWE1 <br> ".
          "Course Instructor:{$row4['Instructor']} <br>".
          "--------------------------------<br>";
 }
}
?>