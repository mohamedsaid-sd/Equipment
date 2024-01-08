<!DOCTYPE html>
<html dir="ltr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> <?php echo $_GET['id']; ?> </title>
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
</head>
<style type="text/css">
	#content{
		background-color: white;
		box-shadow: 2px 2px 2px gray;
		margin-top: 5px;
	}

	#content img {
		width: 100%;
		height: 500px;
	}

	#content h2{
		color: #000;
		padding: 10px;
		margin-top: 20px;
		margin-bottom: 10px;
	}

	#content p{
		font-size: 25px;
		padding: 10px;
		justify-content: all;
		text-decoration: initial;
		outline-offset: all;
		font-variant-caps: small-caps;
		font-family: serif;
		text-indent: all;
	}

	#lest{
		height: 300px;

	}

	#lest a{
		display: block;
		width: 100%;
		background-color: #fff;
		padding: 10px;
		margin: 8px;
		font-size: 20px;
		color: #333;
		border-radius: 5px;
	}

  #lest a:hover{
      color: orange;
  }


</style>
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

  <?php include 'mainlist.php';  ?>
 <br/><br/><br/>
 <main id="main">
 <section class="contact" style="background-color: #eee;">
 <div class="container">

 <div class="row">
 	
 </div>

  <div class="row">

   <div id="lest" class="col-lg-3">
   	<div style="margin: 10px;">
  		
  		<a href="details.php?id=contracting"> <i class="fas fa-clipboard"></i> Contracting  </a> 
  		<a href="details.php?id=rental"> <i class="fas fa-tractor"></i>  Rental </a> 
  		<a href="details.php?id=operations"> <i class="fab fa-teamspeak"></i>  Operations </a> 
  		<a href="details.php?id=recruitment"> <i class="fab fa-wpforms"></i>  Recruitment </a> 
  		<a href="details.php?id=maintenance"> <i class="fas fa-tools"></i>  Maintenance </a> 
  		<a href="details.php?id=transportation"> <i class="fas fa-truck-moving"></i> Transportation  </a> 
	</div>
  	</div>

<?php
if($_GET['id'] == "contracting"){
?>
  <div id="content" class="col-lg-9">
  <img src="assets/img/gallery/gallery-1.jpg">
  		
  <h2> Contracting  </h2>
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
<div class="col-lg-3">
</div>
<div class="col-lg-9" style="padding: 0px;margin: 0px;">
<a href="contract_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>     Send a service request + </b></div></a>
</div>
<?php
} else if($_GET['id'] == "rental"){
?>
  <div id="content" class="col-lg-9">
  <img src="assets/img/gallery/gallery-7.jpg">
  		
  <h2>  Rental </h2>
  <p> EQUIPATION provides equipment rental services, offering a wide range of machinery, tools, and equipment to its customers, where and when they need it. The company works to provide high-quality equipment in a safe and efficient manner, with unparalleled productivity. This is achieved through a highly professional team that is always there to assist you throughout the work stages.
The company also leverages its extensive experience to help you select the most suitable equipment for the project during the planning stage, and provides practical advice during the production process to enhance productivity and address any issues that may affect it. Moreover, our company provides detailed reports upon completion of projects to extract lessons learned for future improvement.
If you are working in the mining sector, road and bridge construction industry, general contracting, or even agricultural field, contractor then EQUIPATION is your best choice. Our fleet maintenance is overseen by a qualified and equipped engineering team according to international standards, ready 24/7 to achieve zero breakdowns during your contract period with us. </p>
          


</div>
<div class="col-lg-3">
</div>
<div class="col-lg-9" style="padding: 0px;margin: 0px;">
<a href="rental_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>     Send a service request + </b></div></a>
</div>
<?php
} if($_GET['id'] == "operations"){
?>
  <div id="content" class="col-lg-9">
  <img src="assets/img/gallery/gallery-3.jpg">
  		
  <h2>  Operations </h2>

  <p> It is a service created by EQUIPATION to meet the needs of the Sudanese market after establishing a trusted name in this sector. This is achieved by introducing a model for asset management on behalf of the client, meeting the needs of all customers, accommodating their aspirations, and addressing all operational problems for companies, business owners, investors, and equipment owners. We are well aware that satisfaction cannot be achieved without facing several challenges, and we have accepted and embraced the challenge.

The most difficult and important challenge in the array of challenges was how to select competent and experienced operators and attract them to work with EQUIPATION. Therefore, we created a recruitment model with non-negotiable standards and satisfactory conditions for both parties, ensuring job satisfaction and delivering quick and amazing results in the production process on the ground.

As for the challenge of marketing and selecting the most suitable and highest-yielding contracts, EQUIPATION did not face any problems due to its widespread work across all regions of Sudan and its diverse contracts that suit all beneficiaries. Its high efficiency in work and production, unparalleled quality, and association with high productivity at the lowest possible cost have made the name EQUIPATION synonymous with quality that any client aspires to.

Regarding the issue of maintenance, EQUIPATION has given it the utmost attention and made it one of its top priorities. It has created a precise monitoring model overseen by a qualified maintenance team carefully selected and ready 24/7 to respond to any request. Their biggest challenge is to achieve zero breakdowns, based on the principle that prevention is better than cure. As for the transportation issue, EQUIPATION has built strong partnerships with reliable transportation providers and established specific criteria for selecting the most suitable, safe, fastest, closest, and cost-effective carrier.

Behind all these efforts stands a management team that monitors all these stages moment by moment through modern tracking systems, which are primarily installed in all assets through specialized global companies in this field. These systems help control wasted time and address issues instantly. </p>
         

</div>
<div class="col-lg-3">
</div>
<div class="col-lg-9" style="padding: 0px;margin: 0px;">
<a href="run_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>     Send a service request + </b></div></a>
</div>
<?php
} else if($_GET['id'] == "recruitment"){
?>

<div id="content" class="col-lg-9">
  <img src="assets/img/gallery/gallery-5.jpg">
  		
  <h2>  Recruitment </h2>

  <p> We, at EQUIPATION, believe that Sudan is rich in natural resources and human capital. We also believe that the youth are the future of the world. Therefore, EQUIPATION has placed special emphasis on the youth and employees, striving to provide a suitable environment to satisfy their ambitions, face challenges, and accomplish tasks through guiding their energies using sound scientific methods and the latest findings in human resource management, while taking into consideration the environment and the psychological makeup of the Sudanese personality.

In this section, we aim to facilitate communication between human resource professionals seeking the best employees in the job market. It also provides a space for exchanging experiences, discussing job-related issues and their solutions, as well as opportunities for training offered by some companies to graduates and ambitious individuals who are striving to achieve their dreams. There is also a space for consultations overseen by highly qualified consultants in this field.

We have taken on a great challenge, which is to make EQUIPATION the dream of every graduate to start their career path from here, helping them to clearly define their future path and be prepared to face all challenges and obstacles by equipping them with all the job-related and personal skills that will help them to pursue their path with determination until they achieve all their dreams."  </p>
      

</div>
<div class="col-lg-3">
</div>
<div class="col-lg-9" style="padding: 0px;margin: 0px;">
<a href="job_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>     Send a service request + </b></div></a>
</div>
<?php
} if($_GET['id'] == "maintenance"){
?>	
<div id="content" class="col-lg-9">
  <img src="assets/img/gallery/gallery-6.jpg">
  		
  <h2>  Maintenance </h2>

  <p> EQUIPATION recognizes that maintenance is the lifeblood of this sector and has given it the utmost attention. Its success prolongs the life of projects and helps them achieve their goals, while neglecting them accelerates their deterioration, ultimately leading to their premature or eventual demise without achieving their objectives. We found that most of the problems faced by companies, owners, and producers revolve around this point primarily due to lack of specialization, inadequate follow-up, and poor treatment, leading to disastrous results in the end.

Therefore, EQUIPATION has opened this section with the primary motto of prompt response and quality service, while promoting the concept of prevention before treatment. We have attempted to bring together all specialists and practitioners scattered throughout our country for mutual benefit among the members of this sector.

We are pleased to bridge the gap between service providers from companies, business owners, and even individuals and entrepreneurs who are primarily involved in maintenance, inspection, and all related activities. These services are mainly beneficial to construction companies, production companies, equipment owners, and operators across all regions of Sudan.

Our goal is to facilitate your access to each other, enhance the concept of competition in improving services, exchange experiences, and save time in finding the best, fastest, and closest options.

So, welcome among us. May we and you be aided in achieving our goals and objectives from this section.  </p>
           

</div>
<div class="col-lg-3">
</div>
<div class="col-lg-9" style="padding: 0px;margin: 0px;">
<a href="maintenance_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>     Send a service request + </b></div></a>
</div>
<?php
} else if($_GET['id'] == "transportation"){
?>	



<div id="content" class="col-lg-9">
  <img src="assets/img/gallery/gallery-8.jpg">
  		
  <h2>  Transportation </h2>

  <p> EQUIPATION values the issue of time at every step, recognizing that time is the differential value in the final results. Due to the importance of time, it has become the primary factor in measuring the quality of service. All its operations are linked to time, making it a crucial element in assessing the quality of service.

Because transportation is a major concern for all companies, owners, and producers, EQUIPATION has not overlooked this aspect. It has benefited from its partnership with the "Knights of the Road," who played a significant role in achieving success and completing the full picture.

To ensure that your equipment arrives at the perfect time, you must consider the compatibility of the carrier with the size and weight of the machinery being transported, as well as the carrier's technical readiness, proximity, knowledge of areas and roads, and reliability.

Therefore, we have opened this space to bring together all owners of trailers, flatbeds, and cranes in one place, making it easier for you to choose the most suitable, closest, and most cost-effective option. We aim to enhance the value of time for service providers and their clients, and we will facilitate tracking the transportation process with our partners moment by moment.   </p>
      

</div>
<div class="col-lg-3">
</div>
<div class="col-lg-9" style="padding: 0px;margin: 0px;">
<a href="deportation_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>     Send a service request + </b></div></a>
</div>

<?php
} 
?>	













  </div>
</div>
</section>
</main>


   <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
</body>
</html>