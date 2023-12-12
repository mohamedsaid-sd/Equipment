<?php 


if(isset($_POST['add'])){


$work_typ=$_POST['work_typ'];
 $duration=$_POST['duration'];
 $month_rent=$_POST['month_rent'];
 $hour_num=$_POST['hour_num'];
 $email=$_POST['email'];
 $work_hours=$_POST['work_hours'];
 $work_date=$_POST['work_date'];
 $note=$_POST['note'];
 $know=$_POST['Nearest_market'];
 $distance=$_POST['distance'];
 $state=$_POST['state'];
 $site_age=$_POST['site_age'];
 $start_date=$_POST['start_date'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $job=$_POST['job'];
 $categ=$_POST['categ'];
 $company=$_POST['company'];
 $work=$_POST['work'];
 $know=$_POST['know'];
 $status=$_POST['status'];



$jayParsedAry = [
  "params" => [
        "args" => [
           "vals_list" => [
              "work_typ" => "bucket", 
              "duration" => "2 weeks", 
              "month_rent" => true, 
              "hour_num" => 8, 
              "work_hours" => 40, 
              "work_date" => "2023-05-01", 
              "note" => "Construction site preparation for a new residential building.", 
              "distance" => "15km", 
              "state" => "New York", 
              "site_age" => "5 years", 
              "start_date" => "2023-06-01", 
              "name" => "John Doe", 
              "email" => "john.doe@example.com", 
              "job" => "Project Manager", 
              "categ" => "company", 
              "company" => "Doe Construction Co.", 
              "work" => "yes", 
              "know" => "social", 
              "status" => "draft" 
           ] 
        ] 
     ] 
]; 



$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/rental.request/create',
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

