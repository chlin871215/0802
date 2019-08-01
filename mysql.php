<?
$host='185.27.134.10';
$name='b18_24238242';
$pwd='barry871215';
$db='b18_24238242_php1	';
$con=mysql_connect($host,$name,$pwd) or die("connection failed");
mysql_select_db($db,$con) or die("db selection failed");

 $result=mysql_query("SELECT * FROM user",$con);
 while($row=mysql_fetch_assoc($result)){
 $tmp[]=$row;
 }
 echo json_encode($tmp);
 mysql_close($con);
?>