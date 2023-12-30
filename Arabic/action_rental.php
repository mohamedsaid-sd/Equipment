<?php 


if(isset($_POST['add'])){

 // rental data : 
 $work_typ=$_POST['work_typ']; // نوع العمل
 $duration=$_POST['duration']; // مدة العمل
 $month_rent=$_POST['month_rent']; // ساعات العمل
 $hour_num=$_POST['hour_num']; // ساعات العمل اليومية
 $work_hours=$_POST['work_hours']; // ساعات العمل ادخال يدوي
 $work_date=$_POST['work_date']; // بدايات العمل المتوقعة

 // site data :
 $state=$_POST['state']; // الولاية
 $start_date=$_POST['start_date']; // 
 $note=$_POST['note'];
 $know=$_POST['Nearest_market'];
 $distance=$_POST['distance'];

 $site_age=$_POST['site_age']; // عمر الموقع


 

 $categ=$_POST['categ'];
 $work=$_POST['work'];
 


 // client data : 
$name=$_POST['name']; // customer name 
$email=$_POST['email']; // customer email
$job=$_POST['job']; // customer job
$company=$_POST['company']; // the company or direction
$know=$_POST['know']; // pevious work with us 
$status=$_POST['status']; // how you know us



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
              "status" => "draft" ,
              "work_field" => "yes",
              "region" => "yes"
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



If you have a Web Form which manages your Image upoad through $_POST. You could use this ..

<?php 
if(isset($_POST)){
  $imgData = file_get_contents($_FILES['userImage']['tmp_name']);
  $imgData = base64_encode($imgData);
  echo "samba".$imgData;
    }

?> 
<form method="POST" enctype="multipart/form-data"> 
<input type="file" name="userImage"> 
<input type="submit" value="Upload"> 
</form>

