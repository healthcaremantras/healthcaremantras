<?php
include ("include/connection.php");
SESSION_START();

$delete="delete from hospitals where address='$_SESSION[haddress]'";
mysqli_query($con,$delete);
header("Location: table.php");

?>