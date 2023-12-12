<?php 


if(isset($_POST['add'])){




 $machine=$_POST['machine']; 
 $comprossor=$_POST['comprossor'];
 $generator=$_POST['generator'];
 $welding_machine= $_POST['welding_machine'];
 $excavator= $_POST['excavator'];
 $model= $_POST['model'];
 $wieght= $_POST['wieght'];
 $license=$_POST['license'];
 $certificate=$_POST['certificate'];
 $authorization= $_POST['authorization'];
 $other=$_POST['other'];
 $lowbed=$_POST['lowbed'];
 $trailer= $_POST['trailer'];
 $truck=$_POST['truck'];
 $state= $_POST['state'];
 $zone=$_POST['zone'];
 $workplace=$_POST['workplace'];
 $company_name= $_POST['company_name'];
 $location=$_POST['location'];
 $description= $_POST['description'];
 $phone=$_POST['phone'];
 $mobile=$_POST['mobile'];
 $des_state= $_POST['des_state'];
 $des_zone=$_POST['des_zone'];
 $des_workplace=$_POST['des_workplace'];
 $des_company_name=$_POST['des_company_name'];
 $des_location=$_POST['des_location'];
 $des_description= $_POST['des_description'];
 $des_phone= $_POST['des_phone'];
 $des_mobile=$_POST['des_mobile'];
 $name=$_POST['name'];
 $email= $_POST['email'];
 $job=$_POST['job'];
 $work_for= $_POST['work_for'];
 $previous= $_POST['previous'];
 $know= $_POST['know'];
 $status= $_POST['status'];



$jayParsedAry = [
    "params" => [
          "args" => [
             "vals_list" => [
                "machine" => "Excavator", 
                "comprossor" => "100 PSI", 
                "generator" => "15 kW", 
                "welding_machine" => "200 A", 
                "excavator" => "Medium", 
                "model" => "X123", 
                "wieght" => 20, 
                "license" => 1, 
                "certificate" => 2, 
                "authorization" => 3, 
                "other" => 4, 
                "lowbed" => 15, 
                "trailer" => "zs", 
                "truck" => 10, 
                "state" => "New York", 
                "zone" => "Zone 1", 
                "workplace" => "Field", 
                "company_name" => "XYZ Constructions", 
                "location" => "1234 Main Street", 
                "description" => "Need excavation services for site prep.", 
                "phone" => 555678910, 
                "mobile" => "5559876543", 
                "des_state" => "New Jersey", 
                "des_zone" => "Zone 2", 
                "des_workplace" => "Site A", 
                "des_company_name" => "Company B", 
                "des_location" => "9876 Branch Street", 
                "des_description" => "Transport to destination site.", 
                "des_phone" => "5557654321", 
                "des_mobile" => "5556781234", 
                "name" => "John Doe", 
                "email" => "john.doe@example.com", 
                "job" => "Job Description here", 
                "work_for" => "company", 
                "previous" => "yes", 
                "know" => "google", 
                "status" => "draft" 
             ] 
          ] 
       ] 
 ]; 



$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/migration.request/create',
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

