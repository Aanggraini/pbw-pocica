<!DOCTYPE html>
<html lang="en">
<head>
	<title>Custom Order</title>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css">
<!--===============================================================================================-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Design Order Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="<?php echo base_url();?>css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
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
	
	
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/produk/indiana-black.jpg);">
		<h2 class="l-text2 t-center">
			Form Pemesanan 
		</h2>
</section>

	<div class="content-w3ls">
	<div class="form-w3ls">
		<div><?=validation_errors()?></div>
		<div><?=$this->session->flashdata('error')?></div>
		<?php echo form_open_multipart('custom/kirim');?>
			<div class="content-wthree1">
				<div class="form-control">
					<div class="main-row">
						<label class="header" style="color:black">Choose Design <span>*</span></label>
							<select name="design">
								<option value="" selected="" disabled="">Pilih Desain</option>
								<option value="Pocica Custom With Character">Pocica Custom With Character</option>
								<option value="Pouch Custom Reguler">Pouch Custom Reguler</option>
							</select>
							<i></i>
						
					</div>
				</div>
				<div class="grid-agileits1">
					<div class="form-control"> 
						<label class="header" style="color:black">Quantity <span>*</span></label>
						<input type="number" id="qty" name="qty" placeholder="Jumlah Barang" title="Masukkan jumlah barang" required>
					</div>
		
					<div class="form-control"> 
						<label class="header" style="color:black">Name <span>*</span></label>
						<input type="text" id="name" name="name" placeholder="Nama" title="Masukkan nama lengkap">
					</div>
					<div class="form-control"> 
						<label class="header" style="color:black">Address <span>*</span> :</label>
						<input type="text" id="address" name="address" placeholder="Alamat" title="Masukkan alamat" required>
					</div>
					<div class="form-control"> 
						<label class="header" style="color:black">Phone <span>*</span> :</label>
						<input type="number" id="phone" name="phone" placeholder="Nomor Telepon" title="Masukkan nomor telepon" required>
					</div>
					<div class="form-control"> 
						<label class="header" style="color:black">Description :</label>
						<textarea class="form-control" rows="4" cols="74" name="description" title="Tuliskan detail custom yang diinginkan"></textarea>
					</div><br>
					<div class="form-control"> 
						<label class="header" style="color:black">File :</label>
						<input type="file" id="" name="photo" placeholder="" title="Upload gambar yang ingin dijadikan desain custom">
					</div><!---->
					
				</div>	
			</div>
			<div class="w3ls-btn">		
				<div class="wthreesubmitaits">
					<input type="submit" name="submit" value="Send">
				</div>	
			</div>
		</form>	
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="<?php echo base_url();?>js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>js/main.js"></script>

</body>
</html>
