<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<?php $this->load->view('header') ?>
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/produk/indiana-black.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
						</tr>

						<?php foreach ($this->cart->contents() as $items) : ?>
						<tr class="table-row">
							<td class="column-1">
								<a href="<?php echo base_url(); ?>home/remove/<?php echo $items['rowid'] ?>">
									<div class="cart-img-product b-rad-4 o-f-hidden">
										<img src="<?php echo base_url(); ?>images/produk/<?php echo $items['image'] ?>" alt="<?php echo $items['name'] ?>">
									</div>
								</a>
							</td>
							<td class="column-2"><?php echo $items['name'] ?></td>
							<td class="column-3">RP <?php echo number_format($items['price'],0,',','.') ?></td>
							<td class="column-4">
								<div class="w-size17">
									<div style="text-align: right;"><?php echo $items['qty'] ?></div>
								</div>
							</td>
							<td class="column-5">RP <?php echo number_format($items['subtotal'],0,',','.') ?></td>
						</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="s-text18">
						Berat: <?php 
						$berat = 0;
						foreach ($this->cart->contents() as $key) {
							$berat += ($key['weight'] * $key['qty']);
						}
						echo $berat; ?> gram.
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button 
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>-->
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button 
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						SELANJUTNYA
					</button>-->
				</div>
			</div>
		</div>
	</section>


<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-auto m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Data Penerima
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Nama:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="Nama">
					</span>
				</div>

				<div class="flex-w flex-sb bo-10 p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						No. Telpon:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="Nomor Telepon">
					</span>
				</div>

				<div class="flex-w flex-sb bo10 p-t-12 p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Alamat:
					</span>

					<div class="w-size20 w-full-sm">
						<textarea class="size18 s-text7 p-l-15 p-r-15 m-b-12" style="border: none;" type="textarea" name="state" placeholder="Alamat"></textarea>
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
				    		<select class="" name="propinsi_tujuan" id="propinsi_tujuan">
								<option value="" selected="" disabled="">Pilih Provinsi</option>
								<?php $this->load->view('getProvince'); ?>
							</select>
						</div>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="" name="destination" id="destination">
								<option value="" selected="" disabled="">Pilih Kota</option>
							</select>
						</div>

						<style type="text/css">.rs2-select2 select, .rs2-select2 input { width: 100%; height: 38px; font-size: 13px; padding-left: 10px; border: none; color: #212529; }</style>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Kode Pos / Zip">
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb  p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							Pengiriman hanya dapat dilakukan menggunakan JNE.
						</p>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="" name="jenis" id="jenis">
								<option value="" selected="" disabled="">Jenis Pengiriman</option>
							</select>
						</div>
					</div>
				</div>
			</div>





			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-auto m-l-auto m-b-30 p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						RP <?php echo number_format($this->cart->total(),0,',','.') ?>
					</span>
				</div>

				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Ongkos:
					</span>

					<span class="m-text21 w-size20 w-full-sm" id="ongkir">
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Angka Penanda:
					</span>

					<span class="m-text21 w-size20 w-full-sm" id="rand">
						<?php echo rand(50, 200); ?>
					</span>
				</div>

				<!--  -->
				<div class="flex-w bo10 flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm" id="total">
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			</div>

	<!-- Footer -->
	<?php $this->load->view('footer') ?>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<script>
	$(document).ready(function(){
		$("body").on('click', '#propinsi_tujuan', function(){
			$.post("<?php echo base_url(). 'rajaongkir/getCity/'; ?>"+ $('#propinsi_tujuan').val() ,function(obj){
				$('#destination').html(obj);
			});

		});


		$("body").on('click', '#destination', function(){

			$.post("<?php echo base_url(). 'rajaongkir/getCost/'; ?>"+ $('#destination').val() ,function(obj){
				$('#jenis').html(obj);
			});

		});

		$("body").on('click', '#jenis', function(){

			var biaya = $("#jenis").val().split(',')[0] * Math.ceil(<?php echo $berat; ?> / 1000);
			var total_biaya = <?php echo $this->cart->total(); ?> + biaya + parseInt($("#rand").html());
			$("#total").html("RP" + total_biaya);
			$("#ongkir").html("RP " + biaya);

		});

		

		/**/


	});
</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
