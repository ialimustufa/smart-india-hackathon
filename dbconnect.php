<?php

 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'sih');

 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS) or die("cannot connect");
 $dbcon = mysqli_select_db($conn,DBNAME) or die("cannot select DB");
if (!$conn) {
  echo "Error connection";
}
 ?>
