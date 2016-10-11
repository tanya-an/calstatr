<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="CalState Moving & Storage and its professional movers have a combined total of 10 years in the moving industry.">
	<title>CalState Moving & Storage - Local & Long Distance Moving</title>
	<link rel="shortcut icon" href="images/favicon.png" type="image/png">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style_link.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

      
</head>
<body>
	<!-- ====================================================
	header section -->
	<header class="top-header" style="background:#222222;
	position: fixed; width: 100%;">
		<div class="container">
			<div class="row">
				<!-- nav starts here -->
				<div class="col-md-12" style="padding-left:0;">	
					<nav class="navbar navbar-default">
						<div class="container-fluid nav-bar" style="margin-top: 25px;">
							<div class="navbar-header">
                                <button id="menu_slide"  aria-controls="navbar" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button" data-target="#MyNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            <a href="index.html">
						    <img src="images/logo-1.png" alt="" class="img-responsive logo" style="left: 509px;
								height: 71.44px;
								width: 152px;
								margin-bottom: 0px;
								margin-top: -13px;"></a>
							</div>

							<div class="collapse navbar-collapse" id="MyNavbar">
						   
							    <ul class="nav navbar-nav navbar-left">
							    	<li><a href="./#home" style="margin-right: 44.8px;">HOME</a></li>
							        <li><a href="./#about_us" style="margin-right: 44.76px;">ABOUT US</a></li>
							        <li><a href="./#advantages" style="margin-right:60px;letter-spacing: 0.05px;">ADVANTAGES</a></li>  
							    </ul>
							    <ul class="nav navbar-nav navbar-right">
							    	<li><a href="./#prices" style="margin-left:60px;">PRICES</a></li>
							        <li><a href="./#reviews"">REVIEWS</a></li>
							        <li><a href="./quote.html" style="color:#2e8ccf">GET A QUOTE</a></li>
							    </ul>
						    	<div>
							   		<img src="images/line-a.png" style="margin-top:16px;">
							    	<img src="images/line-b.png" style="margin-top:16px; float:right;">
						    
						   		</div>
						   	</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header><!-- end of header section -->


	<section class="calculator" >
		<div class="container">
			<div class="row" style="margin-top: 196px;">
				<h3>CUBIC FEET CALCULATOR</h3>
				<h5>CalState Moving & Storage and its professional movers have a </br> combined total of 10 years in the moving industry.</h5>
				
			</div>
			<div class="row">



				<div class="col-md-6 col-md-offset-3 table-calc">
					<table style='width:100%;' class='tbl'>
						<tr style='font-weight:bold'>
							<td>Article</td>
							<td>Quantity</td>
							<td>Cubic Feet</td>
							<td>Qty x CFt</td>
						</tr>
			








						<tr>
							<td>A/C, window</td>
							<td>
								<input type='text' id='qty_1>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(1, 15)' onMouseUp='calc_string(1,15)'>
							</td>
							<td>15</td>
							<td><span id='qty_cft_1'>0</span></td>
						</tr>
						<tr>
							<td>Armoire</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>40</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Bed, single</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>40</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Bed, double</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>60</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Bed, King</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>70</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Bench</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>5</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Bike/Wagon/Toys</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>10</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Bookcase/Cabinet</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>20</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Buffet/Creddenza</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>30</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Cabinet</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>15</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Chair, straight</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>5</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Chair, with arms</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>10</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Chair, overstuffed</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>25</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Chest/Trunk</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>12</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>China Hutch, 2pc</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>50</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
						<tr>
							<td>Crib</td>
							<td>
								<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
								onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
							</td>
							<td>20</td>
							<td><span id='qty_cft_<?=$i?>'>0</span></td>
						</tr>
					</table>
				</div>
			</div>
	</section><!-- end of details section -->



<script>
function calc_string(i, cft){
	var qty = $("#qty_"+i).val();
	var cft_total = 0;
	if (!isNaN(qty) && qty!="")
		qty = parseInt(qty);
	else
		qty = 0;
		
	qty_cft = qty * cft;
	$("#qty_cft_"+i).html(qty_cft);
	
	var cft_total = 0;
	var num_articles = $("#num_articles").val();
	for (i=1; i<=num_articles; i++){
		qty_cft = parseInt($("#qty_cft_"+i).html());
		cft_total += qty_cft;
	}
	$("#cft_total").html(cft_total);
	$("#weight_total").html(cft_total*7);
	
}
</script>
<style>
.tbl{
	border-collapse: collapse;
}
.tbl td{
	border:1px solid #CCC;
	padding:3px;
}
</style>

<section id="content-article" class='general_width'>
    <div class="row">
        <div class="col-sm-12"><h1 class="uppercase color-theme">Long Distance Within The State Of <?=$STATE_NAME?></h1></div>
    </div>
   
       
	<!--Cubic Feet Calculator-->
	<div class="row">
        <div class="col-sm-12"><h1 class="uppercase color-theme">Cubic Feet Calculator</h1></div>
    </div>
	<div class="row">
        <div class="col-sm-12 col-md-7">
			<?
			$articles = array("A/C, window"=>15, 
								"Armoire"=>40, 
								"Bed, single"=>40, "Bed, double/queen"=>60, "Bed, King"=>70,
								"Bench"=>5,
								"Bike/Wagon/Toys"=>10,
								"Bookcase/Cabinet"=>20,
								"Buffet/Creddenza"=>30,
								"Cabinet"=>15,
								"Chair, straight"=>5, "Chair, with arms"=>10, "Chair, overstuffed"=>25,
								"Chest/Trunk"=>12,
								"China Hutch, 2pc"=>50,
								"Crib"=>20,
								"Desk"=>30,
								"Dresser, single"=>30, "Dresser, double"=>40, "Dresser, triple"=>50,
								"Exersize Equipment"=>20,
								"Grandfather Clock"=>20,
								"Ladder/Tools"=>2,
								"Lamp"=>3,
								"Lawn Mower"=>15,
								"Mirror"=>3,
								"Microwave"=>5,
								"Ottoman"=>5,
								"Piano, upright"=>60, "Piano, grand"=>70,
								"Picture / Large"=>3,
								"Refrigerator/Freezer"=>60,
								"Rug"=>10,
								"Serving Cart"=>15,
								"Slide/Lrg Toy"=>20,
								"Sofa. sect, per sect"=>25, "Sofa, 2 cushion"=>35, "Sofa, 3 cushion"=>50,
								"Stove/Dishwasher"=>30,
								"Swings, outdoor"=>60,
								"Table, end/coffee"=>10, "Table, kitchen"=>20, "Table, dining"=>30,
								"Television"=>25, "Television Stand"=>10,
								"Wall Unit, per pc"=>35,
								"Washer / Dryer"=>30,
								"Waredrobes"=>15,
								"Boxes, client small"=>4, "Boxes, client large"=>6
								);
			?>
			<table style='width:100%;' class='tbl'>
				<tr style='font-weight:bold'>
					<td>Article</td>
					<td style='text-align:center !important'>Quantity</td>
					<td style='text-align:center !important'>Cubic Feet</td>
					<td style='text-align:center !important'>Qty x CFt</td>
				</tr>
				<?
				$i = 0;
				foreach ($articles as $key=>$val){
					$i++;
					?>
					<tr style='background-color:<?=($i % 2 == 1) ? "#FFF" : "#F9F9F9"?>'>
						<td><?=$key?></td>
						<td style='text-align:center !important'>
							<input type='text' id='qty_<?=$i?>' style='width:60px; height:27px !important; padding:5px; margin:0px auto;' maxlength=3
							onKeyUp='calc_string(<?=$i?>, <?=$val?>)' onMouseUp='calc_string(<?=$i?>, <?=$val?>)'>
						</td>
						<td style='text-align:center !important'><?=$val?></td>
						<td style='text-align:center !important'><span id='qty_cft_<?=$i?>'>0</span></td>
					</tr>
					<?
				}
				?>
				<input type='hidden' id='num_articles' value='<?=$i?>'>
				
				<tr style='font-weight:bold'>
					<td>&nbsp;</td>
					<td colspan=2>Cubic Feet Total</td>
					<td style='text-align:center !important'><span id='cft_total'>0</span></td>
				</tr>
				<tr style='font-weight:bold'>
					<td>&nbsp;</td>
					<td colspan=2>Total Weight</td>
					<td style='text-align:center !important'><span id='weight_total'>0</span></td>
				</tr>
			</table>
			<br><br>
			
			<span id='my_info'>
				<input type="text" name="name" class="required" placeholder="Your name" value="" id='name'><br>
				<input type="text" name="email" class="" placeholder="Email (optional)" value="" id='email'><br>
				<input type="text" name="phone" class="required" placeholder="Phone *" value="" id='phone'><br>
				<input id="datepicker" type="text" name="moving_date" class="required" placeholder="Moving date" value=""><br>
				<input type="text" name="zip_from" class="required" placeholder="ZIP - from" value="" id='zip_from'><br>
				<input type="text" name="zip_to" class="required" placeholder="ZIP - to" value="" id='zip_to'><br>
				<br>
				<button type="submit" onClick='return long_dist()' class="the_button the_button_black">
				SUBMIT</button>
				
				<span style='color:#000; display:none;' id='quote_thx'>&nbsp;&nbsp;Thank you! We will contact you soon.</span>
			</span>
		</div>
    </div>
</section>
<script>
function long_dist(){
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var moving_date = $("#datepicker").val();
	var zip_from = $("#zip_from").val();
	var zip_to = $("#zip_to").val();
	if (name=="") return err_empty($("#name"), "Please enter your name");
	if (phone=="") return err_empty($("#phone"), "Please enter your phone");
	if (moving_date=="") return err_empty($("#datepicker"), "Please enter your moving date");
	if (zip_from=="") return err_empty($("#zip_from"), "Please enter your zip - from");
	if (zip_to=="") return err_empty($("#zip_to"), "Please enter your zip - to");
	
	$.ajax({
		type: "POST",	
		url: "/ajx_get_long_dist.php",
		data:{
			<?
			$i = 0;
			foreach ($articles as $key=>$val){
				$i++;
				?>
				item_name_<?=$i?>: "<?=$key?>",
				cubic_feet_<?=$i?>: "<?=$val?>",
				qty_<?=$i?>: $("#qty_<?=$i?>").val(),
				<?
			}
			?>
			item_count: <?=$i?>,
			client_name: name,
			email: email,
			phone: phone,
			moving_date: moving_date,
			zip_from: zip_from,
			zip_to: zip_to
		},
		success: function(msg){
			$("#quote_thx").show();
			$("#my_info input").val("");
			$("#my_info select").val("");
		}
	});
}
</script>
<?
get_quote();
as_seen();
footer();
?>

	<footer class="footer text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p><b style="color:#fff;">CalState</b> Copyrights ©2013-2016. License number: 0190811</p>
				</div>
				<div class="col-md-6">
				<ul class="">
					<li><a href="./#home">HOME</a></li>
					<li><a href="./#about_us">ABOUT US</a></li>
					<li><a href="./#advantages">ADVANTAGES</a></li>
					<li><a href="./#prices">PRICES</a></li>
					<li><a href="./#reviews"">REVIEWS</a></li>
					<li><a href="./quote.html">GET A QUOTE</a></li>
				</ul>
					
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/calc.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/wow.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.js"></script>
	<script type='text/javascript' src='js/script.js'></script>
	<script type="text/javascript" src="js/script-movers.js"></script>
	
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.validate.js"></script>

</body>
</html>