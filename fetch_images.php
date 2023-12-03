<?php

$response=array();
$response["prams"]=array();
$json=json_encode($response,JSON_FORCE_OBJECT);

//$json = json_encode($data);

$url = "https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/company_info";

$ch = curl_init($url);

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
    echo $response;
}
curl_close($ch);

?>