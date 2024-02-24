


<?php

// Get The Count of the products

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-11715972.dev.odoo.com/apiV2/product.template/search_count',
  CURLOPT_SSL_VERIFYHOST => 0 ,
  CURLOPT_SSL_VERIFYPEER => 0 ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "params":{
        "args":{
        "domain":[["is_published","=",true]]
    }}
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'X-Openerp-Session-Id: {{session_id}}',
    'Cookie: frontend_lang=en_US'
  ),
));

$response = curl_exec($curl);

if(curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
} else {
    echo $response;

        // convert responce to array
    $jsonarray = json_decode($response , true);
    // loop array to display result 
    foreach ($jsonarray as $key => $value) {
   
      //echo "<hr/>".$key.$value;
     if($key == "result"){
      echo "The Number of product=".$value;
     }
    }

}

curl_close($curl);