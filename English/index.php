<?php 
  session_start();
  ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Equipation Compoany</title>
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

        <i class="bi bi-envelope"></i> <a href="mailto:info@equipation.sd">info@equipation.sd</a>
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logo.jpg" style="width: 150px;"></a></h1>

 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about"> About </a></li>
          <li><a class="nav-link scrollto" href="#departments"> Departments </a></li>
          <li><a class="nav-link scrollto" href="#services">  Our Fields </a></li>
          <li><a class="nav-link scrollto" href="#parenter"> Parenters </a></li>
          <li><a class="nav-link scrollto" href="#cleints"> Clients </a></li>
          <li><a class="nav-link scrollto" href="store.php"> store </a></li>
          <li class="dropdown"><a href="#"><span> Add Request </span>  <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="rental_request.php"> Rental Request </a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="Job_request.php"> Job Request </a></li>
              <li><a href="run_request.php"> Operation Request </a></li>
              <li><a href="maintenance_request.php"> Maintenance Request  </a></li>
              <li><a href="deportation_request.php"> Deportation Request </a></li>
              
    
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="notofication_request.php"> Repost or complaints </a></li>
          <li><a class="nav-link scrollto" href="#contact"> Contact us </a></li>
           <?php
           if(isset($_SESSION['cart']))
          {
           ?>

          <a href="cart.php" style='border:none;'>
          <div class="icon" style='padding: 10px;color:#123;'> <span style='background-color:red;color:#fff;border-radius:50px;padding:6px;margin:5px;'><b> <?php

          echo sizeof($_SESSION['cart']) / 3 ;

          ?> </b></span> <i style="width:100px;" class="fa fa-shopping-cart"></i></div>
          </a>
          <?php
          }
          else
          {
          ?>
          <a href="#" style='border:none;'>
          <div class="icon" style='padding: 10px;color:#123;'> <span style='background-color:red;color:#fff;border-radius:50px;padding:6px;margin:5px;'><b> <?php

          echo '0' ;

          ?> </b></span> <i style="width:100px;" class="fa fa-shopping-cart"></i></div>
          </a>
          <?php
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

 <!--      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

         
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" style="background-color: #00000077;padding: 10px;color: #fff;">
      <h1 style="color: #fff;"> Wellcome to Equipation Company </h1>
      <h2 style="color: #eee;"> Equation works on implementing roads, fences, and armed water drains projects in states only, with a team of competing engineers and technicians, and the specifications of bicycles and fences, with high quality.</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3> Why choose Equipation </h3>
              <p>
                It is a service company that works to provide the latest and best machinery and heavy equipment for production projects in various fields. It began work in 2015 AD, using sophisticated and sophisticated administrative systems, and through efficient staff, and based on a large database, and in partnership with our clients who are in charge of productive projects in the country.
              </p>
              <div class="text-center">
                <!-- <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-notepad"></i>
                    <h4> Equipation Activities   </h4>
                    <p>   Equation Company has many activities in most states of Sudan, including extracting minerals, excavations, drilling wells, and searching for different types of ore.  </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-bar-chart"></i>
                    <h4> Equipation projects  </h4>
                    <p> Equation Company has many commercial, service and national projects, including paving the way for roads, making bridges, digging wells for remote villages, and building buildings.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-support"></i>
                    <h4> Equipation Team </h4>
                    <p> Equation Company has a skilled technical team trained to work and solve the most complex problems and deal with clients and customers with high skill and professionalism.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3> Who we are </h3>
            <p> Equipation Company is a service providing Company  </p>

            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
              <h4 class="title"><a href="">Our mission</a></h4>
              <p class="description"> Production is the essence of construction it must be supported and served </p>
            </div>

            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
              <h4 class="title"><a href="">Our vision </a></h4>
              <p class="description"> To be the first company in th production field is sudan by 2023 </p>
            </div>

            <div class="icon-box">
             <!--  <div class="icon"><i class="bx bx-atom"></i></div> -->
              <h4 class="title"><a href="">Our values</a></h4>
              <p class="description">  The Commitment and High speed response with the highest quality and the Continuous improvement   </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts  احصائيات Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>  Departments  </h2>
          <p> Equipation Company includes many departments</p>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
            <div class="icon-box">
            <div class="icon"><i class="fas fa-clipboard"></i></div>
            <br/>
            <br/>
            <h4><a href="">  Contracting </a></h4>
              <p> Contracting projects always require a comprehensive management system that relies on automation 
in most of its stages, taking into consideration the sizes, levels, and goals of the projects. The 
contractor must always be prepared to meet changes and requirements by providing the most 
suitable equipment in the appropriate sizes at the right time, ensuring the modernity and quality of 
the equipment, with a qualified engineering team ready 24/7 to ensure the continuity of work 
without interruption and without wasting time. The contractor's name must be reliable and relied 
upon to execute difficult and impossible tasks while considering quality, which is the differentiating 
factor in this competition.
EQUIPATION is the best choice to meet these requirements and achieve the goals of companies 
efficiently, with quality and safety rules, at a competitive price. We will be waiting for you to take on 
this challenge with you.   </p>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
            <div class="icon"><i class="fas fa-tractor"></i></div>
              <br/>
              <br/>
              <h4><a href="">  Rental </a></h4>
              <p> EQUIPATION provides equipment rental services, offering a wide range of machinery, tools, and equipment to its customers, where and when they need it. The company works to provide high-quality equipment in a safe and efficient manner, with unparalleled productivity. This is achieved through a highly professional team that is always there to assist you throughout the work stages.
The company also leverages its extensive experience to help you select the most suitable equipment for the project during the planning stage, and provides practical advice during the production process to enhance productivity and address any issues that may affect it. Moreover, our company provides detailed reports upon completion of projects to extract lessons learned for future improvement.
If you are working in the mining sector, road and bridge construction industry, general contracting, or even agricultural field, contractor then EQUIPATION is your best choice. Our fleet maintenance is overseen by a qualified and equipped engineering team according to international standards, ready 24/7 to achieve zero breakdowns during your contract period with us. </p>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
            <div class="icon"><i class="fab fa-teamspeak"></i></div>
              <br/>
              <br/>
              <h4><a href=""> Operations  </a></h4>
              <p> It is a service created by EQUIPATION to meet the needs of the Sudanese market after establishing a trusted name in this sector. This is achieved by introducing a model for asset management on behalf of the client, meeting the needs of all customers, accommodating their aspirations, and addressing all operational problems for companies, business owners, investors, and equipment owners. We are well aware that satisfaction cannot be achieved without facing several challenges, and we have accepted and embraced the challenge.

The most difficult and important challenge in the array of challenges was how to select competent and experienced operators and attract them to work with EQUIPATION. Therefore, we created a recruitment model with non-negotiable standards and satisfactory conditions for both parties, ensuring job satisfaction and delivering quick and amazing results in the production process on the ground.

As for the challenge of marketing and selecting the most suitable and highest-yielding contracts, EQUIPATION did not face any problems due to its widespread work across all regions of Sudan and its diverse contracts that suit all beneficiaries. Its high efficiency in work and production, unparalleled quality, and association with high productivity at the lowest possible cost have made the name EQUIPATION synonymous with quality that any client aspires to.

Regarding the issue of maintenance, EQUIPATION has given it the utmost attention and made it one of its top priorities. It has created a precise monitoring model overseen by a qualified maintenance team carefully selected and ready 24/7 to respond to any request. Their biggest challenge is to achieve zero breakdowns, based on the principle that prevention is better than cure. As for the transportation issue, EQUIPATION has built strong partnerships with reliable transportation providers and established specific criteria for selecting the most suitable, safe, fastest, closest, and cost-effective carrier.

Behind all these efforts stands a management team that monitors all these stages moment by moment through modern tracking systems, which are primarily installed in all assets through specialized global companies in this field. These systems help control wasted time and address issues instantly. </p>
             </div>
          </div>

          <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
            <div class="icon"><i class="fab fa-wpforms"></i></div>
              <br/>
              <br/>
              <h4><a href="">  Recruitment </a></h4>
              <p> We, at EQUIPATION, believe that Sudan is rich in natural resources and human capital. We also believe that the youth are the future of the world. Therefore, EQUIPATION has placed special emphasis on the youth and employees, striving to provide a suitable environment to satisfy their ambitions, face challenges, and accomplish tasks through guiding their energies using sound scientific methods and the latest findings in human resource management, while taking into consideration the environment and the psychological makeup of the Sudanese personality.

In this section, we aim to facilitate communication between human resource professionals seeking the best employees in the job market. It also provides a space for exchanging experiences, discussing job-related issues and their solutions, as well as opportunities for training offered by some companies to graduates and ambitious individuals who are striving to achieve their dreams. There is also a space for consultations overseen by highly qualified consultants in this field.

We have taken on a great challenge, which is to make EQUIPATION the dream of every graduate to start their career path from here, helping them to clearly define their future path and be prepared to face all challenges and obstacles by equipping them with all the job-related and personal skills that will help them to pursue their path with determination until they achieve all their dreams."  </p>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
            <div class="icon"><i class="fas fa-tools"></i></div>
              <br/>
              <br/>
              <h4><a href="">Maintenance  </a></h4>
              <p> EQUIPATION recognizes that maintenance is the lifeblood of this sector and has given it the utmost attention. Its success prolongs the life of projects and helps them achieve their goals, while neglecting them accelerates their deterioration, ultimately leading to their premature or eventual demise without achieving their objectives. We found that most of the problems faced by companies, owners, and producers revolve around this point primarily due to lack of specialization, inadequate follow-up, and poor treatment, leading to disastrous results in the end.

Therefore, EQUIPATION has opened this section with the primary motto of prompt response and quality service, while promoting the concept of prevention before treatment. We have attempted to bring together all specialists and practitioners scattered throughout our country for mutual benefit among the members of this sector.

We are pleased to bridge the gap between service providers from companies, business owners, and even individuals and entrepreneurs who are primarily involved in maintenance, inspection, and all related activities. These services are mainly beneficial to construction companies, production companies, equipment owners, and operators across all regions of Sudan.

Our goal is to facilitate your access to each other, enhance the concept of competition in improving services, exchange experiences, and save time in finding the best, fastest, and closest options.

So, welcome among us. May we and you be aided in achieving our goals and objectives from this section.  </p>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
            <div class="icon"><i class="fas fa-truck-moving"></i></div>
              <br/>
              <br/>
              <h4><a href=""> transportation   </a></h4>
              <p> EQUIPATION values the issue of time at every step, recognizing that time is the differential value in the final results. Due to the importance of time, it has become the primary factor in measuring the quality of service. All its operations are linked to time, making it a crucial element in assessing the quality of service.

Because transportation is a major concern for all companies, owners, and producers, EQUIPATION has not overlooked this aspect. It has benefited from its partnership with the "Knights of the Road," who played a significant role in achieving success and completing the full picture.

To ensure that your equipment arrives at the perfect time, you must consider the compatibility of the carrier with the size and weight of the machinery being transported, as well as the carrier's technical readiness, proximity, knowledge of areas and roads, and reliability.

Therefore, we have opened this space to bring together all owners of trailers, flatbeds, and cranes in one place, making it easier for you to choose the most suitable, closest, and most cost-effective option. We aim to enhance the value of time for service providers and their clients, and we will facilitate tracking the transportation process with our partners moment by moment.   </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

      <!-- ======= Departments Section ======= -->
      <section id="services" class="services">
        <div class="container">
  
          <div class="section-title">
            <h2> Our field of work </h2>
            <p>
             Equipation has worked in all states of sudan
              .</p>
          </div>
  
          <div class="row gy-4">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1"> Mineral extraction projects   </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2"> Stone extraction projects </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3"> Agricultural projects </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4"> Roads and bridges projects </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5"> construction projects  </a>
                </li>
  
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-6"> National projects </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3> Mineral extraction projects </h3><hr/>
                      <p class="fst-italic"> Equpation works in gold extraction projects in various regions of Sudan  </p>
                      <p>
                        <ul>
                          <li> Gold mining projects through open mines </li>
                          <li> Gold mining projects, that use water and pneumatic sieves</li>
                          <li> Gold mining projects, that use mobile machines </li>
                          <li> Mining projects in mill complexes </li>
                          <li> Mining projects in Alkarrta projects </li>
                          <li> Mining projects for chrome </li>
                        </ul>
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <br/>
                      <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid" style="width:100%;height: 90%;">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3> Stone extraction projects </h3><hr/>
                      <p class="fst-italic"> Equipation provides the necessary mechanisms to operate the quarries . The Company operates in :  </p>
                      <p>
                        <b> Cement quarrying projects : </b>
                            Cement is made of a mixture of limestone 75% and clay 25% . Iron ore or sand can be added if the clay contains a weak percrntage of iron oxide or silicon oxide . Then it is crushed into granules in the form of pebbles .<br/>
                        <b> Marble quarring projects  : </b>
                            White marble is produced from ultra-pure limestone or dolomite (with a low silicate content). Unique veins of many types of colored marbles are usually caused by different mineral impurities such as clay , silt , sand, or iron oxides
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid" style="width:100%;height: 90%;">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3> Agricultural projects </h3><hr/>
                      <p> Heavy machinery plays a vital role in preparing and leveling agricultural lands .
                        Equipation actively contributes to number of agricultural projects by providing hight-performance machinery and a specialized technical team <br/>
                        Equipation performs the following operations
                      </p>
                      <p>
                        <ul>
                          <li> Digging and cleaning irrigation canals </li>
                          <li> Execution and settlement of internal streets on farms  </li>
                          <li> Cleaning farms and removing trees and weeds </li>
                          <li> Settlement and preparation of agricultural lands </li>
                          <li> Executing farm fencing projects  </li>
                        </ul>
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid" style="width:100%;height: 90%;">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3> Roads and bridges projects  </h3><hr/>
                      <p> Equipation works on implementing road , bridge and water drainge projects armed with the lates machinery and equipment <br> </p>
                      <p> and team of skilled engineers and technicians to implement projects complied to international standards</p>
                    </div>
                    <br/>
                    <br/>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid" style="width:100%;height:100%;">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3> construction projects  </h3><hr/>
                      <p> In line with the construction boom in the country , Equipation has developed it's services in the field of construction and provided a wide range of services that serve construction projects, including  :  </p>
                      <p>
                        <ul>
                          <li> Digging the necessary infrastructure for constructing buildings  </li>
                          <li> Removing old buildings and moving debris </li>
                          <li> Bricks making projects , of various types and sizes  </li>
                          <li> Packing and transporting building materials </li>
                          </ul>
                        </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid" style="width:100%;height: 90%;">
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="tab-6">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3> National projects  </h3><hr/>
                      <p> Based on our responsibilities towards sudan and the sudanese , Equipation has implemented a number of national projects such as :  </p>
                      <p>
                        <ul>
                          <li> Opening waterways at fall </li>
                          <li> Opening and cleaning streets </li>
                          <li> Implementation of sanitation and water canals projects  </li>
                        
                          </ul>
                        </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid" style="width:100%;height: 90%;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Departments Section -->

    <!-- ========== Parenter Section ============-->
    <section id="parenter" class="parenter"> 
      <div class="container">
        <div class="section-title">
          <h2> Our partners  </h2>
          <p>
            <?php include 'fetch_image_ourpartners.php'; ?>
          <!-- <img src="assets/img/parenter.png" alt="" style="width: 100%;"> -->
        </p>
        </div>

       

      </div>
    </section>


    <section id="cleints" class="cleints"> 
      <div class="container">
        <div class="section-title">
          <h2> Our customers  </h2>
          <p>
            <?php include 'fetch_image_ourcustomer.php'; ?>
            <!-- <img src="assets/img/clients.png" alt="" style="width: 100%;"> -->
          </p>
        </div>
      </div>
    </section>


    <!-- ======= Doctors Section ======= -->
    <!-- <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section -->><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>End Frequently Asked Questions Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2> The Gallery </h2>
          <p> An aspect of the work provided by the company to its customers in all the states of Sudan </p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2> Contact us   </h2>
          <p> We are pleased in Equpation company to communicate with our customers at all times , we are always happy to respond to your messages , suggestions and opinions </p>
        </div>
      </div>

  

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location :</h4>
                <p> sudan , Khartoum   </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email :</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone" style="direction: rtl;"></i>
                <h4>Phone Number :</h4>
                <p> 002496445</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder=" Name " required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="email" id="email" placeholder=" Email  " required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder=" Subject " required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="The message " required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit"> Send </button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3> Equpation </h3>
            <p>
              
              <strong>Phone Number :</strong> 249912322447<br>
              <strong>Email:</strong> info@equipation.sd<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4> Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero"> Home </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about"> Who we are </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#departments"> Departments </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services"> Our field of work </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#cleints"> Our Clients</a></li>
            </ul>
          </div>



          <!-- <li><a class="nav-link scrollto" href="#doctors">المنتجات</a></li> -->




          
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Service </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="store.php"> Products  </a></li>
           
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
              <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logo.jpg" style="width: 280px;"></a></h1>

          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy;  <strong><span> Equpation Company  </span>2023</strong>. All rights reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
           Design By <a href="#">SmartDev</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

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