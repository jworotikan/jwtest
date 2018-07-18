<?php
include('config.php');

if(isset($_POST["email"]))
{
    // Cek apakah ada permintaan Ajax
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
	
    $result = $db_conn->query("SELECT mbremail FROM dbmmember WHERE mbremail='$_POST[email]'");
    if ($result->num_rows > 0){
        echo '<font style=color:#F00>E-mail sudah terdaftar</font>'; // Tampilkan pesan
        }else{ // Jika belum ada
        echo '<font style=color:#06F>E-mail tersedia</font>'; // Tampilkan pula pesan
    } 
   
}


?>