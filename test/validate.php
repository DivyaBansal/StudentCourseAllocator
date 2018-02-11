<html>
 <link href ="lq.css" type="text/css" rel="stylesheet">
 <center><img src="logo.png" style="width:650px;height:80px;border:0" ></center>
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

<br><br>
<br><br>
<?php
session_start();
include 'connection.php';
$UWE1=$_POST['prefUWE1'];
/*{
	$q=mysql_query("SELECT Credits,Pre-requisite FROM courses WHERE CourseName='$UWE1'");
	$c=mysql_fetch_assoc($q);
	echo "No. of Credits for this UWE:{$c['Credits']}  <br> ".
          "Pre-requisite:{$c['Pre-requisite']}<br> ";
}
*/
$UWE2=$_POST['prefUWE2'];
$UWE3=$_POST['prefUWE3'];
$CCC1=$_POST['prefCCC1'];
$CCC2=$_POST['prefCCC2'];
$CCC3=$_POST['prefCCC3'];
if(!$UWE1)
echo "error";
$username=$_SESSION['username'];
$query=mysql_query("select * from allocated where Roll_no=$username");
$q1=mysql_query("SELECT count(*) From allocated WHERE CourseName='$UWE1'");
$q2=mysql_query("SELECT count(*) From allocated WHERE CourseName='$UWE2'");
$q3=mysql_query("SELECT count(*) From allocated WHERE CoursenAME='$UWE3'");
$q4=mysql_query("SELECT Capacity,CourseId,Instructor FROM courses WHERE CourseName='$UWE1'");
$q5=mysql_query("SELECT Capacity,CourseId,Instructor FROM courses WHERE CourseName='$UWE2'");
$q6=mysql_query("SELECT Capacity,CourseId,Instructor FROM courses WHERE CourseName='$UWE3'");
$row1=mysql_fetch_assoc($q1);
$row2=mysql_fetch_assoc($q2);
$row3=mysql_fetch_assoc($q3);
$row4=mysql_fetch_assoc($q4);
$row5=mysql_fetch_assoc($q5);
$row6=mysql_fetch_assoc($q6);
$id1=$row4['CourseId'];
$id2=$row5['CourseId'];
$id3=$row6['CourseId'];
function prnt($username,$id,$uwe,$ins)
{
    mysql_query("INSERT INTO allocated VALUES($username,'$id','$uwe')");
    echo '<html><body><table width="600" border ="1", cellpadding="1" style="margin: 0px auto;"><tr align="center"><td>'.'<b><u>You have been alloted UWE</b></u><br><br>'.
          'Course ID :'.$id.'<br> <br>'.
          'Course NAME :'.$uwe.'<br><br> '.
          'Course Instructor:'.$ins.'<br><br>'.
          '</td></tr></table></body></html>';
 
}
function prnt1($username,$id,$ccc,$ins)
{
    mysql_query("INSERT INTO allocated VALUES($username,'$id','$ccc')");
    echo '<html><body><table width="600" border ="1", cellpadding="1" style="margin: 0px auto;"><tr align="center"><td>'.'<b><u>You have been alloted CCC</b></u><br><br>'.
          'Course ID :'.$id.'<br><br> '.
          'Course NAME :'.$ccc.'<br><br> '.
          'Course Instructor:'.$ins.'<br><br>'.
          '</td></tr></table></body></html>';
 
}

/*function prnt1($username,$id,$ccc,$ins)
{
    mysql_query("INSERT INTO allocated VALUES($username,'$id','$ccc')");
    echo "You have been alloted CCC: <br>".
          "Course ID : $id<br> ".
          "Course NAME : $ccc <br> ".
          "Course Instructor: $ins<br>".
          "--------------------------------<br>";
 
}*/

/*while($row=mysql_fetch_array($query))
{

 $major=$row['CourseId'];
 $q=mysql_query("select nine from time where day='Monday' and nine LIKE '%$major%' and nine LIKE '%$id1%'");
 if(mysql_fetch_array($q))
 {
   prnt($username,$id2,$UWE2,$row5['Instructor']);
   break;
 }
}*/
function clash($time,$day,$major,$id1)
{
   $a=mysql_query("select $time from time where day='$day' and $time LIKE '%$major%' and $time LIKE '%$id1%'");
   return $a;
}
$days=array('Monday','Tuesday','Wednesday','Thursday','Friday');
$flag=0;
if($row1['count(*)']<$row4['Capacity'])
 {
  while($row=mysql_fetch_array($query))
{

 $major=$row['CourseId'];
 $i=0;
 while($i<5){
 $q=clash('nine',$days[$i],$major,$id1);
 $p=clash('ten',$days[$i],$major,$id1);
 $s=clash('eleven',$days[$i],$major,$id1);
 $r=clash('two',$days[$i],$major,$id1);
 $v=clash('twelve',$days[$i],$major,$id1);
 if(mysql_fetch_array($q)||mysql_fetch_array($p)||mysql_fetch_array($r)||mysql_fetch_array($s)||mysql_fetch_array($v))
 {
   $flag=1;
   break 2;
 }
 $i=$i+1;
}
}
if($flag==0)
prnt($username,$id1,$UWE1,$row4['Instructor']);
else
 { a: if($row2['count(*)']<$row5['Capacity'])
   { $flag=0;
  while($row=mysql_fetch_array($query))
 {

  $major=$row['CourseId'];
  $i=0;
  while($i<5){
  $q=clash('nine',$days[$i],$major,$id2);
  $p=clash('ten',$days[$i],$major,$id2);
  $s=clash('eleven',$days[$i],$major,$id2);
  $r=clash('two',$days[$i],$major,$id2);
  $v=clash('twelve',$days[$i],$major,$id2);
 if(mysql_fetch_array($q)||mysql_fetch_array($p)||mysql_fetch_array($r)||mysql_fetch_array($s)||mysql_fetch_array($v))
 {
   $flag=1;
   prnt($username,$id3,$UWE3,$row6['Instructor']);
   break 2;
 }
 $i=$i+1;
}
}
 if($flag==0)
 prnt($username,$id2,$UWE2,$row5['Instructor']);
}
}
}
else if($row2['count(*)']<$row5['Capacity'])
 { goto a;
 }
 else if($row3['count(*)']<$row6['Capacity'])
{
  prnt($username,$id3,$UWE3,$row6['Instructor']);
}
else
{
	 mysql_error();
}
$c1=mysql_query("SELECT count(*) From allocated WHERE CourseName='$CCC1'");
$c2=mysql_query("SELECT count(*) From allocated WHERE CourseName='$CCC2'");
$c3=mysql_query("SELECT count(*) From allocated WHERE CoursenAME='$CCC3'");
$c4=mysql_query("SELECT Capacity,CourseId,Instructor FROM courses WHERE CourseName='$CCC1'");
$c5=mysql_query("SELECT Capacity,CourseId,Instructor FROM courses WHERE CourseName='$CCC2'");
$c6=mysql_query("SELECT Capacity,CourseId,Instructor FROM courses WHERE CourseName='$CCC3'");
$row1=mysql_fetch_assoc($c1);
$row2=mysql_fetch_assoc($c2);
$row3=mysql_fetch_assoc($c3);
$row4=mysql_fetch_assoc($c4);
$row5=mysql_fetch_assoc($c5);
$row6=mysql_fetch_assoc($c6);
$id1=$row4['CourseId'];
$id2=$row5['CourseId'];
$id3=$row6['CourseId'];

if($row1['count(*)']<$row4['Capacity'])
{
     prnt1($username,$id1,$CCC1,$row4['Instructor']);
}
else if($row2['count(*)']<$row5['Capacity'])
{
   prnt1($username,$id2,$CCC2,$row5['Instructor']);
}
else if($row3['count(*)']<$row6['Capacity'])
{
   prnt1($username,$id3,$CCC3,$row6['Instructor']);
   
}
else
{
	 mysql_error();
}
?>
<br><br><br><br>
<center><FORM METHOD="LINK" ACTION="timetable.php">
<div class ="forgot">
<INPUT TYPE="submit" VALUE="Generate time table"></button>
</div>
</FORM>
</html>