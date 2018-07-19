<?php require "database.php"; ?>
<?php if(!$_GET['q']) header('location: index.php');  ?>

<!DOCTYPE html>
<html>
<head>
	<title>My Google</title>
	<style type="text/css">
	#wrapper{
		padding: 20px;
	}	
	#form{

		width: 600px;
	}
	#form #logo{
		font-size: 25px;
		font-weight: bold;
		padding: 20px 0 20px 0;
		text-align: left;
	}

	#logo a{
		color: #111;
		text-decoration: none;
	}
	#form #q {
		padding: 10px;
		border: 1px solid #dddddd;

	}

	.item {
		padding: 10px 0px 10px 0px;
		border-bottom: 1px solid #dddddd;
	}
	.item .title{
		color: #0883E7;
	}

	.item .link {
		color: #59E606;
	}

	.item .description {
		color: #333333;
	}
	</style>
</head>
<body>
<div id="wrapper">
<div id="result">

<div id="form">
	<div id="logo">
		<a href="index.php">Fahealth</a>
	</div>
	<div id="form-input">
			<form method="get" action="search.php">
				<input type="text" id="q" name="q" value="<?php echo $_GET['q'] ?>" style="width: 100%;" placeholder="Kata Kunci Disini . . ."/>
				<input type="submit"  value="GO !" name="">
			</form>
	</div>

<?php

		$q = $_GET['q'];
		$query = "select * from contents where title like '%".$q."%' limit 10";
		$query_exec = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($query_exec)):
			 $total_kata_kunci = count($q);


?>

<?php
$t = $q;

if ($t < 0) {
     echo "gagagl!";
} else {
     echo "hasil";
}
?>
<?php

?>
	<div class="item">
		<div class="title">
		<?php echo $row['title'];?>
		</div>
		<div class="description">
		<?php echo $row['description']; ?>
		</div>
		<div class="link">
		<?php echo $row['url']; ?>
		</div>

	</div> 


<?php

	endwhile;

?>


</div>
</div>
</body>
</html>