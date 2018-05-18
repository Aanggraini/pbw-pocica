	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>
				
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?php echo base_url(); ?>" class="logo">
					<img src="<?php echo base_url(); ?>images/icons/logo-pocica4.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="<?php echo base_url(); ?>">Home</a>
							</li>

							<li>
								<a href="<?php echo base_url(). 'admin/products'; ?>">Product</a>
							</li>

							<!--<li>
								<a href="<?php echo base_url(). 'admin/invoices'; ?>">Invoices</a>
							</li>

							<li>
								<a href="<?php echo base_url(). 'admin/blog'; ?>">Blog</a>
							</li>-->
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<div class="header-wrapicon1">
						<img style="cursor: pointer;" src="<?php echo base_url(); ?>images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header users noti -->
						<div class="header-cart header-dropdown">
							<?php if($this->session->userdata('username')) { ?>
								<div class="header-cart-total" style="text-align: center;">
									You Are : <?=$this->session->userdata('username')?>
								</div>
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn" style="margin: 0 auto">
										<!-- Button -->
										<a href="<?php echo base_url(); ?>login/logout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Logout
										</a>
									</div>
								</div>
							<?php } else { ?>
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?php echo base_url(); ?>login" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Login
										</a>
									</div>
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?php echo base_url(); ?>signup/tambah" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Sign Up
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>


				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="<?php echo base_url(); ?>" class="logo-mobile">
				<img src="<?php echo base_url(); ?>images/icons/Pocica2.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<div class="header-wrapicon1">
						<img style="cursor: pointer;" src="<?php echo base_url(); ?>images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header users noti -->
						<div class="header-cart header-dropdown">
							<?php if($this->session->userdata('username')) { ?>
								<div class="header-cart-total" style="text-align: center;">
									You Are : <?=$this->session->userdata('username')?>
								</div>
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn" style="margin: 0 auto">
										<!-- Button -->
										<a href="<?php echo base_url(); ?>login/logout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Logout
										</a>
									</div>
								</div>
							<?php } else { ?>
								<div class="header-cart-buttons">
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?php echo base_url(); ?>login" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Login
										</a>
									</div>
									<div class="header-cart-wrapbtn">
										<!-- Button -->
										<a href="<?php echo base_url(); ?>signup/tambah" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
											Sign Up
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>

				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(); ?>">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(). 'admin/products'; ?>">Product</a>
					</li>

							<!--<li class="item-menu-mobile">
								<a href="<?php echo base_url(). 'admin/invoices'; ?>">Invoices</a>
							</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(). 'admin/blog'; ?>">Blog</a>
					</li>-->
				</ul>
			</nav>
		</div>
	</header>
