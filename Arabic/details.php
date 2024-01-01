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
 	<h3> الرئيسية / الخدمات / <?php echo $_GET['id']; ?> </h3>
 </div>

  <div class="row">

   <div id="lest" class="col-lg-2">
   	<div style="margin: 10px;">
  		
  		<a href="details.php?id=مقاولة"> <i class="fas fa-clipboard"></i> خدمات المقاولة </a> 
  		<a href="details.php?id=تاجير"> <i class="fas fa-tractor"></i> خدمات تاجير </a> 
  		<a href="details.php?id=تشغيل"> <i class="fab fa-teamspeak"></i> خدمات تشغيل </a> 
  		<a href="#"> <i class="fab fa-wpforms"></i> خدمات توظيف </a> 
  		<a href="#"> <i class="fas fa-tools"></i> خدمات صيانه </a> 
  		<a href="#"> <i class="fas fa-truck-moving"></i> خدمات ترحيل </a> 
	</div>
  	</div>

<?php
if($_GET['id'] == "مقاولة"){
?>
  <div id="content" class="col-lg-10">
  <img src="assets/img/gallery/gallery-1.jpg">
  		
  <h2> خدمات المقاولة </h2>
  <p> تحتاج مشاريع المقاوالت دوما إلى نظام إداري متكامل يعتمد على األتمتة في معظم مراحله ويراعي في ذلك كل أحجام ومستويات 
التغيرات والمطلوبات بتوفير اآلليات األنسب باألحجام المناسبة في يجب أن يكون المقاول مستعدًا دائمًا لتلبية وأهداف المشروعات. و
التوقيت المناسب، وضمان حداثة أساطيل اآلليات وجودتها مع فريق هندسي مؤهل مستعد على مدار الساعة لضمان استمرارية 
العمل دون توقف ودون إهدار لألوقات الضائعة. ويجب أن يكون إسم المقاول إسم موثوق ويعتمد عليه في تنفيذ المهام الصعبة 
والمستحيلة، مع مراعاة الجودة في كل ذلك وهو العامل الفارق في هذه المنافسة. 
EQUIPATION هي الخيار األفضل لتلبية تلك المتطلبات وتحقيق أهداف الشركات بكفاءة وجودة وأمان مع سعر منافس، نحن 
سنكون في إنتظارك لخوض ذلك التحدي معك </p>
</div>
<?php
} else if($_GET['id'] == "تاجير"){
?>
  <div id="content" class="col-lg-10">
  <img src="assets/img/gallery/gallery-2.jpg">
  		
  <h2> خدمات التاجير </h2>
              <p>هي خدمة تقدمها EQUIPATION وتوفر فيها الآليات والمعدات والأدوات المساعدة، بجميع أنواعها وأحجامها ومهامها، لفترة زمنية محدودة، لتؤدي الغرض منها بكفاءة عالية وطريقة آمنة وبإنتاجية لا مثيل لها، وفريق عمل إحترافي في كافة المراحل.
كما أننا نقدم لكم خلاصة تجربتنا الثرة لنساعدك في إختيار الآلية الأنسب لمشروعك قبل البدء لتحقق أعلى معدلات إنتاج بأقل تكلفة ممكنة، ونشاركك النصائح العملية أثناء العملية الإنتاجية لتعزيز وزيادة الإنتاجية و تقويم وتصحيح الأخطاء التي تؤثر على الإنتاجية والتي تزيد من كلفة العملية الإنتاجية عليك، ونتميز بأننا نقدم لك تقرير مفصل بعد نهاية المشروع يساعدك في قياس تجربتك والإستفادة منها في مشاريعك القادمة.
ويمكن أن يستفيد من هذه الخدمة بشكل أساسي كل من: شركات التعدين والتنقيب وشركات الطرق والجسور وشركات المقاولات العامة والشركات الزراعية وصغار المقاولين وحتى الأفراد، ويشرف على صيانة أسطولنا فريق هندسي مؤهل ومجهز وفق المعايير العالمية مستعد على مدار الساعة وتحديه الأكبر أن يصل ل Zero أعطال خلال فترة تعاقدك معنا.
ومن خلف هذا المجهودات تقف إلى جانبك إدارة أختيرت بعناية لتحوز على رضاك أنت </p>



</div>
<div class="col-lg-2">
</div>
<div class="col-lg-10" style="padding: 0px;margin: 0px;">
<a href="rental_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب تاجير جديد + </b></div></a>
</div>
<?php
} if($_GET['id'] == "تشغيل"){
?>
  <div id="content" class="col-lg-10">
  <img src="assets/img/gallery/gallery-3.jpg">
  		
  <h2> خدمات التشغيل </h2>

<p> هي خدمة ابتكرتها EQUIPATION لتلبي حاجة السوق السوداني بعد أن صنعت إسم يثق به في هذا القطاع، وذلك بإستحداث نموذج لإدارة الأصول نيابة عنك يلبي حاجتك كعميل ويتناسب مع جميع العملاء ويستوعب كافة تطلعاتهم ويعالج جميع مشاكل التشغيل للشركات وأصحاب الأعمال والمستثمرين وملاك الآليات، ونعلم جيدا أنه لا يمكن أن يتحقق ذلك الرضا إلا بمواجهة عدة تحديات فعرفنا التحدي وقبلنا به ..
وكان أصعب وأهم تحدي في مصفوفة التحديات هو كيفية إختيار المشغلين الأكفاء والمتمرسين وجذبهم للعمل مع EQUIPATION فصنعنا نموذج للتوظيف بمعايير لا يتم التنازل عنها، وفق شروط مرضية للطرفين تحقق الرضا الوظيفي وتؤدي في نفس الوقت لنتائج سريعة ومذهلة في العملية الإنتاجية على الأرض.
بالنسبة لتحدي التسويق وإختيار العقود الأنسب وذات العائد الأعلى فلم تواجه EQUIPATION فيها أي مشكلة نظرا لإنتشار رقعة عملها في كافة بقاع السودان وتنوع عقودها التي تناسب كافة المستفيدين، وكفاءتها العالية في العمل والإنتاج التي لا مثيل لها، كما أن إسم EQUIPATION إرتبط بالإنتاجية العالية بأقل التكاليف الممكنة وبجودة يطمح لها أي عميل.


ونظرا لأن EQUIPATION تعرف أن النجاح 

أما بالنسبة لمشكلة الصيانة فقدت إهتمت EQUIPATION بهذا الموضوع وجعلته من أولى الأولويات لديها وإبتكرت نموذج متابعة دقيق يشرف عليه فريق صيانة مؤهل وتم إختياره بعناية شديدة وهو رهن الإشارة ومستعد على مدار الساعة لتلبية أي بلاغ وتحديهم الأكبر تحقيق Zero أعطال منطلقين من قاعدة الوقاية خير من العلاج، أما مشكلة الترحيل فقد صنعت EQUIPATION شراكات متينة مع فرسان الطريق ووضعت معايير محددة لإختيار الناقل المناسب والآمن والأسرع والأقرب والأقل سعرا.
يقف من خلف هذه العجلة فريق إداري يتابع كافة هذه المراحل لحظة بلحظة عبر أنظمة تتيع حديثة والتي يتم تركيبها بشكل أساسي في كل الأصول عبر شركات عالمية متخصصة في هذا المجال والتي تساعد في التحكم في الأوقات المهدرة ومعالجة الإشكالات بصورة لحظية.
وكل تلك الجهود صممت من أجلك أنت لكي نحوز على رضاك، منطلقين من مبدأ الشفافية المطلقة والمرونة المناسبة والتطور المستمر ومواكبة الواقع ...</p>



</div>
<div class="col-lg-2">
</div>
<div class="col-lg-10" style="padding: 0px;margin: 0px;">
<a href="run_request.php"><div class="btn btn-success" style="width: 100%;padding: 10px;border:none;"><b>  تقديم طلب تشغيل جديد + </b></div></a>
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