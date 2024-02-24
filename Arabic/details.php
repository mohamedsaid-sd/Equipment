<!DOCTYPE html>
<html dir="rtl">
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
		font-size: 20px;
		padding: 10px;
		justify-content: all;
		text-decoration: initial;
		outline-offset: all;
		font-variant-caps: small-caps;
		font-family: serif;
		text-indent: all;
	}

	#lest{
		height: 100%;

	}

	#lest a{
		display: inline;
		/*width: 100%;*/
    width: 200px;
		background-color: #fff;
		padding: 10px;
		margin: 8px;
		font-size: 20px;
		color: #333;
		border-radius: 5px;
    float: right;
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
 	<h3> الرئيسية / الخدمات </h3>
 </div>

  <div class="row">



<?php
if($_GET['id'] == "مقاولة"){
?>
  <div id="content" class="col-lg-12">
  <img src="assets/img/gallery/contract.jpg">
  		
  <h2> خدمات المقاولة </h2>
  <p> نقدم خدمات متخصصة في مقاولات التعدين، حيث نتمتع بخبرة واسعة وموارد متميزة في هذا المجال، كما نقدم حلولًا شاملة ومتكاملة للعملاء في مجال التعدين، بدءًا من التخطيط والتصميم وصولًا إلى التنفيذ وإدارة المشاريع، وتتضمن خدماتنا في مقاولات التعدين إدارة عمليات تشغيل المناجم وتحقيق أعلى مستويات الإنتاجية والكفاءة، بالإضافة إلى الالتزام بأعلى معايير السلامة والجودة، ونسعى جاهدين لتحقيق أهداف عملائنا وتوفير الحلول المبتكرة التي تضمن تحقيق أقصى قيمة مضافة من المشاريع التعدينية.</p>
</div>
<div class="col-lg-2">
</div>
<div class="col-lg-12" style="padding: 0px;margin: 0px;">
<a href="contract_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب  جديد + </b></div></a>
</div>
<?php
} else if($_GET['id'] == "تاجير"){
?>
  <div id="content" class="col-lg-12">
  <img src="assets/img/gallery/gallery-7.jpg">
  		
  <h2> خدمات التاجير </h2>
              <p>  نوفر مجموعة متنوعة من المعدات الثقيلة عالية الجودة والتي تشمل الحفارات، الجرافات، اللوادر، والشاحنات الضخمة، بالإضافة إلى مجموعة واسعة من المعدات الأخرى المستخدمة في عمليات التعدين، ونلتزم بتوفير المعدات بحالة ممتازة وجاهزة للاستخدام في أي وقت، ونضمن تقديم خدمات التأجير بكفاءة عالية وبأسعار تنافسية، كما نوفر خدمات الصيانة والدعم الفني المستمر للمعدات المستأجرة لضمان استمرارية العمليات التعدينية لعملائنا.</p>



</div>
<div class="col-lg-2">
</div>
<div class="col-lg-12" style="padding: 0px;margin: 0px;">
<a href="rental_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب  جديد + </b></div></a>
</div>
<?php
} if($_GET['id'] == "تشغيل"){
?>
  <div id="content" class="col-lg-12">
  <img src="assets/img/gallery/gallery-3.jpg">
  		
  <h2> خدمات التشغيل </h2>

<p>  نوفر خدمات متخصصة ومتميزة في تشغيل وإدارة مجموعة متنوعة من المعدات والآليات الثقيلة المستخدمة في عمليات التعدين، بما في ذلك الحفارات الكبيرة، والشاحنات الضخمة، واللوادر والبلدوزرات وغيرها من المعدات الضرورية لعمليات التعدين، كما نضمن تشغيل هذه المعدات بكفاءة عالية وبأعلى معايير السلامة، ونلتزم بتوفير فرق عمل مدربة ومؤهلة للتعامل مع هذه المعدات بشكل آمن وفعال، كما نهتم بالصيانة الدورية والتشغيل الفعال للمعدات لضمان استمرارية العمليات التعدينية للشركات وتحقيق أقصى استفادة من الموارد المتاحة.</p>



</div>
<div class="col-lg-2">
</div>
<div class="col-lg-12" style="padding: 0px;margin: 0px;">
<a href="run_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب  جديد + </b></div></a>
</div>
<?php
} else if($_GET['id'] == "توظيف"){
?>

<div id="content" class="col-lg-12">
  <img src="assets/img/gallery/emp1.jpg">
  		
  <h2> خدمات التوظيف </h2>

<p> شركة إكوبيشن للإستثمار المحدودة تضمن توفير الموارد البشرية المتخصصة وذات الخبرة العالية في قطاع التعدين، ونولي اهتماماً كبيراً باستيعاب واختيار الكوادر البشرية المؤهلة والمتميزة، التي تتمتع بالخبرة والمعرفة اللازمة في كافة تخصصات مجال التعدين، لتكون لهم المساهمة الكبيرة في تحليل وتقييم احتياجات الشركات بشكل دقيق، ومساعدتهم في إكمال الجوانب الإدارية والفنية والتشغيلية المتخصصة على الوجه الأكمل، لتحقق هذه الشركات أهدافها في الوصول لغاياتها وتطلعاتها، لتكون مساهمتنا معهم بتوفير فريق الموارد البشرية الانسب؛ دعمًا منا لشركاء النجاح في هذا المجال. بالإضافة إلى ذلك، نحرص على توفير بيئة عمل محفزة وملهمة تشجع على التطوير المهني والشخصي للموظفين، وكذلك رعاية مشاريع التدريب والتطوير للكوادر في هذا المجال، مما يساهم في تعزيز الانتماء ورفع مستوى الأداء.</p>

</div>
<div class="col-lg-2">
</div>
<div class="col-lg-12" style="padding: 0px;margin: 0px;">
<a href="job_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب  جديد + </b></div></a>
</div>
<?php
} if($_GET['id'] == "صيانه"){
?>	
<div id="content" class="col-lg-12">
  <img src="assets/img/gallery/gallery-6.jpg">
  		
  <h2> خدمات الصيانه </h2>

<p> تعتبر خدمات الصيانة للمعدات والآليات الثقيلة جزءًا أساسيًا من التزامنا بتقديم خدمات متكاملة وموثوقة في قطاع التعدين، حيث نولي اهتمامًا كبيرًا للحفاظ على سلامة وأداء المعدات بأعلى مستوياتها، من خلال تقديم برامج صيانة شاملة تشمل الصيانة الوقائية والتصحيحية والتنبؤية، ويعمل فريق الصيانة المتخصص لدينا على مدار الساعة لضمان استجابة فورية وحل مشاكل الصيانة بفعالية، مما يضمن استمرارية العمليات التعدينية بدون انقطاع وبأعلى مستويات الأمان والكفاءة، وتعتبر خدمات الصيانة لدينا عاملاً أساسيًا في تحقيق رؤيتنا لتحقيق الاستدامة والنجاح في صناعة التعدين. </p>


</div>
<div class="col-lg-2">
</div>
<div class="col-lg-12" style="padding: 0px;margin: 0px;">
<a href="maintenance_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب  جديد + </b></div></a>
</div>
<?php
} else if($_GET['id'] == "ترحيل"){
?>	



<div id="content" class="col-lg-12">
  <img src="assets/img/gallery/gallery-8.jpg">
  		
  <h2> خدمات الترحيل </h2>

<p> شركة إكوبيشن للاستثمار المحدودة تقدم خدمات النقل والترحيل الشاملة في قطاع التعدين، حيث نوفر حلول النقل المخصصة والمتكاملة لنقل المواد الخام والمعدات الثقيلة والمنتجات التعدينية بكفاءة وسلامة، وتشمل خدماتنا النقل البري، حيث نقدم الشاحنات والمعدات اللازمة لنقل المواد من وإلى مواقع التعدين بشكل فعال وفي الوقت المناسب، كما نقدم خدمات النقل البحري والجوي للشحنات الكبيرة والمعقدة والمستعجلة، مع الحرص على تقديم هذه الخدمات بأعلى معايير السرعة والجودة والأمان، بالإضافة إلى ذلك، نوفر خدمات الترحيل الداخلي المستمر لرفع ونقل وتحريك المعدات الثقيلة والمواد داخل مواقع التعدين وبين المواقع المختلفة، مع الاهتمام بتوفير حلول متكاملة وفعَّالة لتلبية احتياجات عملائنا بشكل كامل وموثوق.</p>


</div>
<div class="col-lg-2">
</div>
<div class="col-lg-12" style="padding: 0px;margin: 0px;">
<a href="deportation_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب  جديد + </b></div></a>
</div>

<?php
} 
?>	



<?php
if($_GET['id'] == "تتبع"){
?>	

<div id="content" class="col-lg-12">
  <img src="assets/img/gallery/tt.jpg">
  		
  <h2>   خدمات أنظمة التتبع  </h2>

<p> نهدف إلى توفير حلول متكاملة لعملائنا، تساهم في تحسين إدارة المعدات والآليات الثقيلة وتعزيز كفاءة العمليات التعدينية، ويتمثل تركيزنا في توفير أنظمة تتبع متقدمة وفعالة، وتثبيتها بدقة عالية، ثم متابعة أدائها وتشغيلها بكفاءة لضمان الاستخدام الأمثل للموارد وتحقيق أقصى قدر من الإنتاجية والسلامة، وتعتبر هذه الخدمات جزءًا أساسيًا من استراتيجيتنا لتحقيق تطلعات عملائنا وتلبية احتياجاتهم بشكل موثوق ومتميز في مجال صناعة التعدين.</p>


</div>
<div class="col-lg-2">
</div>
<div class="col-lg-12" style="padding: 0px;margin: 0px;">
<a href=""><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب  جديد + </b></div></a>
</div>

<?php
} 
?>	



<?php
if($_GET['id'] == "تأسيس"){
?>	

<div id="content" class="col-lg-12">
  <img src="assets/img/gallery/sites.jpg">
  		
  <h2>      خدمات تأسيس مشاريع التعدين   </h2>

<p> شركة إكوبيشن للاستثمار المحدودة متخصصة في تأسيس مشاريع التعدين، حيث تقدم خبرة واسعة وخدمات متكاملة للعملاء في هذا القطاع، وتتمثل رؤيتنا في تقديم حلول مبتكرة ومستدامة لبناء وتشغيل المشاريع التعدينية بكفاءة عالية، مما يضمن الحصول على أقصى قيمة مضافة من الموارد الطبيعية وتحقيق النجاح الاقتصادي والبيئي، كما نلتزم بالجودة والاحترافية في كل مرحلة من مراحل عملية تأسيس المشاريع، ونسعى جاهدين لتحقيق رضا العملاء وتحقيق أهدافهم بشكل موثوق ومستدام.</p>


</div>
<div class="col-lg-2">
</div>
<div class="col-lg-12" style="padding: 0px;margin: 0px;">
<a href=""><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب  جديد + </b></div></a>
</div>

<?php
} 
?>	



   <div id="lest" class="col-lg-12">
    <div style="margin: 10px;">
      
      <a href="details.php?id=مقاولة"> <i class="fas fa-clipboard"></i> خدمات المقاولة </a> 
      <a href="details.php?id=تاجير"> <i class="fas fa-tractor"></i> خدمات التأجير </a> 
      <a href="details.php?id=تشغيل"> <i class="fab fa-teamspeak"></i> خدمات تشغيل المعدات </a> 
      <a href="details.php?id=توظيف"> <i class="fab fa-wpforms"></i> خدمات التوظيف </a> 
      <a href="details.php?id=صيانه"> <i class="fas fa-tools"></i> خدمات الصيانة </a> 
      <a href="details.php?id=ترحيل"> <i class="fas fa-truck-moving"></i> خدمات الترحيل </a> 
      <a href="details.php?id=تتبع"> <i class="fab fa-periscope"></i>  خدمات أنظمة التتبع  </a> 
      <a href="details.php?id=تأسيس"> <i class="fab fa-think-peaks"></i>  تأسيس مشاريع التعدين  </a> 
     
  </div>
    </div>



  </div>
</div>
</section>
</main>


   <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
</body>
</html>