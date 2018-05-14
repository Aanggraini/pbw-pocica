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
								<a href="<?php echo base_url(). 'product'; ?>">Shop</a>
							</li>

							<li>
								<a href="<?php echo base_url(). 'cart'; ?>">Cart</a>
							</li>

							<li>
								<a href="<?php echo base_url(). 'blog'; ?>">Blog</a>
							</li>

							<li>
								<a href="<?php echo base_url(). 'about'; ?>">About</a>
							</li>

							<li>
								<a href="<?php echo base_url(). 'custom'; ?>">Custom Order</a>
							</li>
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

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url(); ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo $this->cart->total_items(); ?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">

								<?php foreach ($this->cart->contents() as $items) : ?>
									<li class="header-cart-item">
										<a href="<?php echo base_url(); ?>home/remove_item/<?php echo $items['rowid'] ?>/<?php echo $items['qty'] ?>" class="header-cart-item-name">
											<div class="header-cart-item-img">
													<img src="<?php echo base_url(); ?>images/produk/<?php echo $items['image'] ?>" alt="<?php echo $items['name'] ?>">
											</div>
										</a>

										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												<?php echo $items['name'] ?>
											</a>

											<span class="header-cart-item-info">
												<?php echo $items['qty'] ?> x RP <?php echo number_format($items['price'],0,',','.') ?>
											</span>
										</div>
									</li>
								<?php endforeach; ?>

							</ul>

							<div class="header-cart-total">
								Total: RP <?php echo number_format($this->cart->total(),0,',','.') ?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url(); ?>home/clear_cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Clear Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url(); ?>cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
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

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url(); ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo $this->cart->total_items(); ?></span>

						<!-- Header cart noti --><div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">

								<?php foreach ($this->cart->contents() as $items) : ?>
									<li class="header-cart-item">
										<a href="<?php echo base_url(); ?>home/remove_item/<?php echo $items['rowid'] ?>/<?php echo $items['qty'] ?>" class="header-cart-item-name">
											<div class="header-cart-item-img">
													<img src="<?php echo base_url(); ?>images/produk/<?php echo $items['image'] ?>" alt="<?php echo $items['name'] ?>">
											</div>
										</a>

										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												<?php echo $items['name'] ?>
											</a>

											<span class="header-cart-item-info">
												<?php echo $items['qty'] ?> x RP <?php echo number_format($items['price'],0,',','.') ?>
											</span>
										</div>
									</li>
								<?php endforeach; ?>

							</ul>

							<div class="header-cart-total">
								Total: RP <?php echo number_format($this->cart->total(),0,',','.') ?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url(); ?>home/clear_cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Clear Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="<?php echo base_url(); ?>cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
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
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

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
						<a href="<?php echo base_url(). 'product'; ?>">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(). 'product'; ?>">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(). 'cart'; ?>">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(). 'blog'; ?>">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(). 'about'; ?>">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url(). 'contact'; ?>">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
