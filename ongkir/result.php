<?php
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$weight = $_POST['weight'];
 
$curl = curl_init();
 
curl_setopt_array($curl, array(
 CURLOPT_URL => "http://rajaongkir.com/api/starter/cost",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight",
 CURLOPT_HTTPHEADER => array(
 "key: Your api key"
 ),
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
 echo "cURL Error #:" . $err;
} else {
 
 $data = json_decode($response, true);
}
 
?>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <title>Raja Ongkir - Cek Ongkos Kirim</title>
 <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4.2/themes/black/easyui.css">
 <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4.2/themes/mobile.css">
 <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4.2/themes/color.css">
 <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4.2/themes/icon.css">
 <link rel="stylesheet" type="text/css" href="styles.css">
 <script type="text/javascript" src="../jquery-easyui-1.4.2/jquery.min.js"></script>
 <script type="text/javascript" src="../jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
 <script type="text/javascript" src="../jquery-easyui-1.4.2/jquery.easyui.mobile.js"></script>
</head>
<body>
 <div class="easyui-navpanel">
 <header>
 <div class="m-toolbar">
 <span class="m-title">
 <?php echo $data['rajaongkir']['origin_details']['city_name'];?> ke <?php echo $data['rajaongkir']['destination_details']['city_name'];?> @<?php echo $weight;?>gram
 </span>
 </div>
 </header>
 <div class="easyui-accordion" fit="true" border="false">
 <?php
 for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
 ?>
 <div title="<?php echo strtoupper($data['rajaongkir']['results'][$i]['name']);?>" style="padding:10px">
 <table border="1" width="100%" class="table table-striped">
 <tr>
 <th>No.</th>
 <th>Jenis Layanan</th>
 <th>ETD</th>
 <th>Tarif</th>
 </tr>
 <?php
 for ($j=0; $j < count($data['rajaongkir']['results'][$i]['costs']); $j++) {
 # code...
 ?>
 <tr>
 <td><?php echo $j+1;?></td>
 <td>
 <div style="font:bold 16px Arial"><?php echo $data['rajaongkir']['results'][$i]['costs'][$j]['service'];?></div>
 <div style="font:normal 11px Arial"><?php echo $data['rajaongkir']['results'][$i]['costs'][$j]['description'];?></div>
 </td>
 <td align="center">&nbsp;<?php echo $data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['etd'];?></td>
 <td align="right"><?php echo number_format($data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value']);?></td>
 </tr>
 <?
 }
 ?>
 </table>
 </div>
 <?php
 }
 
 ?>
 </div>
 <footer>
 <div class="m-toolbar">
 <div class="m-left">
 <a href="index.php" class="easyui-linkbutton m-back" >Kembali</a>
 </div>
 </div>
 </footer>
 </div>
</body>
</html>