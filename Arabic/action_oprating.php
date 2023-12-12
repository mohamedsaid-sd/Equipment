<?php 


if(isset($_POST['add'])){


$full_name=$_POST['full_name'];
 $nationality=$_POST['nationality'];
 $id_number=$_POST['id_number'];
 $phone_number=$_POST['phone_number'];
 $phone_number_2=$_POST['phone_number_2'];
 $whatsapp_num=$_POST['whatsapp_num'];
 $email=$_POST['email'];
 $tax_file=$_POST['tax_file'];
 $address=$_POST['address'];
 $distance=$_POST['distance'];
 $recommendation=$_POST['recommendation'];
 $code_number=$_POST['code_number'];
 $years_in_field=$_POST['years_in_field'];
 $owned_machines=$_POST['owned_machines'];
 $full_authority_agent=$_POST['full_authority_agent'];
 $limit_authority_agent=$_POST['limit_authority_agent'];
 $date_of_foundation=$_POST['date_of_foundation'];
 $registration_number=$_POST['registration_number'];
 $file_tax_number=$_POST['file_tax_number'];
 $expatriate_date=$_POST['expatriate_date'];
 $compressor=$_POST['compressor'];
 $generator_tower_light=$_POST['generator_tower_light'];

 $welding_machine=$_POST['welding_machine'];

 $cranes  =$_POST['cranes']; 
                $heavy_trucks=$_POST['heavy_trucks'];
                $excavation_equipment =$_POST['excavation_equipment'];
                $pipeline_equipment =$_POST['pipeline_equipment'];
                $civil_equipment =$_POST['civil_equipment'];
                $mining_equipment =$_POST['mining_equipment']; 
                $agricultural_equipment =$_POST['agricultural_equipment'];
                $facility=$_POST['facility']; 
                $light_vehicles_trucks =$_POST['light_vehicles_trucks'];
                $air_compressor_selection =$_POST['air_compressor_selection']; 
                $generator_tower_light_selection=$_POST['generator_tower_light_selection']; 
                $welding_machine_selection=$_POST['welding_machine_selection'];
                $excavator_selection =$_POST['excavator_selection']; 
                $brand_id=$_POST['brand_id']; 
                $size_id=$_POST['size_id']; 
                $model_id=$_POST['model_id'];
                $year_of_manufacture_id=$_POST['year_of_manufacture_id'];
                $monthly_rental_id=$_POST['monthly_rental_id']; 
                $condition_id=$_POST['condition_id'];
                $state_id=$_POST['state_id']; 
                $advance_id =$_POST['advance_id']; 
                $category_id=$_POST['category_id'];
                $status=$_POST['status'];




$jayParsedAry = [
    "params" => [
          "args" => [
             "vals_list" => [
                "full_name" => "John Doe", 
                "nationality" => "American", 
                "id_number" => "AB1234567", 
                "phone_number" => "1234567890", 
                "phone_number_2" => "0987654321", 
                "whatsapp_num" => "+11234567890", 
                "email" => "john.doe@example.com", 
                "tax_file" => "TX123456", 
                "address" => "123 Main St, Hometown, USA", 
                "recommendation" => "Highly recommended by industry partners.", 
                "code_number" => "OP1234", 
                "years_in_field" => 5, 
                "owned_machines" => 10, 
                "full_authority_agent" => true, 
                "limit_authority_agent" => false, 
                "date_of_foundation" => "2010-01-10", 
                "registration_number" => "RN123456789", 
                "file_tax_number" => "FTN123456", 
                "expatriate_date" => "2025-01-10", 
                "compressor" => true, 
                "generator_tower_light" => true, 
                "welding_machine" => false, 
                "cranes" => true, 
                "heavy_trucks" => false, 
                "excavation_equipment" => true, 
                "pipeline_equipment" => false, 
                "civil_equipment" => true, 
                "mining_equipment" => false, 
                "agricultural_equipment" => true, 
                "facility" => false, 
                "light_vehicles_trucks" => true, 
                "air_compressor_selection" => "fixed", 
                "generator_tower_light_selection" => "soundproof", 
                "welding_machine_selection" => "mobile", 
                "excavator_selection" => "grader", 
                "brand_id" => "Caterpillar", 
                "size_id" => "Large", 
                "model_id" => "CAT-D9T", 
                "year_of_manufacture_id" => "2018", 
                "monthly_rental_id" => "High", 
                "condition_id" => "Well-maintained", 
                "state_id" => "Operational", 
                "advance_id" => "30% of rental price", 
                "category_id" => "Heavy Machinery", 
                "status" => "draft" 
             ] 
          ] 
       ] 
 ]; 
  


$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/operating.request/create',
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

