<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Record</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("alumni", $con);

$result = mysql_query("SELECT * FROM personalinfo");

   echo "<table border='1' align='center' width='600' bgcolor='#999999'>
<tr>
<th>alumniID</th>
<th>REMOVE</th>
<th>UPDATE</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['alumniID'] . "</td>";
   echo "<td><a href=\"editrecord.php?action=EDITING&editID='".$alumniID."\">";
   echo "EDIT </a></td>";
  echo "</tr>";
  }
echo "</table>";

// some code

mysql_close($con);
?>
</body>
</html>
