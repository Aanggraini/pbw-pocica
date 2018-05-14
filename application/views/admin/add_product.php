<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
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
	<?php $this->load->view('admin/header') ?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url('<?php echo base_url();?>images/produk/indiana-black.jpg');">
		<h2 class="l-text2 t-center">
			Edit product
		</h2>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50 m-l-auto m-r-auto">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
					</div>

				<div><?= validation_errors() ?></div>
				<?= form_open_multipart('admin/products/create', ['class'=>'form-horizontal']) ?>
					
					  <div class="flex-w flex-sb-m form-group">
						<label for="inputEmail3" class="col-sm-2 control-label w-size19">Product Name</label>
						<div class="col-sm-10 w-size20">
						  <input type="text" class="form-control" style="border-bottom: 1px solid #e5e5e5 !important;" name="name" placeholder="" value="<?= set_value('name') ?>">
						</div>
					  </div>
					  
					  <div class="flex-w flex-sb-m form-group">
						<label for="inputPassword3" class="col-sm-2 control-label w-size19">Description</label>
						<div class="col-sm-10 w-size20">
						  <textarea class="form-control" name="description"><?= set_value('description') ?></textarea>
						</div>
					  </div>
					  
					  <div class="flex-w flex-sb-m form-group">
						<label for="inputPassword3" class="col-sm-2 control-label w-size19">Price</label>
						<div class="col-sm-10 w-size20">
						  <input type="text" class="form-control" style="border-bottom: 1px solid #e5e5e5 !important;" name="price" placeholder="" value="<?= set_value('price') ?>">
						</div>
					  </div>
					  
					  <div class="flex-w flex-sb-m form-group">
						<label for="inputPassword3" class="col-sm-2 control-label w-size19">Available Stock</label>
						<div class="col-sm-10 w-size20">
						  <input type="text" class="form-control" style="border-bottom: 1px solid #e5e5e5 !important;" name="stock" placeholder="" value="<?= set_value('stock') ?>">
						</div>
					  </div>
					  
					  <div class="flex-w flex-sb-m form-group">
						<label for="inputPassword3" class="col-sm-2 control-label w-size19">Product Image</label>
						<div class="col-sm-10 w-size20">
						  <input type="file" class="form-control" name="userfile" >
						</div>
					  </div>
					  
					  <div class="flex-w flex-sb-m form-group">
						<label for="inputPassword3" class="col-sm-2 control-label w-size19">Weight</label>
						<div class="col-sm-10 w-size20">
						  <input type="text" class="form-control" style="border-bottom: 1px solid #e5e5e5 !important;" name="weight" placeholder="" value="<?= set_value('weight') ?>">
						</div>
					  </div>
					  
					  <div class="flex-w flex-sb-m form-group">
						<div class="col-sm-offset-4 col-sm-4">
						  <button type="submit" class="btn btn-default flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Save</button>
						</div>
					  </div>
					
				<?= form_close() ?>
				</div>
			</div>
		</div>
	</section>

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
	<script type="text/javascript" src="<?php echo base_url();?>vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>js/main.js"></script>
</body>
</html>
