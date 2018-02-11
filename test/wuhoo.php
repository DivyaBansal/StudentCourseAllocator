<html>
<form action="page3.php" method ="post">
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
   Print "<select name="decision1">";
    $i=0;
    while($row = mysql_fetch_array($result)) {
   echo "<option value="$row["CourseName"];">$row["CourseName"];</option>";
  $i++;
  }
  echo "</select>";
}
function chooseCCC()
{
   include 'connection.php';
   $result = mysql_query("SELECT CourseName FROM courses WHERE CourseType='CCC'");
   echo "Name <select name="decision2">";
    $i=0;
    while($row = mysql_fetch_array($result)) {
    echo "<option value="<?=$row["CourseName"];?>><?=$row["CourseName"];?></option>";
  $i++;
  }
    echo "</select>";
}
echo"Hello,";
getName();
echo "<p>";
 print "1.Enter your preferred choices for UWE:";
 print "Preference1:";
 chooseUWE();
 print "Preference2:";
 chooseUWE();
 print "Preference3:";
 chooseUWE();
 print "2.Enter your preferred choices for CCC:";
 print"Preference1:";
 chooseCCC(); 
 print "reference2:";
 chooseCCC();
 print "Preference3:";
 chooseCCC();
 ?>
 </form>
</html>