<?php
include 'connection.php';
$result = mysql_query("SELECT * FROM student");
?>
Name <select name="dynamic_data">
<?php
 $i=0;
 while($row = mysql_fetch_array($result)) {
?>
<option value="<?=$row["Name"];?>"><?=$row["Name"];?></option>
<?php
$i++;
}
?>
</select>
<?php

