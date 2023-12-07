<?php 


if(isset($_POST['add'])){


$Nearest_market=$_POST['Nearest_market'];
 $chassis=$_POST['Nearest_market'];
 $company_name=$_POST['company_name'];
 $date=$_POST['date'];
 $email=$_POST['email'];
 $engine=$_POST['engine'];
 $job=$_POST['job'];
 $km_read=$_POST['km_read'];
 $know=$_POST['Nearest_market'];
 $main_type=$_POST['main_type'];
 $manufacturing_year=$_POST['manufacturing_year'];
 $model=$_POST['model'];
 $name=$_POST['name'];
 $network=$_POST['network'];
 $phone=$_POST['phone'];
 $previous=$_POST['previous'];
 $request_no=$_POST['request_no'];
 $site_location=$_POST['site_location'];
 $site_nature=$_POST['site_nature'];
 $work_for=$_POST['work_for'];
 $work_hour=$_POST['work_hour'];

$jayParsedAry = [
  "params" => [
        "args" => [
           "vals_list" => [
              "Nearest_market" => $Nearest_market, 
              "chassis" => $chassis, 
              "company_name" => $company_name, 
              "date" => $date, 
              "email" => $email, 
              "engine" => $engine, 
              "job" =>$job , 
              "km_read" => $km_read, 
              "know" => $know, 
              "main_type" => $main_type, 
              "manufacturing_year" => $manufacturing_year, 
              "model" => $model, 
              "name" => $name, 
              "network" => $network, 
              "phone" => $phone, 
              "previous" => "no", 
              "request_no" => 1, 
              "site_location" => $site_location, 
              "site_nature" => , $site_nature
              "work_for" => $work_for, 
              "work_hour" => $work_hour
           ] 
        ] 
     ] 
]; 

$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/maintenance.request/create',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$done,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'X-Openerp-Session-Id: {{session_id}}',
    'Cookie: session_id=a1fd8b1c0a71abde4e289ac7f5212eee0e8cc5e7'
  ),
));

 $response = curl_exec($curl);



if(curl_errno($curl)) {
  echo 'Error: ' . curl_error($curl);
} else {

  echo $response;

  // echo gettype($x);
  // echo "R".$x;
}
curl_close($curl);

}




?>

