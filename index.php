<h1>aaaf</h1>
<?php
phpinfo ();
?>
<?php
$db_conn = new mysqli("localhost", "root", "", "test");
if (mysqli_connect_errno())
  {
  echo 'Connection to database failed:'.mysqli_connect_error();
  exit();
  }
else
  {
  echo 'Ok';
  }
?>
