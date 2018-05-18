<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<?php 
		if(! $this->session->userdata('grup')) {
			$this->load->view('header');
		} 
		else {
			$this->load->view('admin/header');
		};
	?>
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
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="name" placeholder="Nama" required>
					</span>
				</div>

				<div class="flex-w flex-sb bo-10 p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						No. Telpon:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="number" name="phone" placeholder="Nomor Telepon">
					</span>
				</div>

				<div class="flex-w flex-sb bo10 p-t-12 p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Alamat:
					</span>

					<div class="w-size20 w-full-sm">
						<textarea class="size18 s-text7 p-l-15 p-r-15 m-b-12" style="border: none;" type="textarea" name="address" placeholder="Alamat"></textarea>
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
							<input class="sizefull s-text7 p-l-15 p-r-15" type="number" name="postcode" placeholder="Kode Pos / Zip" required>
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
					<a href="cart/success">
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Proceed to Checkout
						</button>
					</a>
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
			var $total_biaya = <?php echo $this->cart->total(); ?> + biaya + parseInt($("#rand").html());
			$("#total").html("RP " + total_biaya);
			$("#ongkir").html("RP " + biaya);

		});

		

		/**/


	});
</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/select2/select2.min.js"></script>
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
	<script src="<?php echo base_url();?>js/main.js"></script>

</body>
</html>
