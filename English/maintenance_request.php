<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Maintenance Request </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jun 23 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<script type="text/javascript">
           // deal with location side
   function select_side(){
     var type = document.getElementById("side").value;
      if(type == "company"){
      document.getElementById("sidehide").style.display = "block";
      }else{
      document.getElementById("sidehide").value = "";
      document.getElementById("sidehide").style.display = "none";
      }
   }

      // deal with work with us 
   function select_wwus(){
     var type = document.getElementById("wwus").value;
      if(type == "yes"){
      document.getElementById("wwushide").style.display = "block";
      }else{
      document.getElementById("wwushide").value = "";
      document.getElementById("wwushide").style.display = "none";
      }
   }
</script>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">

        <a href="../English/index.php" class="linkedin" style="padding: 5px;margin: 5px;">Eng</i></i></a> | 
        <a href="../Arabic/index.php" class="linkedin" style="padding: 5px;margin: 5px;"">Ara</i></i></a>

        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">info@equipation.sd</a>
        <i class="bi bi-phone"></i> +249912322447 


      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>

      </div>
    </div>
  </div>

  <?php include 'mainlist.php'; ?>

  <main id="main">

  

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
        <br/>
          <h2 style="width:300px"> Maintenance Request </h2>
       </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

   

          <div class="col-lg-12 mt-5 mt-lg-0">

            <form action="maintenance_request.php" enctype="multipart/form-data" method="post" role="form">

                <h3 for="textAreaRemark">  Maintenance request form : </h3>

                <div class="my-3">
                <div class="error-message"></div>
                <div class="sent-message">
                  
                  <?php
                  // sendding form 
    if(isset($_POST['Send-form'])){

 $Nearest_market=$_POST['Nearest_market'];
 $chassis=$_POST['chassis'];
 $company_name=$_POST['company_name'];
 //$date=$_POST['date'];
 $email=$_POST['email'];
// $engine=$_POST['engine'];
 $job=$_POST['job'];
 $km_read=$_POST['km_read'];
 $know=$_POST['know'];
 $main_type=$_POST['main_type'];
 $manufacturing_year=$_POST['manufacturing_year'];
 $model=$_POST['model'];
 $name=$_POST['name'];
 $network=$_POST['network'];
 $phone=$_POST['phone'];
 $previous=$_POST['previous'];
 $date = date('Y-m-d H:i:s');
 //$request_no=$_POST['request_no'];
 $site_location=$_POST['site_location'];
 $site_nature=$_POST['site_nature'];
 $work_for=$_POST['work_for'];
 //$work_hour=$_POST['work_hour'];
 $engine=$_POST['engine'];

 $issue_description=$_POST['issue_description'];
 
 $fleet_operating_type=$_POST['fleet_operating_type'];
 $state_id=$_POST['state_id'];
 $whatsapp_num=$_POST['whatsapp_num'];

 


      //  echo $Nearest_market."-".$chassis."-".$know."-".$company_name."-".$email;
      //  echo $job."-".$km_read."-".$phone."-".$manufacturing_year."-".$work_for;
      //  echo $network."-".$site_nature."-".$site_location."-".$previous."-".$model;


$jayParsedAry = [
  "params" => [
        "args" => [
           "vals_list" => [
              "Nearest_market" => $Nearest_market, 
              "chassis" => $chassis, 
              "company_name" => $company_name, 
              "date" => $date, 
              "email" => $email, 
              "engine" =>  $engine, 
              "job" =>$job , 
              "km_read" => $km_read, 
              "know" => $know, 
              "main_type" => $main_type, 
              "manufacturing_year" => "2020", 
              "model" => $model, 
              "name" => $name, 
              "network" => $network, 
              "phone" => $phone, 
              "previous" => "no", 
              "request_no" => 1, 
              "site_location" => $site_location, 
              "site_nature" =>  $site_nature,
              "work_for" => $work_for ,
              "nearest_road"=> "North Road",
              "latitude"=>"1234",
              "longitude"=>"5432",
              "issue_description"=> $issue_description,
              "fleet_operating_type"=> $fleet_operating_type,
              "other_attachment"=> "",
              "state_id"=>$state_id,
              "whatsapp_num"=>$whatsapp_num
                
              
              
              ] 
        ] 
     ] 
]; 


                  // get the post value:
              
$done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/request.maintenance/create',
  CURLOPT_SSL_VERIFYHOST => 0 ,
  CURLOPT_SSL_VERIFYPEER => 0 ,
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

  //echo $response;
        // convert response to array
    $array = json_decode(  $response , true );
    // loop the array to fetch item
    foreach ($array as $key => $value) {
       // echo $key."".$value;
        if($key == "msg" )
          if($value == "Success")
                // success add form alert ...
                echo "<div class='alert alert-success'>
                <span class='icon'> <i class='fa fa-check-circle'></i></span>
                 <b> The request has been sent successfully , we at Equipation company are always happy to receive your requests at all times , Equipation company employee will respond to you as soon as possible via the phone number or email sent in the request , Thank you for your Understanding  </b> </div>";
      else
      echo "<div class='alert alert-danger'>
      <span class='icon'> <i class='fa fa-cancel'></i></span>
       <b> Erorr in sending Request </b> </div>";
}
  // echo gettype($x);
  // echo "R".$x;
}
curl_close($curl);




                  }

                  ?>

                </div>
              </div>

              <div class="row">
                <div class="col-md-4 form-group">
                  <label></label>
                  <input type="text" name="Type" class="form-control" id="Type" placeholder="type of Machine " required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="model" id="model" placeholder=" Machine model   " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label></label>
                  <input type="text" class="form-control" name="engine" id="engine" placeholder=" Engine serial number   " required>
                </div>

              </div>
     <!-- Start Input Start Time -->
     <div class="row">

            <div class="col-md-4 form-group mt-3 mt-md-0">
              <label></label>
                    <input type="text" class="form-control" name="chassis" id="Sashinumber" placeholder=" Chaassis number  " required>
                  </div>

     <div class="form-group col-md-4">
           <label></label>
            <input type="text" class="form-control" name="km_read" id="time" placeholder=" km_read   " required>
      </div>

      <div class="form-group col-md-4">
        <label>  Type of repaire </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="typeoffix" name="main_type" required>
            <option value="" disabled selected> -- Choose -- </option>
            <option value="Mechanics"> Mechanics </option>
            <option value="Electricity"> Electricity </option>
            <option value="Metalworks"> Metalworks </option>
            <option value="Adaptation"> Adaptation </option>
            <option value="Hydraulic"> Hydraulic </option>


          </select>
        
        </div>
      </div>



     

      </div>


      <div class="row">
        

        <div class="form-group col-md-4">
            <label for="inputDate"> Date of manufacture</label>
            <input type="date"  class="form-control" id="inputDate" name="manufacturing_year" required />
          </div>



          <div class="form-group col-md-4">
        <label>   The nature of the mechanism's work </label>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <select class="form-control mr-1" id="fleet_operating_type" name="fleet_operating_type" required>
            <option value="" disabled selected> -- Choose   -- </option>
            <option value=" Bucket"> Bucket</option>
            <option value=" Jack Hammer"> Jack Hammer</option>


          </select>
        
        </div>


      </div>


    <div class="form-group col-md-4">
        <textarea class="form-control" name="issue_description" rows="5" placeholder=" Discription of the problem " required></textarea>
      </div>


      </div>


      <br/>
      <h3 for="textAreaRemark"> Site data :  </h3>

      <div class="row">
       

          <div class="form-group col-md-4">
           <label>  states  </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="state_id" name="state_id" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="Khartoum"> Khartoum </option>
               <option value=" North Kordofan"> North Kordofan </option>
               <option value="Northern"> Northern </option>
               <option value="Kassala"> Kassala </option>
               <option value="Blue Nile"> Blue Nile </option>
               <option value="North Darfur "> North Darfur  </option>
               <option value="South Darfur "> South Darfur  </option>
               <option value="South Kordofan "> South Kordofan  </option>
               <option value="Gezira"> Gezira </option>
               <option value="White Nile "> White Nile  </option>
               <option value="River Nile "> River Nile  </option>
               <option value="Red Sea"> Red Sea </option>
               <option value="Al Qadarif "> Al Qadarif  </option>
               <option value="Sennar"> Sennar </option>
               <option value="West Darfur "> West Darfur  </option>
               <option value="Central Darfur "> Central Darfur  </option>
               <option value="East Darfur "> East Darfur  </option>
               <option value="West Kordofan"> West Kordofan </option>
             </select>
           </div>
         </div>


        <div class="form-group col-md-4">
           <label>  The nature of the site </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="site_nature" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="Mountains"> Mountains </option>
               <option value=" Wells"> Wells </option>
               <option value="Farm"> Farm </option>
               <option value="Mine"> Mine </option>
               <option value="Open sites"> Open sites </option>
             </select>
           </div>
         </div>
   
         <div class="col-md-4 form-group mt-3 mt-md-0">
              <br/>
            <input type="text" class="form-control" name="site_location" id="city" placeholder=" Nearest city  " required>
          </div>

          <div class="col-md-4 form-group mt-3 mt-md-0">
            <br/>
            <input type="text" class="form-control" name="Nearest_market" id="city2" placeholder=" The nearest road " required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
              <label>  Network availability </label>
           <div class="d-flex flex-row justify-content-between align-items-center">
             <select class="form-control mr-1" id="ready" name="network" required>
               <option value="" disabled selected> -- Choose -- </option>
               <option value="available"> Available  </option>
               <option value="not_available"> Not Available </option>
             </select>
           
           </div>

          </div>

              </div>
             <br/>

             <h3 for="textAreaRemark"> Customer data : </h3>


              <div class="row">

                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="  Customer name " required>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="phone" class="form-control"  placeholder="  phone (002499123xxx) " required>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="whatsapp_num" class="form-control"  placeholder=" whatsapp phone (002499123xxx) " required>
                </div>

              </div>

              <div class="row">

                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" Customer Email " required>
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                <label>     Type of relationship to the site </label> 
                <select class="form-control mr-1" name="job" id="job" onchange="" required>
                <option value="" disabled selected> --  Choose -- </option>
                <option value="Owner"> Owner   </option>
                <option value="Partner"> Partner </option>
                <option value="Manager"> Manager </option>
                <option value="Employee"> Employee </option>
                <option value="Moderator"> Moderator </option>
                <option value="agent"> agent </option>
                <option value="broker"> broker </option>
                </select> 
                  </div>

                
              <div class="col-md-4 form-group">
                <label>  Your side is </label> 
                <select class="form-control mr-1" name="work_for" id="side" onchange="select_side();" required>
                <option value="" disabled selected> -- Choose -- </option>
                <option value="company"> Company </option>
                <option value="individual"> Individual </option>
                </select>  
                <input id="sidehide" type="text" name="company_name" class="form-control" placeholder="   Company Name " style="display: none;" />
              </div>


              </div>

              <div class="row">

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <label> Have you over worked with us : </label> 
                <select class="form-control mr-1" name="previous" id="wwus" onchange="select_wwus();" required>
                <option value="" disabled selected> -- Choose -- </option>
                <option value="yes"> Yes </option>
                <option value="no"> No </option>
                </select>

               <input id="wwushide" type="text" class="form-control" placeholder=" On any construction site with us" style="display: none;" />
               <!-- required style="display:none" -->
               
              

              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
              <div class="form-group">
              <label for="exampleFormControlSelect2"> How to know us :  </label>
              <select  class="form-control" name="know" id="exampleFormControlSelect2">
                <option value="media"> Facebook </option>
                <option value="media"> Twiter </option>
                <option value="advertisemen"> Advertisment </option>
                <option value="friend"> By a friend </option>
                <option value="other"> Others  </option>
              </select>
              </div>
             </div>

              
        
              <div class="text-center"><button type="submit" name="Send-form"> Send Request </button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>