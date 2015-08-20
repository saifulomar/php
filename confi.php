<?php
//$conn = mysql_connect("127.3.9.130", "adminlgPK6SF", "QZxHqI2g1ELm");
//mysql_select_db('itb_notification', $conn);

$conn = mysql_connect("127.6.74.2", "adminlgPK6SF", "QZxHqI2g1ELm");
mysql_select_db('tuts_rest', $conn);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
printf(“Hi, MySQL server version: %s\n", mysql_get_server_info());

?>