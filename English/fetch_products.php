<?php


    // echo "<div class='row'>

    // <div class='col-lg-3'>
    // <center>
    // <div style='background-color:#eee;margin:5px; border-radius: 10px;padding:5px;'>
    // <h3 align='center'> The title </h3>
    // <img src='assets/img/logo.jpg' style='width:100%;'/>
    // <b> 300 SDG </b><br/>
    // <button class='btn btn-success' style='width:100%;'> Add to card </button>
    // </div>
    // </center>
    // </div>

    // </div>";

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
    "params": {
        "args": {
            "fields": [
                "name",
                "website_url",
                "default_code",
                "list_price",
                "company_id",
                "qty_available",
                "type",
                "public_categ_ids",
                "categ_id",
                "taxes_id",
                "product_variant_id",
                "image_1920"
            ],
            "domain": [
                [
                    "is_published",
                    "=",
                    true
                ]
            ],
            "context": {
                "lang": "en_US"
            }
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
   // echo $response."<br/><br/><hr/>";



    // convert response to array
    $array = json_decode(  $response , true );
    // loop the array to fetch item
    foreach ($array as $key => $value) {
      echo "<div class='row'>";
      
      if($key == "result"){
         // loop the nested array 
          foreach ($value as $key2 => $value2) {
            // loop the nested array 
                  echo "
            <div class='col-lg-3'>
            <form method='post' action='store.php'>
            <center>
            <div style='background-color:#eee;margin:5px; border-radius: 10px;padding:5px;'>
            ";
            foreach ($value2 as $key3 => $value3) {
                // loop the nested array 
                if($key3 == "name"){ 
                  // product name
                  echo "<input type='text' name='name' value='".$value3."' hidden/>";
                  echo "<h4 align='center'> ".$value3." </h4>";
                }elseif($key3 == "id"){
                  echo "<input type='text' name='id' value='".$value3."' hidden/>";
                }elseif($key3 == "image_1920"){
                  //  product image 
                  echo "<img src='".$value3."' style='width:100%;'/>";
                }elseif($key3 == "list_price"){
                  // product price
                  echo "<input type='text' name='price' value='".$value3."' hidden/>";
                  echo "<b style='font-size:20px;'> 300 SDG </b><br/>";
                }
            }
              // devider between items 

            echo " <button class='btn btn-success' name='add_to_cart' style='width:100%;'> Add to card </button></center></form></div> ";
            
          }
          echo "</div>";
         
      }else{
         // echo $key . "-" . $value;
      }
      // line between  items
      echo "</div>";
    }



}

curl_close($curl);

