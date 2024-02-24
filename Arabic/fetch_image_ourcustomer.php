<?php
// $response["prams"]=array();
//$json = json_encode($data);

$url = "https://equipation-equipation-odoo-com-stage-11715972.dev.odoo.com/apiV2/company_info";
$array=array();
$json=json_encode($array,JSON_FORCE_OBJECT);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($json)
));
$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {

	// echo $response."<br/><br/><br/>";

	$jsonarray = json_decode($response , true);
	foreach ($jsonarray as $key => $value) {
		if($key == "result"){	
			foreach ($value as $key2 => $value2) {
				// echo "<br/>Sub:".$key2."=".$value2."<br/>";
				if($key2 == "our_customers"){
					echo "<img src='".$value2."' style='width:100%;'>";
				}
			}
		}else{

		// echo "<br/>:Main".$key."=".$value."";
		}
	}

    // echo gettype($x);
    // echo "R".$x;
}
curl_close($ch);

?>