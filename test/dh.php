<?php




function createTD($username,$password){
	echo '<html><body><table border=2><tr><td>'.$username.'</td><td>'.$password.'</td></tr></table></body></<html>';
}


createTD('rm669','anything');

?>


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
     
     @$_SESSION['username']=$username;
     include 'page2_index.php';
    }
  else
  echo "Your password is incorrect";
 }
 else
 die("That user doesn't exist");
}
else
{
  ?>
<h3><mark><b> Please enter VALID username and password!!</b> </h3>
<?php
 include 'index1.php';
}
?>
