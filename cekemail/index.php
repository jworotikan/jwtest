<!DOCTYPE html>
<html>
<head>
<title>ePlusGo.com - Membuat Fitur "Live Check Email" dengan jQuery & Ajax</title>
<meta name="description" content="Membuat Fitur "Live Check E-Mail" dengan jQuery & Ajax" />
<meta name="keywords" content="eplusgo,jquery,ajax,mysql,select,email,live check" />
<link rel="stylesheet" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
	$('#email').change(function() {  // Jika terjadi perubahan pada id email
		var email = $(this).val(); // Ciptakan variabel email untuk menampung alamat email yang diinputkan
		$.ajax({ // Lakukan pengiriman data dengan Ajax
			type: 'POST', // dengan tipe pengiriman POST
			url: 'cek-email.php', // dan kirimkan prosesnya ke file cek-email.php
			data: 'email=' + email,  // datanya ialah data email
			
			success: function(response) { // Jika berhasil
				$('.hasil-email').html(response); // Tampilkan pesan ke class hasil-email
			}
		});
    });
});
</script>
</head>

<body>
<div id="konten" style="margin:30px auto;">
    <form action="" method="post" class="">
    <h2 align="center">Pendaftaran User</h2>
	<p>
    	<input type="text" name="namadepan" placeholder="Nama Depan" class="normal-input" />
        <input type="text" name="namabelakang" placeholder="Nama Belakang" class="normal-input" />
	</p>
    <p>
    	<input type="text" name="email" placeholder="E-Mail" class="normal-input" id="email" /> <span class="hasil-email"></span>
	</p>
    <p>
    	<input type="text" name="password1" placeholder="Password" class="normal-input" />
        <input type="text" name="password2" placeholder="Masukkan Password Kembali" class="normal-input" />
	</p>
    <input type="submit" value="Daftar" class="tombol" />
    
    </form>
</div>
</body>
</html>