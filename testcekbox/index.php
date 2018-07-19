<html>
<head>
  <title>Hapus data mahasiswa</title>
  <script type="text/javascript">

  function pilihan()
  {
     // membaca jumlah komponen dalam form bernama 'myform'
     var jumKomponen = document.myform.length;

     // jika checkbox 'Pilih Semua' dipilih
     if (document.myform[0].checked == true)
     {
        // semua checkbox pada data akan terpilih
        for (i=1; i<=jumKomponen; i++)
        {
            if (document.myform[i].type == "checkbox") document.myform[i].checked = true;
        }
     }
     // jika checkbox 'Pilih Semua' tidak dipilih
     else if (document.myform[0].checked == false)
        {
            // semua checkbox pada data tidak dipilih
            for (i=1; i<=jumKomponen; i++)
            {
               if (document.myform[i].type == "checkbox") document.myform[i].checked = false;
            }
        }
  }

  </script>
</head>
<body>
<h1>Hapus Data Mahasiswa</h1>
<?php

// koneksi mysql

date_default_timezone_set('Asia/Jakarta');

$db_host = "localhost";
$db_user = "bel10003_admin";
$db_pass = "b3l4nj4t3rus!";
$db_name = "testcekbox";
 
$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	
	//Ubah url blog
	$home = 'http://' . $_SERVER['HTTP_HOST'] . '/';
}

if ($_GET['action'] == "del")
	{
	   // membaca nilai n dari hidden value
	   $n = $_POST['n'];

	   for ($i=0; $i<=$n-1; $i++)
	   {
	     if (isset($_POST['nim'.$i]))
	     {
	       $nim = $_POST['nim'.$i];
	       $query = "DELETE FROM mhs WHERE nim = '$nim'";

	       print_r($query);die();
	       $insert_po = $db_conn->query($query);
	     }
	   }
	}



// query SQL untuk menampilkan semua data

$query = "SELECT * FROM mhs";
$hasil = $db_conn->query($query);

// membuat form penghapusan data

echo "<form name='myform' method='post' action='".$_SERVER['PHP_SELF']."?action=del'>";
echo "<table border='1'>";
echo "<tr><td><input type='checkbox' name='pilih' onclick='pilihan()' /> Pilih semua</td><td><b>NIM</b></td><td><b>Nama Mahasiswa</b></td></tr>";
$i = 0;
while($data=$hasil->fetch_array())
{
  echo "<tr><td><input type='checkbox' name='nim".$i."' value='".$data['nim']."' /></td><td>".$data['nim']."</td><td>".$data['namamhs']."</td></tr>";
  $i++;
}
echo "</table>";
echo "<input type='hidden' name='n' value='".$i."' />";
echo "<p><input type='submit' value='Hapus' name='submit'> <input type='reset' value='Batal' name='reset'></p>";
echo "</form>";
?>

</body>
</html>