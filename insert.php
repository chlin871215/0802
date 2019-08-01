<?php   
 $dbhost = 'sql200.byethost.com';   
 $dbuser = 'b18_24238242';   
 $dbpass = 'barry871215';   
 $dbname = 'php1';

 $number =$_REQUEST['number'];
 $name = $_REQUEST['name'];
 $junior = $_REQUEST['junior'];
 $wish = $_REQUEST['wish'];
 
 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db($dbname);   
  
  $sql_insert = "INSERT INTO 表單名稱(number, name, junior, wish) VALUES ('$number','$name','$junior','$wish')";
  $result = mysql_query($sql_insert) or die('MySQL insert error');
  
  $sql_query = "select * from 表單名稱";
  $result = mysql_query($sql_query) or die('MySQL query error');
  
  while($row = mysql_fetch_array($result))
  {
   echo $row['number']."<br>";
   echo $row['name']."<br>";
   echo $row['junior']."<br>";
   echo $row['wish']."<br><br>"; 
  }
?>