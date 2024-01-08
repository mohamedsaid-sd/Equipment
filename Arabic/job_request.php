<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> طلب التوظيف  </title>
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
 

  $habbit_counter = 2;
  $ref_counter = 2 ;
  $skill_counter = 2 ; 
  $exper_counter = 2 ;

  function add_exper_line(argument) {
    // alert("gooo");
    var exper = document.getElementById("exper_ids");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "إسم المؤسسة");
    input.setAttribute("name" , "exper_name" + $exper_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div1 = document.createElement("div");
    div1.setAttribute("class" , "col-md-2 form-group");
    var label1 = document.createElement("label");
    label1.innerHTML = "من تاريخ";
    var input1 = document.createElement("input");
    input1.setAttribute("class" , "form-control");
    input1.setAttribute("type" , "date");
    input1.setAttribute("name" , "exper_date_from" + $exper_counter);
    div1.appendChild(label1);
    div1.appendChild(input1);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-2 form-group");
    var label2 = document.createElement("label");
    label2.innerHTML = "الي تاريخ";
    var input2 = document.createElement("input");
    input2.setAttribute("class" , "form-control");
    input2.setAttribute("type" , "date");
    input2.setAttribute("name" , "exper_date_to" + $exper_counter);
    div2.appendChild(label2);
    div2.appendChild(input2);

    var div3 = document.createElement("div");
    div3.setAttribute("class" , "col-md-2 form-group");
    var label3 = document.createElement("label");
    var input3 = document.createElement("input");
    input3.setAttribute("class" , "form-control");
    input3.setAttribute("placeholder" , "المسمي الوظيفي");
    input3.setAttribute("name" , "exper_job" + $exper_counter);
    div3.appendChild(label3);
    div3.appendChild(input3);

    var div4 = document.createElement("div");
    div4.setAttribute("class" , "col-md-3 form-group");
    var label4 = document.createElement("label");
    var textarea = document.createElement("textarea");
    textarea.setAttribute("class" , "form-control");
    textarea.setAttribute("placeholder" , "المهام");
    textarea.setAttribute("name" , "exper_tasks" + $exper_counter);
    div4.appendChild(label4);
    div4.appendChild(textarea);

    exper.appendChild(div);
    exper.appendChild(div1);
    exper.appendChild(div2);
    exper.appendChild(div3);
    exper.appendChild(div4);

  }


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


  function add_habbit_line() {
    // alert("go");
    
    var habbits = document.getElementById("habbits");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-4 form-group");

    var label = document.createElement("label");
   
    var input = document.createElement("input");
    input.setAttribute("type" , "text");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "ادخل الهوية");
    input.setAttribute("name" , "h" + $habbit_counter);

    div.appendChild(label);
    div.appendChild(input);

    habbits.appendChild(div);

    $habbit_counter ++ ;
  }

  function add_ref_line() {


  
    var ref = document.getElementById("ref_ids");

    var div = document.createElement("div");
    div.setAttribute("class" , "col-md-3 form-group");
    var label = document.createElement("label");
    var input = document.createElement("input");
    input.setAttribute("class" , "form-control");
    input.setAttribute("placeholder" , "الاسم");
    input.setAttribute("name" , "ref_name" + $ref_counter);
    div.appendChild(label);
    div.appendChild(input);

    var div2 = document.createElement("div");
    div2.setAttribute("class" , "col-md-3 form-group");
    var label2 = document.createElement("label");
    var input2 = document.createElement("input");
    input2.setAttribute("class" , "form-control");
    input2.setAttribute("placeholder" , "الوظيفة");
    input2.setAttribute("name" , "ref_job" + $ref_counter);
    div2.appendChild(label2);
    div2.appendChild(input2);

    var div3 = document.createElement("div");
    div3.setAttribute("class" , "col-md-3 form-group");
    var label3 = document.createElement("label");
    var input3 = document.createElement("input");
    input3.setAttribute("class" , "form-control");
    input3.setAttribute("placeholder" , "الجوال");
    input3.setAttribute("name" , "ref_mobile" + $ref_counter);
    div3.appendChild(label3);
    div3.appendChild(input3);

    var div4 = document.createElement("div");
    div4.setAttribute("class" , "col-md-3 form-group");
    var label4 = document.createElement("label");
    var input4 = document.createElement("input");
    input4.setAttribute("class" , "form-control");
    input4.setAttribute("placeholder" , "الشركة");
    input4.setAttribute("name" , "ref_company" + $ref_counter);
    div4.appendChild(label4);
    div4.appendChild(input4);


    ref.appendChild(div);
    ref.appendChild(div2);
    ref.appendChild(div3);
    ref.appendChild(div4);

    $ref_counter ++ ;

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
    <section class="contact">
      <div class="container">

        <div class="section-title">
        <br/>
          <h2>  طلب التوظيف  </h2>
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
              @$education_level = $_POST['education_level'];
              @$whatsapp_num = $_POST['whatsapp_num'];

              @$restruction = $_POST['restruction'];
              @$info = $_POST['info'];
              @$related = $_POST['related'];
              @$excepted = $_POST['excepted'];
              @$employment_type = $_POST['employment_type'];
              @$complain = $_POST['complain'];



              
              

              

              
              
              // Posst the files 

              // Personal Image 
              @$image = file_get_contents($_FILES['image']['tmp_name']);
              @$image = base64_encode($image);
              
              // Identification ID 
              @$id_attachment = file_get_contents($_FILES['id_attachment']['tmp_name']);
              @$id_attachment = base64_encode($id_attachment);
              @$id_attachment_type = pathinfo($_FILES['id_attachment']['name'] , PATHINFO_EXTENSION);

              // Education Certificate
              @$ed_certificate = file_get_contents($_FILES['ed_certificate']['tmp_name']);
              @$ed_certificate = base64_encode($ed_certificate);
              @$ed_certificate_type = pathinfo($_FILES['ed_certificate']['name'] , PATHINFO_EXTENSION);

              // cv : 
              @$cv = file_get_contents($_FILES['cv']['tmp_name']);
              @$cv_data = base64_encode($cv);

              // Other attachment : 
              @$other_attachment = file_get_contents($_FILES['other_attachment']['tmp_name']);
              @$other_attachment = base64_encode($other_attachment);
              @$other_attachment_type = pathinfo($_FILES['other_attachment']['name'] , PATHINFO_EXTENSION);

              // INSERT EXPEAR ARRAY
              $exper_array = array();
              $exper_counter = 1 ;
              while (isset($_POST['exper_name'.$exper_counter])) {
                  array_push($exper_array, 
                      $_POST['exper_name'.$exper_counter],
                      $_POST['exper_date_from'.$exper_counter],
                      $_POST['exper_date_to'.$exper_counter],
                      $_POST['exper_job'.$exper_counter],
                      $_POST['exper_tasks'.$exper_counter]
                );
                $exper_counter ++ ;
              }

              // PRINT EXPIR ARRAY
              $exper_name = "";
              $exper_date_from = "";
              $exper_date_to = "";
              $exper_job = "";
              $exper_tasks = "";
              $experArray = array();
              foreach ($exper_array as $key => $value) {
                  if($key % 5 == 0)
                   $exper_name = $value;
                  elseif( $key % 5 == 1)
                    $exper_date_from = $value;
                  elseif( $key % 5 == 2)
                    $exper_date_to = $value;
                  elseif( $key % 5 == 3)
                    $exper_job = $value;
                  elseif( $key % 5 == 4){
                    $exper_tasks = $value;
                   //echo "Data".$exper_name."-".$exper_date_from."-".$exper_date_to."-".$exper_job."-".$exper_tasks."<br/>".$key;
                   array_push($experArray,[0,0,[
                    "name" => $exper_name, 
                    "date_from" => $exper_date_from, 
                    "date_to" => $exper_date_to, 
                    "job" => $exper_job, 
                    "tasks" => $exper_tasks, 
                    "attach" => ""]]);
                 }
            
               }

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
                $skillsArray = array();
                foreach ($skill_array as $key => $value) {
                  if($key % 2 == 0)
                    $skill_name = $value ;
                  elseif ($key % 2 == 1) {
                    $skill_value = $value;
                  }
                  if($key % 2 == 1){
                    // echo "Data:".$skill_name." - ".$skill_value."<br/>"; 
                    array_push($skillsArray,[0,0,["name" => $skill_name,"eval" => $skill_value]]);
                  }

                }

                // INSERT HOBBY ARRAY
                $hobbies_array = array();
                $habbit_counter = 1 ; 
                while (isset($_POST['h'.$habbit_counter])) {
                  array_push($hobbies_array, $_POST['h'.$habbit_counter]);
                  $habbit_counter ++ ;
                }

                // PRINT HOBBY ARRAY
                $hobbiesArray = array();
                foreach ($hobbies_array as $value) {
                  // echo " " . $value . " ";
                  array_push($hobbiesArray,[0,0,["name" => $value]]);
                }


                // INSERT REF ARRAY
                $ref_array = array();
                $ref_counter = 1 ;
                while (isset($_POST['ref_name'.$ref_counter])) {
                  array_push($ref_array, 
                      $_POST['ref_name'.$ref_counter] ,
                      $_POST['ref_job'.$ref_counter] ,
                      $_POST['ref_mobile'.$ref_counter],
                      $_POST['ref_company'.$ref_counter]
                  );
                  $ref_counter ++ ;
                }

                // PRINT REF ARRAY
                $ref_name = ""; 
                $ref_job = ""; 
                $ref_mobile = "";
                $ref_company = "";
                $refArray = array();
                foreach ($ref_array as $key => $value) {
                  if($key % 4 == 0){
                    $ref_name = $value ; 
                  }
                  else if($key % 4 == 1){
                    $ref_job = $value ;
                  }
                  else if($key % 4 == 2){
                    $ref_mobile = $value ; 
                  }
                  else if ($key % 4 == 3) {
                    $ref_company = $value ;
                  }
                  if($key % 4 == 3){
                  // echo "Data:".$ref_name." - ".$ref_job." - ".$ref_mobile." - ".$ref_company."<br/>";
                  array_push($refArray, [0,0,[
                  "name" => $ref_name, 
                  "job" => $ref_job, 
                  "mobile" => $ref_mobile, 
                  "company" => $ref_company]]);
                }
              }


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
                  "other_national" => $other_national, 
                  "request_type" => $request_type, 
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
                  "related" => $related, 
                  "employment_type" => $employment_type, 
                  "excepted" => $excepted, 
                  "restruction" => $restruction, 
                  "info" => $info, 
                  "sign" => "", 
                  "recute_date" => "2023-01-01", 
                  "inform" => "Some inform notes.", 
                  "status" => "draft", 
                  "complain" => $complain , 
                  "cv" => $cv_data , 
                  "image" => $image ,
                  "whatsapp_num" => $whatsapp_num ,
                  "education_level" => $education_level ,
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
                  "attachment_ids" => [
                        [
                            0,
                            0,
                            [
                                "name" => "ID attachment",
                                "type" => $id_attachment_type,
                                "file" => $id_attachment//binary file
                                
                            ]
                        ]
                    ],
                  "certification_ids" => [
                        [
                            0,
                            0,
                            [
                                "name" => "Education Certificate",
                                "type" => $ed_certificate_type,
                                "file" => $ed_certificate//binary file
                                
                            ]
                        ]
                  ],
                  "other_attachment_ids" => [
                        [
                            0,
                            0,
                            [
                                "name" => "Other attachment",
                                "type" => $other_attachment_type,
                                "file" => $other_attachment //binary file
                                
                            ]
                        ]
                    ],
                  "exper_ids" => $experArray, 
                  "skill_ids" => $skillsArray ,
                  "ref_ids" => $refArray, 
                  "hobbies_ids" => $hobbiesArray 
               ] 
            ] 
         ] 
      ] 
]; 

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
           
           //  echo $response;
                   // convert response to array
               $array = json_decode(  $response , true );
               // loop the array to fetch item
               foreach ($array as $key => $value) {
                 echo $key."".$value;
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
      <form method="POST" action="job_request.php" enctype="multipart/form-data">

      <div class="row">

      <h3> المعلومات الشخصية  </h3>  
      

      <div class="col-md-4 form-group">
        <br/>
        <label> نوع الطلب  </label>
        <select name="request_type" class="form-control">
          <option selected disabled> -- اختار -- </option>
          <option value="employment"> توظيف </option>
          <option value="training"> تدريب </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
        <label> الصورة الشخصية </label>
        <input type="file" name="image" class="form-control">
         <label> <b style="color: #a12;"> نوع الصورة يجب ان يكون JPG , JPEG  </b> </label>
      </div>

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="full_name" class="form-control" placeholder="الإسم الرباعي (عربي)">
      </div>

      <div class="col-md-4 form-group">
        <label> تاريخ الميلاد  </label>
        <input type="date" name="birthdate" class="form-control" placeholder=" ">
      </div>

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="place" class="form-control" placeholder="مكان الميلاد">
      </div> 

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="home" class="form-control" placeholder="موطن الإقامة الاصلى">
      </div> 

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="house" class="form-control" placeholder="موطن الإقامة الحالى">
      </div> 

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
        <label>   </label>
        <input type="text" name="national" class="form-control" placeholder="الجنسية">
      </div>  

       <div class="col-md-4 form-group">
        <label> نوع الجنسية  </label>
        <select name="type_national" class="form-control">
          <option selected disabled> -- اختار -- </option>
          <option value="original"> اصلية </option>
          <option value="naturalize"> توطين </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
        <label> هل لديك جنسية اخرى  </label>
        <select name="other_national" class="form-control">
          <option selected disabled> -- اختار -- </option>
          <option value="yes"> نعم </option>
          <option value="no"> لا </option>
        </select>
      </div> 
        
      </div>

      <div class="row">

      <div class="col-md-4 form-group">
        <label> الحاله الإجتماعية  </label>
        <select name="social_state" class="form-control">
          <option selected disabled> -- اختار -- </option>
          <option value="single"> اعزب </option>
          <option value="married"> متزوج </option>
          <option value="cohabitant"> مرتبط </option>
          <option value="divorced"> مطلق </option>
          <option value="widower"> ارمل </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
      <label> هل لديك ابناء  </label>
        <select name="children" class="form-control">
          <option selected disabled> -- اختار -- </option>
          <option value="yes"> نعم </option>
          <option value="no"> لا </option>
        </select>
        <input type="text" name="boys"  class="form-control" placeholder="الابناء"/>
        <input type="text" name="girl" class="form-control" placeholder="البنات"/>
      </div> 
  

      </div>
      <div class="row">

      <h3> معلومات التواصل </h3>

       <div class="col-md-4 form-group">
        <label> رقم الهاتف  </label>
        <input type="number" name="mobile" class="form-control" placeholder="ex : 249912322447">
      </div>

      <div class="col-md-4 form-group">
      <label> رقم هاتف آخر </label>
      <input type="number" name="phone" class="form-control" placeholder="ex : 249912322447">
      </div>

      <div class="col-md-4 form-group">
      <label> رقم الواتساب </label>
      <input type="number" name="whatsapp_num" class="form-control" placeholder="ex : 249912322447">
      </div>
        
      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label> البريد الإلكتروني  </label>
      <input type="email" name="email" class="form-control" placeholder="ex : example@gmail.com">
      </div>

      <div class="col-md-4 form-group">
      <label> حساب الفيسبوك  </label>
      <input type="text" name="facebook" class="form-control" placeholder="https://www.facebook.com/facebook.user">
      </div>

      <div class="col-md-4 form-group">
      <label> حساب الإنستقرام  </label>
      <input type="text" name="instagram" class="form-control" placeholder="https://www.instagram.com/instagram.user">
      </div>

      <div class="col-md-4 form-group">
      <label> حساب التويتر  </label>
      <input type="text" name="twiter" class="form-control" placeholder="https://www.twitter.com/twitter.user">
      </div>

      <div class="col-md-4 form-group">
      <label> الموقع شخصى  </label>
      <input type="text"  name="web" class="form-control" placeholder="ex: www.website.com">
      </div>        
      </div>


      <div class="row">

      <h3> معلومات السكن </h3>

      <h4> السكن الاصلي </h4>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o1" class="form-control" placeholder="الولاية"/>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o2" class="form-control" placeholder="المحلية"/>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o3" class="form-control" placeholder="المربع">
      </div>

      </div>


      <div class="row">

      <div class="col-md-4 form-group">
        <br/>
        <label> نوع السكن   </label>
         <select name="house_type" class="form-control">
          <option selected disabled> -- اختار -- </option>
          <option value="owned"> ملك </option>
          <option value="rental_request"> ايجار </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="c8" class="form-control" placeholder="وصف تفصيلي"></textarea>
      </div>        
      </div>


       <div class="row">


      <h4> السكن الحالى </h4>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c1" class="form-control" placeholder="الولاية">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c2" class="form-control" placeholder="المحلية">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c3" class="form-control" placeholder="المربع">
      </div>

      </div>


      <div class="row">

      <div class="col-md-4 form-group">
        <br/>
        <label> نوع السكن  </label>
        <select name="house_type" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option value="owned"> Owned </option>
          <option value="rental_request"> Rental </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="c8" class="form-control" placeholder="وصف تفصيلى"></textarea>
      </div>
        
      </div>


      <div class="row">
      <h3> إثبات الشخصية </h3>

      <div class="col-md-4 form-group">
      نوع إثبات الشخصية
      <select name="id_type" class="form-control">
      <option selected disabled> -- اختار -- </option>
      <option value="id_card"> بطاقة قومية </option>
      <option value="car_lince"> رخصة قيادة </option>
      <option value="passport"> جواز سفر </option>
      <option value="other"> اخرى </option>
      </select>
      <input type="text" class="form-control" placeholder="ادخل نوع اثبات الهوية">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="issue_place" class="form-control" placeholder="مكان الإصدار">
      </div>

      <div class="col-md-4 form-group">
      <label> تاريخ الإصدار  </label>
      <input type="date" name="issue_date" class="form-control">
      </div>
        
      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label> تاريخ الانتهاء  </label>
      <input type="date" name="expirty_date" class="form-control">
      </div>

      <div class="col-md-4 form-group">
      <label> هل قمت بانهاء الخدمة الوطنية ؟ </label>
      <select name="service" class="form-control">
      <option selected disabled> -- إختار -- </option>
      <option value="yes"> نعم </option>
      <option value="no"> لا </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="other" class="form-control" placeholder="ملاحظات"></textarea>
      </div>

      <div class="col-md-4 form-group">
      <label> إرفاق اثبات الشخصية  </label>
      <input type="file" name="id_attachment" class="form-control"/>
      <label> <b style="color: #a12;"> ارفاق صورة JPG , JPEG , PNG  </b> </label>
      </div> 

      </div>

      <br/>
      <div class="row">
      <h3> الشهادات التعليميمة </h3>
      </div>

  
      <div class="row">

      <div class="col-md-4 form-group">
      <label> مستوي التعليم  </label>
      <select name="education_level" class="form-control">
      <option> -- إختار -- </option>
      <option> دون الثانوي </option>
      <option> الثانوى </option> 
      <option> دبلوم </option> 
      <option> بكلريوس </option> 
      <option> ماجستير </option> 
      <option> دكتوراة </option> 
      <option> شهادة فنية </option> 
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="study_school" class="form-control" placeholder="إسم المؤسسة">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="university_address" class="form-control" placeholder="مكان المؤسسة">
      </div>

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="study_field" class="form-control" placeholder="التخصص">
      </div>
     

      <div class="col-md-4 form-group">
      <label> الدرجة العلمية  </label>
      <select name="certificate" class="form-control">
      <option selected disabled> -- اختار -- </option>
      <option value="graduate"> تخريج </option>
      <option value="bachelor"> بكلريوس </option>
      <option value="master"> ماجستير </option>
      <option value="doctor"> دكتوراة </option>
      <option value="other"> اخرى </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label> ارفاق الشهادة  </label>
      <input type="file" name="ed_certificate" class="form-control"/>
      <label> <b style="color: #a12">  الرجاء ارفاق الشهادة بصيغة PDF </b> </label>
      </div>
        



  
      </div>

      <div class="row">
      
 <!--      <h3> الكورسات التدريبية </h3>
      <div id="courses_ids" class="row">
        <div class="col-md-2 form-group">
        <label></label>
        <input type="text" class="form-control" placeholder="إسم الكورس"/>
        </div>
        <div class="col-md-2 form-group">
        <label> من تاريخ </label>
        <input type="date" class="form-control"/>
        </div>
        <div class="col-md-2 form-group">
        <label> الى تاريخ </label>
        <input type="date" class="form-control"/>
        </div>
        <div class="col-md-2 form-group">
        <label></label>
        <input type="text" class="form-control" placeholder="اسم المعهد"/>
        </div>
        <div class="col-md-2 form-group">
        <label></label>
        <input type="text" class="form-control" placeholder="اسم المدرب"/>
        </div>
        <div class="col-md-2 form-group">
        <label></label>
        <input type="text" class="form-control" placeholder="التقدير"/>
        </div>
      </div><br/>
      <span style="width: 100px; padding: 3px; margin: 5px;" class="btn btn-success" onclick="add_courses_line();"> أضافة + </span> <font color="red"> الكورسات غير موجود في ال api بعد </font>   -->

      <h3> الخبرات الوظيفية </h3>
      
      <div id="exper_ids" class="row">
        <div class="col-md-3 form-group">
        <label></label>
        <input type="text" name="exper_name1" class="form-control" placeholder="إسم المؤسسة"/>
        </div>
        <div class="col-md-2 form-group">
        <label> من تاريخ </label>
        <input type="date" name="exper_date_from1" class="form-control"/>
        </div>
        <div class="col-md-2 form-group">
        <label> الى تاريخ </label>
        <input type="date" name="exper_date_to1" class="form-control"/>
        </div>
        <div class="col-md-2 form-group">
        <label></label>
        <input type="text" name="exper_job1" class="form-control" placeholder="المسمى الوظيفي"/>
        </div>
        <div class="col-md-3 form-group">
        <label></label>
        <textarea class="form-control" name="exper_tasks1" placeholder="المهام"></textarea>
        </div>
      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_exper_line();"> أضافة خبرة + </span>

      <h3> المهارات </h3>
      
      <div id="skill_ids" class="row">

      <div class="col-md-3 form-group">
      <label></label>
      <input type="text" name="skill1" class="form-control" placeholder="المهارة"/>
      </div>

      <div class="col-md-3 form-group">
      <label> التقييم </label>
      <select name="skill_val1" class="form-control">
        <option selected disabled> -- Select -- </option>
        <option value="Good"> جيدة  </option>
        <option value="Excellent"> ممتازة  </option>
      </select>
      </div>


      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_skill_line();"> أضافة مهارة + </span>
      <h3> الهوايات </h3>

      <div id="habbits" class="row">
      
      <div class="col-md-4 form-group">
      <label></label>
      <input type="text" name="h1" class="form-control" placeholder="ادخل الهواية">
      </div>

      </div><br/>
      <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_habbit_line();"> أضافة هواية + </span>

     
      <h3> اشخاص يمكن الرجوع لهم </h3> 

      <div id="ref_ids" class="row">
          <div class="col-md-3 form-group">
              <label></label>
              <input type="text" name="ref_name1" class="form-control" placeholder="الاسم"/>
          </div>

          <div class="col-md-3 form-group">
              <label></label>
              <input type="text" name="ref_job1" class="form-control" placeholder="الوظيفة"/>
          </div>

          <div class="col-md-3 form-group">
              <label></label>
              <input type="text" name="ref_mobile1" class="form-control" placeholder="الجوال"/>
          </div>

          <div class="col-md-3 form-group">
              <label></label>
              <input type="text" name="ref_company1" class="form-control" placeholder="الشركة"/>
          </div>
      </div>
      <br/>
       <span style="width: 150px; padding: 3px; margin: 5px;" class="btn btn-primary" onclick="add_ref_line();"> أضافة شخص + </span>

      </div>

      <div class="row">
      <h3> اسئلة </h3>
      <div class="col-md-4 form-group">
      <label> كيف تعرفت على شركة إيكيوبيشن ؟ </label>
     <br/>
      <select  class="form-control" name="know" id="exampleFormControlSelect2">

          <option value="media"> الفيسبوك </option>
                <option value="social"> وسائل التواصل الاجتماعي </option>
                <option value="tv"> التلفزيون </option>
                <option value="friend"> عن طريق صديق </option>
                <option value="ads"> عن طريق الاعلانات  </option>
                <option value="other">  اخري  </option>
              </select>
     </div>

      <div class="col-md-4 form-group">
      <label> هل لديك شريك او صديق يعمل بالشركة ؟ </label>
     <br/>
    <select class="form-control"   name="related">
      <option> -- إختار -- </option>
      <option value="yes" > نعم </option>
      <option value="no"> لا </option>
    </select>
    <input type="text" class="form-control" placeholder="اذكره">
     </div>

    <div class="col-md-4 form-group">
      <label> ما نوع التوظيف الذى ترغب بالإلتحاق به ضمن فريق إيكيوبيشن ؟ </label>
     <br/>
    <select class="form-control" name="employment_type">
      <option> -- إختار -- </option>
      <option  value="full" > دائم </option>
      <option  value="part" > بارت تايم </option>
      <option  value="temp" > مؤقت(موسم) </option>
      <option  value="training" > تدريب</option>

    </select>

    <br/>
    <label> ما الراتب المتوقع ؟ </label>
    <input type="number"  name="excepted" class="form-control" placeholder="ادخل الراتب المتوقع">

     </div>



    </div>

    <div class="row">

     <div class="col-md-4 form-group">
    <label>ما هى المشاكل او الهواجس التي ستمنعك من الإستمرار ضمن فريق إيكيوبيشن ؟</label>
    <textarea class="form-control" name="complain" placeholder="الجواب"></textarea>
    </div>

    <div class="col-md-4 form-group">
    <label> هل لديك إضافة او ملاحظة تريد أن تقدمها لشركة ايكيوبيشن ؟</label>
    <textarea class="form-control"  name="info" placeholder="الجواب"></textarea>
    </div>

    <div class="col-md-4 form-group">
    <label>هل لديك مانع بالعمل في فروع ايكيوبيشن خارج الخرطوم او السودان ؟</label>
    <textarea class="form-control" name="restruction"  placeholder="الجواب"></textarea>
    </div>
      
    </div>

    <div class="row">

       <div class="col-md-4 form-group">
          <label> السيرة الذاتية </label>
              <input type="file" name="cv" class="form-control" placeholder="الجوال"/>
          <label> <b style="color: #a12;"> إرفاق السيرة الذاتية إن وجدت  </b> </label>
        </div>

        <div class="col-md-4 form-group">
              <label> مرفقات اخرى </label>
              <input type="file" name="other_attachment" class="form-control"/>
              <label> <b style="color: #a12;"> إضافة مستندات اخرى بصيغة PDF  </b> </label>
        </div>

    </div>
    <br/><br/>

      <div class="row">
        <br/><br/>
        <b> بتقديمي لهذا الطلب انا اقر بصحة البيانات المذكورة اعلاه وأتحمل كامل المسؤولية القانونية والمعتبرة عن الخطأ الموجود فيه </b>

      </div>

      <div class="row">
        
      <div class="text-center"><button type="submit" name="send" style="background-color:orange;border-radius:20px;padding:10px;"> إرسال الطلب </button></div>
        
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