<html>
<head>
	<title>Test Upload CURL</title>
</head>
<body>
<form enctype="multipart/form-data" encoding='multipart/form-data' method='post' action="index.php">
  <input name="uploadedfile" type="file" value="choose">
  <input name="uploadedfile2" type="file" value="choose">
  <input type="submit" value="Upload">
</form>
</body>
</html>

<?php

function uploadfoto($file1,$lokasi){

	//upload to local:
	$file = $_FILES[$file1];

	//File details
	$name = $file['name'];
	$tmp_name = $file['tmp_name'];

	$ext = explode('.', $name);
	$ext = strtolower(end($ext));
	//var_dump($ext);

	// Temp details
	$key = md5(uniqid());
	$tmp_file_name = "{$key}.{$ext}";
	$tmp_file_path = $lokasi."/{$tmp_file_name}";
	//var_dump($tmp_file_path);

	//Move the file
	move_uploaded_file($tmp_name, $tmp_file_path);
	//remove tmp file
	//unlink($tmp_file_path);

}


	if ( isset($_FILES['uploadedfile']) ) {
		uploadfoto('uploadedfile','files/img');
	}
	if ( isset($_FILES['uploadedfile']) ) {
		uploadfoto('uploadedfile2','files');
	}
?>