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

              @$children = $_POST['children'];
              @$mobile = $_POST['mobile'];
              @$phone = $_POST['phone'];
              @$email = $_POST['email'];
              @$facebook = $_POST['facebook'];
              @$twiter = $_POST['twiter'];
              @$instagram = $_POST['instagram'];
              @$web = $_POST['web'];
              @$o1=$_POST['o1'];@$o2=$_POST['o2'];@$o3=$_POST['o3'];@$o4=$_POST['o4'];
              @$o5=$_POST['o5'];@$o6=$_POST['o6'];@$o7=$_POST['o7'];@$o8=$_POST['o8'];
              @$street = $o1.$o2.$o3.$o4.$o5.$o6.$o7.$o8;
              @$c1=$_POST['c1'];@$c2=$_POST['c2'];@$c3=$_POST['c3'];@$c4=$_POST['c4'];
              @$c5=$_POST['c5'];@$c6=$_POST['c6'];@$c7=$_POST['c7'];@$c8=$_POST['c8'];
              @$street2 = $c1.$c2.$c3.$c4.$c5.$c6.$c7.$c8;

              @$id_type = $_POST['id_type'];
              @$issue_place = $_POST['issue_place'];
              @$issue_date = $_POST['issue_date'];
              @$expirty_date = $_POST['expirty_date'];
              @$service = $_POST['service'];
              @$other = $_POST['other'];

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
                  "other_national" => $other_national, 
                  "request_type" => "employment", 
                  "social_state" => $social_state, 
                  "children" => $children, 
                  "boys" => 0, 
                  "girl" => 0, 
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
                  "house_type" => "owned", 
                  "note" => "Some personal note.", 
                  "id_type" => $id_type, 
                  "issue_place" => $issue_place, 
                  "issue_date" => $issue_date, 
                  "expirty_date" => $expirty_date, 
                  "service" => $service, 
                  "other" => $other, 
                  "certificate" => "bachelor", 
                  "study_field" => "Johnology", 
                  "study_school" => "John University", 
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
                  "skill_ids" => [
                                       [
                                          0, 
                                          0, 
                                          [
                                             "name" => "Python Programming", 
                                             "eval" => "Advanced" 
                                          ] 
                                       ], 
                                       [
                                                0, 
                                                0, 
                                                [
                                                   "name" => "Communication", 
                                                   "eval" => "Expert" 
                                                ] 
                                             ] 
                                    ], 
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

  
              // print the post value 

              echo "Data:".$full_name."-".$birthdate."-".$place."-".$home."-".$house."-".$national."-".$type_national."-".$other_national."-".$social_state."-".$children."-".$mobile."-".$phone."-".$email."-".$facebook."-".$twiter."-".$instagram."-".$web."-".$street."-".$street2."-".$id_type."-".$issue_place."-".$issue_date."-".$expirty_date."-".$service."-".$other;

            }

            ?>        
          </div>
        </div>

      <div class="container">
      <form action="job_request.php" method="POST">

      <div class="row">

      <h3> Personal Information  </h3>  

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
          <option> Origin </option>
          <option> Naturalize </option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
        <br/>
        <label> Do you have another Nationality  </label><br/>
        <select name="other_national" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option> Yes </option>
          <option> No </option>
        </select>
      </div> 
        
      </div>

      <div class="row">

      <div class="col-md-4 form-group">
        <br/>
        <label> Social Status  </label>
        <select name="social_state" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option> Single </option>
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
          <option> No </option>
        </select>
        <input type="text" name="" class="form-control" placeholder="Boys">
        <input type="text" name="" class="form-control" placeholder="Girls">
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

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o4" class="form-control" placeholder="Avenue">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o5" class="form-control" placeholder="House No.">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="o6" class="form-control" placeholder="Clear Milestone">
      </div>
        
      </div>

      <div class="row">

        <div class="col-md-4 form-group">
        <br/>
        <label> Type of Accomm  </label>
        <select name="o7" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option>Owner</option>
          <option>Rental</option>
          <option>Other</option>
        </select>
      </div> 

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="o8" class="form-control" placeholder="Detailed Description"></textarea>
      </div>
        
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
      <label>   </label>
      <input type="text" name="c4" class="form-control" placeholder="Avenue">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c5" class="form-control" placeholder="Mobile No">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" name="c6" class="form-control" placeholder="Clear Milestone">
      </div>
        
      </div>

      <div class="row">

      <div class="col-md-4 form-group">
        <br/>
        <label> Type of Accomm  </label>
         <select name="c7" class="form-control">
          <option selected disabled> -- Select -- </option>
          <option>Owner</option>
          <option>Rental</option>
          <option>Other</option>
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
      <option> Passport </option>
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
      <option> Yes </option>
      <option> No </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea name="other" class="form-control" placeholder="Notes"></textarea>
      </div>
        
      </div>

      <div class="row">
      <h3> Education Certificates </h3>

      <h4>Pre Univercity </h4>
      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="School Name">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="School Place">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="number" class="form-control" placeholder="Graduate Year">
      </div>

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="The Grade">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea class="form-control" placeholder="Notes"></textarea>
      </div>
        
      </div>

      <div class="row">

      <h4> Secondary School </h4>
      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="School Name">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="School place">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="The Level">
      </div>

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="number" class="form-control" placeholder="Graduate Year">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="The Degree">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea class="form-control" placeholder="Notes"></textarea>
      </div>
        
      </div>

      <div class="row">

      <h4> The University </h4>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="University name">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="University Place">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="The College">
      </div>

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="number" class="form-control" placeholder="Graduate Year">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="The Degree">
      </div>

      <div class="col-md-4 form-group">
      <label> The Education Degree  </label>
      <select class="form-control">
      <option> -- Select -- </option>
      <option> دبلوم </option>
      <option> بكلريوس </option>
      <option> Other </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea class="form-control" placeholder="Note"></textarea>
      </div>
        
      </div>

      <div class="row">
      <br/>
      <h4> The after University </h4>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="University Name">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="University Place">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="The College">
      </div>

      </div>

      <div class="row">

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="number" class="form-control" placeholder="Graduate Year">
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <input type="text" class="form-control" placeholder="The Degree">
      </div>

      <div class="col-md-4 form-group">
      <label> The Education Degree  </label>
      <select class="form-control">
      <option> -- Select -- </option>
      <option> دبلوم عالى </option>
      <option> ماجستير </option>
      <option> دكتوراة </option>
      <option> Other </option>
      </select>
      </div>

      <div class="col-md-4 form-group">
      <label>   </label>
      <textarea class="form-control" placeholder="Notes"></textarea>
      </div>
        
      </div>

      <div class="row">
      <h3> Courses </h3>
      <h3> Training </h3>
      <h3> Experience </h3>
      <h3> Skills </h3>
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