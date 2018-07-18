<?php
/*
* Rajaongkir cek harga
* Code by @xyussanx :: idmore
*/
class IdmoreRO{
	public function __construct()
	{

	}
//menampilkan data provinsi
	public function showProvince()
	{
		$curl = curl_init();

	  curl_setopt_array($curl, array(
	    CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
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
		$result = 'error';
		return 'error';
		} else {
		return $response;
		}
		case 'showprovince':
		$province = $IdmoreRO­>showProvince();
		echo $province;
		break;

	}
//menampilkan data kabupaten/kota berdasarkan id provinsi
	public function showCity($province)
	{

	}
//hitung ongkir
	public function hitungOngkir($origin,$destination,$weight,$courier)
	{

	}
}
?>