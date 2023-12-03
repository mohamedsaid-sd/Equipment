<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/product.template/search_read',
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
            "fields": [ "name","website_url","default_code", "list_price", "company_id", "qty_available", "type",
 "public_categ_ids","categ_id","taxes_id","product_variant_id","image_1920"],
                 "domain":[["is_published","=",true]]
        }
    }
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
    echo $response."<br/><br/>";

    // convert response to array
    $array = json_decode(  $response , true );
    // loop the array to fetch item
    foreach ($array as $key => $value) {
      if($key == "result"){
         // loop the nested array 
          foreach ($value as $key2 => $value2) {
            // loop the nested array 
            foreach ($value2 as $key3 => $value3) {
                // loop the nested array 
                if($key3 == "name"){
                  // product name
                  echo "<h3> ". $value3 . "</h3>";
                }elseif($key3 == "image_1920"){
                  //  product image 
                  echo "<img src='". $value3 ."' style='width:100px;'/>";
                }elseif($key3 == "list_price"){
                  // product price
                  echo "<b> price : ". $value3 . "<b/><br/>";
                }
          
            }
              // devider between items 
              echo " <hr/> ";
          }
      }else{
         // echo $key . "-" . $value;
      }

      // line between  items
      echo "<hr/>";
    }

}

curl_close($curl);

