<?php require "database.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>My Google</title>
	<style type="text/css">
		
	#form{
		margin: 200px auto;
		width: 600px;
	}
	#form #logo{
		font-size: 25px;
		font-weight: bold;
		padding: 20px 0 20px 0;
		text-align: center;
	}
	#form #q {
		padding: 10px;
		border: 1px solid #dddddd;

	}

	</style>
</head>
<body>
<div id="wrapper">
<div id="form">
	<div id="logo">
		Fahealth
	</div>
	<div id="form-input">
			<form method="get" action="search.php">
				<input type="text" id="q" name="q" style="width: 100%;" placeholder="Kata Kunci Disini . . ."/>
				<input type="submit"  value="GO !" name="">
			</form>
	</div>
	
</div>
</div>
</body>
</html>