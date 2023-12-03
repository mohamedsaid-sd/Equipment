<!DOCTYPE html>
<html dir="rtl">
<head>
	<title></title>
</head>
<body>

<h1> المنتجات </h1>

<?php 

$response=array();
$response["result"]=array();
$json=json_encode($response,JSON_FORCE_OBJECT);

//$json = json_encode($data);

$url = "https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/product.template/search_read";

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
    echo $response;
}
curl_close($ch);

 ?>

?>

</body>
</html>