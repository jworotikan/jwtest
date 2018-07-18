<?php
 
$curl = curl_init();
 
curl_setopt_array($curl, array(
 CURLOPT_URL => "http://rajaongkir.com/api/starter/city",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "GET",
 CURLOPT_HTTPHEADER => array(
 "key: 9848f187c249810b88fc35fd5051a55b"
 ),
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
 echo "cURL Error #:" . $err;
} else {
 
 $k = json_decode($response, true);
 echo json_encode($k['rajaongkir']['results']);
 
}
?>