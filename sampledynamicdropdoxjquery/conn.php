<?php
$db = new mysqli('localhost', 'root','' ,'smpdydrpbx');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>