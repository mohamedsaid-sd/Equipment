  <?php 
  session_start();
  ?>
  <!DOCTYPE html>
  <html dir="rtl">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> سلة التسووق </title>
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
	table{
		border : solid 2px orange;
	}
	tr{
		border : solid 1px black;
	}
</style>
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
        <br/>
        <div class="section-title">
          <h2> سلة التسووق  </h2> </div>
      </div>

   <div class="container">
   <div class="row mt-5">

   	 <div class="my-3">
     <div class="error-message"></div>
     <div class="sent-message">
     	<?php
      

     	if(isset($_POST['confirm'])){

     		$name = $_POST['name'];
     		$phone = $_POST['phone'];
     		$email = $_POST['email'];
        

    		//PRINT FROM CART
        $cartArray = array();
     		
            $cart_counter = 1 ;
            $id_cart = 0;
            $title_cart = 0;
            $price_cart = 0;
            if(isset($_SESSION['cart'])){

        
     		foreach ($_SESSION['cart'] as $key => $value) {
     			if($key % 3 == 0)
  				{$id_cart = $value ;}
  				elseif ($key % 3 == 1) 
  				{$title_cart = $value ;}
  				elseif ($key % 3 == 2) 
  				{
            $price_cart = $value ;


         array_push($cartArray,
             [0,0,[
              "product_id" => ""+$id_cart ,
              "product_uom_qty" => 1,
              "price_unit" => ""+$price_cart]]
               );

  				 }

          
     		} //end for each
        
     		}

     		$jayParsedAry = [
  			"params" => [
        	"args" => [
           		"vals_list" => [
           		  "state" => "draft",
            	 	"customer_name"  => $name,
            	 	"phone" => $phone,
            	 	"email" => $email,
            	 	"company_id" => 1,
            	 	"partner_id" => 1,
           		 	"order_line" => $cartArray,
                "message_follower_ids" => [],
                "message_ids" => [],
          ]]]]; 

        $done=json_encode($jayParsedAry);
//echo $done;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://equipation-equipation-odoo-com-stage-10590858.dev.odoo.com/apiV2/sale.order/create',
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
 // echo $response;
        // convert response to array
    $array = json_decode(  $response , true );
    // loop the array to fetch item
    foreach ($array as $key => $value) {
      // echo $key."".$value;
        if($key == "msg" )
          if($value == "Success"){
                // success add form alert ...
                echo '<meta http-equiv="refresh" content="1;url=store.php?suc=0"';
                session_unset();
			    			session_destroy();
          }
            else
            {
              echo "<div class='alert alert-danger'>
                        <span class='icon'> <i class='fa fa-cancel'></i></span>
                         <b> خطأ في عملية الارسال </b> </div>";
            }
    }
  // echo gettype($x);
  // echo "R".$x;
}
curl_close($curl);
     	} // end send request
if(isset($_SESSION['cart'])){
     	?>
     </div>
  <form action="cart.php" method="post" role="form">
  <center>
  	<div style="width: 90%;" class="row">

  	<div class="form-group col-md-6">
  	<label></label>
  	<input type="text" name="name" class="form-control" placeholder="اسم المستخدم" required/>
  	</div>
 
  	<div class="form-group col-md-6">
  	<label></label>
  	<input type="phone" name="phone" class="form-control" placeholder="رقم الهاتف" required/>
  	</div>

  	</div>
  	<div style="width: 90%;" class="row">

  	<div class="form-group col-md-6">
  	<label></label>
  	<input type="email" name="email" class="form-control" placeholder="البريد الإلكترونى" required/>
  	</div>

  	</div>
  	</div>
  	<br/>
  	<table border="1" width="90%">
  	<thead>
  		<tr style="background-color: orange">
  			<th style="text-align: center;color: #000;"> الخدمة </th>
  			<th style="text-align: center;color: #000;"> السعر </th>
  		</tr>
  	</thead>
  	<tbody>
  	<?php
  	$title = "";
  	$price = "";
  	$sum = 0 ;
  
  	foreach (@$_SESSION['cart'] as $key => $value) {
  	if($key % 3 == 1)
  	{	
  		$title = $value ;
  		//echo "T:".$value;
  	}
  	elseif ($key % 3 == 0) 
    {
     
    }
    elseif ($key % 3 == 2) 
  	{
  		$price = $value ;
  		$sum += $price;
  		//echo "P:".$value;
  	
  	?>
  	<tr>
  		<td style="text-align: center;"> <?php echo $title ; ?> </td>
  		<td style="text-align: center;"> <?php echo $price ; ?> </td>
  	</tr>
  	<?php
 	}elseif ($key % 3 == 1) {
  		//Do nothing 
  	}
  	} // end for each
  	?>
  	<td style="text-align: center;"> <b style="color: #000;"> المجموع </b> </td>
  	<td style="text-align: center;color: #000;"> <?php echo $sum ." SDG " ; ?> </td>
  	</tbody>
  	</table>
  	<br/><br/>
  	<input type="submit" name="confirm" class="btn btn-success" value="إكمال الطلب">

  </center>	
  </form><br/>
  <a href="store.php?exit=0" class="btn btn-danger"> إفراغ السلة </a>
  <?php
	}// end session check
	else{
		echo "<center> <h2> السلة فارغة </h2> </center>";
	}
?>
  </div>
  </div>
  </section>

  </main>  
  </body>
  </html>