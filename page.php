<?
include("my_func.php");

// head($this_title, $og_url, $og_title, $og_descr, $meta_descr="")
head("$COMP_NAME_SHORT Long Distance moving Services", "long-distance-moving",
"Long Distance Within The State Of $STATE_NAME",
"$COMP_NAME offers long distance moving through out $STATE_NAME and the rest of the country.One of the best long distance moving companies in $CITY_NAME.");

universal_pixel();
google_analytics();
htmlTopbar();
yelp_offer_bg();
city_phones_strip();
links_grey_strip();
?>
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
    <div class="row">
		<div class="col-sm-12 col-md-8">
            <div id="content">
			<?if ($IS_CALSTATE==1){?>
			<p>Long distance moving is the most challenging of all moves. There are always construction projects and other factors at play with these types of moves. For this you need a team of professional movers to minimize the factors as much as possible. That's why you need to choose a moving company with proven track record. Calstate Moving and Storage has a long established record of safety and in here we never promise a delivery time we cannot meet. We understand that it's your life in limbo until you are set up in your new home or office.</p>
			<p>We can coordinate flawless schedule that ensures you get what you need, when you need it. Many of our clients like to have their home furnishing moved first, followed by the rest of their belonging. This provides families with opportunity to put the sofa, desks, bedroom dressers and other heavy furniture in place before the smaller unpacking begins. In case of commercial moving clients want their office moved first, followed by their home and other belongings. We appreciate every suggestion from you and we keep you updated with every detail.</p>
			<p>No idea about long distance moving ?</p>
			<p>Contact our team for more information like estimated time, pricing etc. They are happy to assist and will walk you through every details. We look forward to serving you.</p>
			<?
			}else{
			// PAM
			?>
			<p><?=$COMP_NAME?> drivers, movers, and long-distance moving experts are dedicated to helping your next long distance move go as smoothly as possible. </p>
			<p>Our highly trained staff ensures a stress free move so that you can concentrate on other things in your life. </p>
			<p>We've handled thousands of long distance moves and would love to add you to our long list of satisfied customers. </p>
			<p>Every moving truck is privately owned and equipped with a GPS unit to insure the most efficient route to take from your old home to your new one. </p>
			<p>We know that time is money and at <?=$COMP_NAME?> you'll get the most for yours. </p>
			<?}?>
			</div>
		</div>
        <div class="col-sm-12 col-md-4">
            <div class="center"><img src="/assets/images/articles/long-distance.jpg" class='img-responsive' alt="Long Distance Within The State Of <?=$STATE_NAME?>" /></div>
        </div>
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