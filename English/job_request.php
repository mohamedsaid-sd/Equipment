<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Application Form </title>
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

    $skill_counter = 2 ; 

    function add_skill_line() {
    //alert("go");
    var skills = document.getElementById("skill_ids");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "المهارة ");
    input.setAttribute("name" , "skill" + $skill_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-3 form-group");
    var label2 = document.createElement("label");
    label2.innerHTML = "التقييم";
    var select = document.createElement("select");
    select.setAttribute("class" , "form-control");
    select.setAttribute("name" , "skill_val" + $skill_counter);
    var option1 = document.createElement("option");
    option1.setAttribute("selected" , "true ");
    option1.setAttribute("disabled" , "true ");
    option1.innerHTML = "-- Select --";
    var option2 = document.createElement("option");
    option2.innerHTML = "جيدة";
    option2.value = "Good";
    var option3 = document.createElement("option");
    option3.innerHTML = "ممتازة";
    option3.value = "Excellent";
    select.appendChild(option1);
    select.appendChild(option2);
    select.appendChild(option3);

    div2.appendChild(label2);
    div2.appendChild(select);


    skills.appendChild(div);
    skills.appendChild(div2);
    
    $skill_counter ++;
  }

</script>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">

        <a href="../English/index.php" class="linkedin" style="padding: 5px;margin: 5px;">Eng</i></i></a> | 
        <a href="../Arabic/index.php" class="linkedin" style="padding: 5px;margin: 5px;"">Ara</i></i></a>

        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +249 6445


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
    <section class="contact">
      <div class="container">

        <div class="section-title">
        <br/>
          <h2>  Application Form  </h2>
         </div>
      </div>

        <div class="my-3">
         <div class="error-message"></div>
         <div class="sent-message">
            <?php 

            if(isset($_POST['send'])){

              // get the post value 
              

              @$request_type = $_POST['request_type'];

              @$full_name = $_POST['full_name'];
              @$birthdate = $_POST['birthdate'];
              @$place = $_POST['place'];
              @$home = $_POST['home'];
              @$house = $_POST['house'];
              @$national = $_POST['national'];
              @$type_national = $_POST['type_national'];
              @$other_national = $_POST['other_national'];
              // $request_type = $_POST['request_type'];
              @$social_state = $_POST['social_state'];

              //@$children = $_POST['children'];
              @$girl = $_POST['girl'];
              @$boys = $_POST['boys'];


              
              @$mobile = $_POST['mobile'];
              @$phone = $_POST['phone'];
              @$email = $_POST['email'];
              @$facebook = $_POST['facebook'];
              @$twiter = $_POST['twiter'];
              @$instagram = $_POST['instagram'];
              @$web = $_POST['web'];
              @$o1=$_POST['o1'];@$o2=$_POST['o2'];@$o3=$_POST['o3'];
              @$c1=$_POST['c1'];@$c2=$_POST['c2'];@$c3=$_POST['c3'];

              @$street = "Origin Home :".$o1."-".$o2."-".$o3;
              @$street2 = "Origin Home :".$c1."-".$c2."-".$c3;
              
              @$house_type = $_POST['house_type'];

              @$id_type = $_POST['id_type'];
              @$issue_place = $_POST['issue_place'];
              @$issue_date = $_POST['issue_date'];
              @$expirty_date = $_POST['expirty_date'];
              @$service = $_POST['service'];
              @$other = $_POST['other'];

              @$certificate = $_POST['certificate'];
              @$study_field = $_POST['study_field'];
              @$study_school = $_POST['study_school'];
              @$university_address = $_POST['university_address'];

                    // INSERT SKILL ARRAY
              $skill_array = array();
              $skill_counter = 1 ;
              while (isset($_POST['skill'.$skill_counter])) {
                  array_push($skill_array,
                   $_POST['skill'.$skill_counter],
                   $_POST['skill_val'.$skill_counter]);
                  $skill_counter ++;
              }

              // PRINT SKILLS ARRAY
                $skill_name = "";
                $skill_value = "";
                foreach ($skill_array as $key => $value) {
                  if($key % 2 == 0)
                    $skill_name = $value ;
                  elseif ($key % 2 == 1) {
                    $skill_value = $value;
                  }
                  if($key % 2 == 1){
                    echo "Data:".$skill_name." - ".$skill_value."<br/>";
                    // [0, 0, [
                    // "name" => $skill_name, 
                    // "eval" => $skill_value ]], 
                    $skilljarray = [0,0,["name" => $skill_name,"eval" => $skill_value]];
                  }

                }


              

             

              // The Education Pre School and secondary and university and after university




 $jayParsedAry = [
   "params" => [
         "args" => [
            "vals_list" => [
               [
                  "name" => $full_name, 
                  "birthdate" => $birthdate, 
                  "place" => $place, 
                  "home" => $home, 
                  "house" => $house, 
                  "national" => $national, 
                  "type_national" => $type_national, 
                  "other_national" => "yes", 
                  "request_type" => "employment", 
                  "social_state" => $social_state, 
                  "children" => "no", 
                  "boys" => $boys, 
                  "girl" => $girl, 
                  "mobile" => $mobile, 
                  "phone" => $phone, 
                  "email" => $email, 
                  "facebook" => $facebook, 
                  "twiter" => $twiter, 
                  "instagram" => $instagram, 
                  "web" => $web, 
                  "street" => $street, 
                  "street2" => $street2, 
                  "zip" => "12345", 
                  "city" => "Johnstown", 
                  "state_id" => 1, 
                  "country_id" => 1, 
                  "country_code" => "XL", 
                  "house_type" => $house_type, 
                  "note" => "Some personal note.", 
                  "id_type" => $id_type, 
                  "issue_place" => $issue_place, 
                  "issue_date" => $issue_date, 
                  "expirty_date" => $expirty_date, 
                  "service" => $service, 
                  "other" => $other, 
                  "certificate" => $certificate, 
                  "study_field" => $study_field, 
                  "study_school" => $study_school, 
                  "university_address" => $university_address, 
                  "emergency_contact" => "Jane Doe", 
                  "emergency_phone" => "1122334455", 
                  "details" => "Some more notes.", 
                  "training" => "Advanced Johnology", 
                  "know" => "tv", 
                  "related" => "no", 
                  "employment_type" => "full", 
                  "excepted" => 50000, 
                  "restruction" => "None.", 
                  "info" => "Some info notes.", 
                  "sign" => "", 
                  "recute_date" => "2023-01-01", 
                  "inform" => "Some inform notes.", 
                  "status" => "draft", 
                  "train_ids" => [
                     [
                        0, 
                        0, 
                        [
                           "name" => "Project Management Certification", 
                           "date_from" => "2022-01-01", 
                           "date_to" => "2022-06-01", 
                           "job" => "Trainee Project Manager", 
                           "tasks" => "Completed a series of courses related to project management and passed the final assessment.", 
                           "attach" => "" 
                        ] 
                     ] 
                  ], 
                  "exper_ids" => [
                              [
                                 0, 
                                 0, 
                                 [
                                    "name" => "Software Development Intern", 
                                    "date_from" => "2021-07-01", 
                                    "date_to" => "2022-01-01", 
                                    "job" => "Junior Developer", 
                                    "tasks" => "Participated in the development of several web projects and learned programming best practices.", 
                                    "attach" => "" 
                                 ] 
                              ] 
                           ], 
                  "skill_ids" => [$skilljarray] ,
                  
                  "ref_ids" => [
                                                      [
                                                         0, 
                                                         0, 
                                                         [
                                                            "name" => "Jane Smith", 
                                                            "job" => "Senior Engineer", 
                                                            "mobile" => 1234567890, 
                                                            "company" => "Tech Solutions Inc." 
                                                         ] 
                                                      ] 
                                                   ], 
                  "hobbies_ids" => [
                                                               [
                                                                  0, 
                                                                  0, 
                                                                  [
                                                                     "name" => "Programming" 
                                                                  ] 
                                                               ], 
                                                               [
                                                                        0, 
                                                                        0, 
                                                                        [
                                                                           "name" => "Reading" 
                                                                        ] 
                                                                     ] 
                                                            ] 
               ] 
            ] 
         ] 
      ] 
]; 

//echo "Data:".$study_field."-".$study_school."-".$university_address."-".$street;

              // print the post value 

           //   echo "Data:".$full_name."-".$birthdate."-".$place."-".$home."-".$house."-".$national."-".$type_national."-".$other_national."-".$social_state."-".$children."-".$mobile."-".$phone."-".$email."-".$facebook."-".$twiter."-".$instagram."-".$web."-".$street."-".$street2."-".$id_type."-".$issue_place."-".$issue_date."-".$expirty_date."-".$service."-".$other."-".$certificate;

           $done=json_encode($jayParsedAry);
           //echo $done;
           $curl = curl_init();
           
           curl_setopt_array($curl, array(
             CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/employment.request/create',
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
                                    <b> تم ارسال البلاغ  بنجاح يسعدنا دوما في شركة ايكيوبيشن استقبال بلاغاتكم طوال الوقت , سوف يقوم موظف شركة ايكيوبيشن بالرد عليك في اقرب وقت عن طريق رقم الهاتف او البريد الالكتروني المرسلين في الطلب ... شكرا لتفهمكم  </b> </div>";
                       else
                         echo "<div class='alert alert-danger'>
                                   <span class='icon'> <i class='fa fa-cancel'></i></span>
                                    <b> خطأ في عملية الارسال </b> </div>";
               }
             // echo gettype($x);
             // echo "R".$x;
           }
           curl_close($curl);



            }

            ?>        
          </div>
        </div>

      <div class="container">
      <form action="job_request.php" method="POST">

      <div class="row">

      <h3> Personal Information  </h3>  
      <div class="col-md-4 form-group">
        <br/>
        <label> Type of Request  </label>
        <select name="request_type" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option> employment </option>
          <option> employment </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
        <label> Profile Image </label>
        <input type="file" name="" class="form-control">
      </div>

      <div class="col-md-4 form-group">
        <label></label>
        <input type="text" name="full_name" class="form-control" placeholder="Full Name">
      </div>

      <div class="col-md-4 form-group">
        <label> Date of birth  </label>
        <input type="date" name="birthdate" class="form-control">
      </div>

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="place" class="form-control" placeholder="Place of birth">
      </div> 

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="home" class="form-control" placeholder="The Originam Place">
      </div> 

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="house" class="form-control" placeholder="The Current Place">
      </div> 

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="national" class="form-control" placeholder="Nationality">
      </div>  

       <div class="col-md-4 form-group">
        <br/>
        <label> Type of Nationality  </label>
        <select name="type_national" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option> original </option>
          <option> Naturalize </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
        <br/>
        <label> Do you have another Nationality  </label><br/>
        <select name="other_national" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option value="yes"> Yes </option>
          <option value="no"> no </option>
        </select>
      </div> 
        
      </div>

      <div class="row">

      <div class="col-md-4 form-group">
        <br/>
        <label> Social Status  </label>
        <select name="social_state" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option> single </option>
          <option> Marred </option>
          <option> Divorced </option>
          <option> ارمل </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
        <br/>
        <label> Do You Have Children  </label><br/>
        <select name="children" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option> Yes </option>
          <option> no </option>
        </select>
        <input type="text" name="boys"  class="form-control" placeholder="Boys">
        <input type="text" name="girl" class="form-control" placeholder="Girls">
      </div> 
       
      </div>
      <br/>
      <div class="row">

      <h3> Contact Information </h3>

       <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="mobile" class="form-control" placeholder="Mobile No">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="number" name="phone" class="form-control" placeholder="Mobile No (secondery)">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="email" name="email" class="form-control" placeholder="Email">
      </div>
        
      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="facebook" class="form-control" placeholder="facebook">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="instagram" class="form-control" placeholder="Instagram">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="twiter" class="form-control" placeholder="Twitter">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="web" class="form-control" placeholder="P.Website">
      </div>
        
      </div>

      <br/>

      <div class="row">

      <h3> Accommodation Information </h3>

      <h4> Origin Home </h4>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o1" class="form-control" placeholder="State">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o2" class="form-control" placeholder="Mahlyah">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o3" class="form-control" placeholder="Squire">
      </div>

      </div>

   

      <div class="row">

   

    
        
      </div>

       <div class="row">


      <h4> Current Home </h4>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c1" class="form-control" placeholder="State">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c2" class="form-control" placeholder="Mahyah">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c3" class="form-control" placeholder="Squire">
      </div>

      </div>

      

      <div class="row">

      <div class="col-md-4 form-group">
        <br/>
        <label> Type of Accomm  </label>
         <select name="house_type" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option>owned</option>
          <option>owned</option>
          <option>owned</option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="c8" class="form-control" placeholder="Detailed Description"></textarea>
      </div>
        
      </div>

      <div class="row">
      <h3> ID Details </h3>

      <div class="col-md-4 form-group">
      ID type
      <select name="id_type" class="form-control">
      <option selected disabled> -- Select -- </option>
      <option> National Card </option>
      <option> D.License </option>
      <option> passport </option>
      <option> Other </option>
      </select>
      <input type="text" class="form-control" placeholder="Enter The ID tyle">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="issue_place" class="form-control" placeholder="Issue Place">
      </div>

      <div class="col-md-4 form-group">
      <label> Issue Date  </label>
      <input type="date" name="issue_date" class="form-control">
      </div>
        
      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label> Expired Date  </label>
      <input type="date" name="expirty_date" class="form-control">
      </div>

      <div class="col-md-4 form-group">
        Did You Finish your National Service ? 
      <select name="service" class="form-control">
      <option selected disabled> -- Select -- </option>
      <option value="yes"> Yes </option>
      <option value="no"> no </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="other" class="form-control" placeholder="Notes"></textarea>
      </div>
        
      </div>

      <div class="row">
      <h3> Education Certificates </h3>

  

     

  

      <div class="row">

      <h4> The University </h4>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="study_school" class="form-control" placeholder="University name">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="university_address" class="form-control" placeholder="University Place">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="study_field" class="form-control" placeholder="The College">
      </div>

      </div>

      <div class="row">


      <div class="col-md-4 form-group">
      <label> The Education Degree  </label>
      <select name="certificate" class="form-control">
      <option> -- Select -- </option>
      <option> bachelor </option>
      <option> bachelor </option>
      <option> Other </option>
      </select>
      </div>

        
      </div>

     

  

      <div class="row">
      <h3> Courses </h3>
      <h3> Training </h3>
      <h3> Experience </h3>
      <h3> Skills </h3>

      <div id="skill_ids" class="row">

      <div class="col-md-3 form-group">
      <label></label>
      <input type="text" name="skill1" class="form-control" placeholder="Skill"/>
      </div>

      <div class="col-md-3 form-group">
      <label> Evaluation </label>
      <select name="skill_val1" class="form-control">
        <option selected disabled> -- Select -- </option>
        <option value="Good"> Good  </option>
        <option value="Excellent"> Excellent  </option>
      </select>
      </div>


      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_skill_line();"> أضافة مهارة + </span>

      <h3> Habbies </h3>
      <h3> Reference </h3>      
      </div>

      <div class="row">
      <h3> Questions </h3>
      <div class="col-md-4 form-group">
      <label> How you know the companny ؟ </label>
     <br/>
      <input type="checkbox">Frend<br/>
      <input type="checkbox">Sticers<br/>
      <input type="checkbox">Social Media<br/>
      <input type="checkbox">Radio<br/>
      <input type="checkbox">Television<br/>
     </div>

      <div class="col-md-4 form-group">
      <label> Dou you have parenter or friend work with company  ؟ </label>
     <br/>
    <select class="form-control">
      <option> -- Select -- </option>
      <option> Yes </option>
      <option> No </option>
    </select>
    <input type="text" class="form-control" placeholder="Mention it">
     </div>

    <div class="col-md-4 form-group">
      <label> What the type of employment you want in company ؟ </label>
     <br/>
    <select class="form-control">
      <option> -- Select -- </option>
      <option> Permit </option>
      <option> Part time </option>
      <option> مؤقت(Season) </option>
    </select>

    <br/>
    <label> What is suggest Part ؟ </label>
    <input type="number" class="form-control" placeholder="Enter the suggest part">

     </div>



    </div>

    <div class="row">

     <div class="col-md-4 form-group">
    <label>Do you have any reasons that would prevent you from continuing with the EQUIPATION team in Future ؟</label>
    <textarea class="form-control" placeholder="The answer"></textarea>
    </div>

    <div class="col-md-4 form-group">
    <label> هل لديك إضافة او ملاحظة تريد أن تقدمها لشركة ايكيوبيشن ؟</label>
    <textarea class="form-control" placeholder="الجواب"></textarea>
    </div>

    <div class="col-md-4 form-group">
    <label>هل لديك مانع بالعمل في فروع ايكيوبيشن خارج الخرطوم او السودان ؟</label>
    <textarea class="form-control" placeholder="الجواب"></textarea>
    </div>
      
    </div>

      <div class="row">
        <br/><br/>
        <b> By Submiting the  I acknowledge the correctness of the above-mentioned data and assume 
full responsibility for any error found Also, I have no right to claim this document or the 
attachments after handing them over to EQUIPATION employees The company is committed to 
preserving the privacy of the above information and is not entitled to share it With any external 
party without the knowledge of its owner </b>
        
      <div class="text-center"><button type="submit" name="send" style="background-color:orange;border-radius:20px;padding:10px;"> Send Request </button></div>
        
      </div>

      </form>
      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
    

   
   <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>

  <div id="preloader"></div>
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