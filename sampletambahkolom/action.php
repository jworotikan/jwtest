<?php
$connect = mysqli_connect("localhost", "root", "", "testkolom");  
$input = $_POST['addmore'];
foreach ($input as $output) {
    mysqli_query($connect,"INSERT INTO pendaftaran VALUES ('','$output')");
}
header('location:index.php')
?>