<!DOCTYPE html>
<html>
<body>
   <link href ="tt.css" type="text/css" rel="stylesheet">
     <style>
.forgot input[type="submit"] {
  background: #003366;
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
<table width="90%" border="1" cellspacing="1" cellpadding="1">
<thead>
<tr>
<td colspan="10" align="center">My Time Table</td>
</tr>
</thead>
<tbody>
<tr><th> Day/Time </th>
<th> 9:00-10:00 </th>
<th> 10:00-11:00 </th>
<th> 11:00-12:00 </th>
<th> 12:00-1:00 </th>
<th> 1:00-2:00 </th>
<th> 2:00-3:00 </th>
<th> 3:00-4:00 </th>
<th> 4:00-5:00 </th>
<th> 5:00-6:00 </th></tr>
<tr> 
<th> Monday </th>
<td>
<?php
include 'connection.php';
session_start();
$username=$_SESSION['username'];
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND nine LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND ten LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?>
</td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND eleven LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND twelve LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND one LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND two LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND three LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND four LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' AND five LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
</tr>
<tr>
<th> Tuesday </th>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND nine LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND ten LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND eleven LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND twelve LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?>
</td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND one LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?>
</td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND two LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?>
</td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND three LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?>
</td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND four LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?>
</td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Tuesday' AND five LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?></td>
</tr>
<tr>
<th> Wednesday </th>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND nine LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND ten LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND eleven LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND twelve LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND one LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND two LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND three LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND four LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Wednesday' AND five LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
</tr>
<tr>
<th> Thursday </th>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND nine LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND ten LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND eleven LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND twelve LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND one LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND two LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND three LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND four LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Thursday' AND five LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
</tr>
<tr>
<th> Friday </th>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND nine LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND ten LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND eleven LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND twelve LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND one LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND two LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND three LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND four LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
<td>
<?php
$query=mysql_query("select * from allocated where Roll_no=$username");
while($row=mysql_fetch_array($query))
{
 $id=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Friday' AND five LIKE '%$id%'");
 if(mysql_fetch_array($q))
 {
   echo $row['CourseName'];
 }
}
?> </td>
</tr>
</tbody>
</table>
<br><br><br><br><br>
<br>
<br>
<center><FORM METHOD="LINK" ACTION="index1.php">.
   <div class="forgot">
<INPUT TYPE="submit" VALUE="Log Out"></button>
</div>
</FORM>
</body>
</html>
