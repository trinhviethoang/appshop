<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$mysqli = mysqli_connect("https://databases-auth.000webhost.com/", "id16302556_admin", "@Teothai1993", "id16302556_db_app");
$mysqli->set_charset("utf8");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>