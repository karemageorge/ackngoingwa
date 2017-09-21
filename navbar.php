<!--<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php// if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="index">Home</a></li>                    
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</header>-->

<div style="height: 72px;" class="uk-sticky-placeholder">
			<div style="margin: 0px;" class="tm-fixed-menu" data-uk-sticky="">  <!-- Start fixed menu-->
				<div class="tm-nav-a-box">				
					<div class="uk-container uk-container-center">
						<nav class="uk-navbar">
							<!--tm-navbar (hide defolt styles) -->
							<ul class="uk-navbar-nav uk-hidden-small">
								<li class="uk-parent <?php if ($page =='home'){echo 'uk-active';}?>" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
									<a href="index.php" class="">HOME</a>
									<!--<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
										<div class="uk-grid uk-dropdown-grid">
											<div class="uk-width-1-1">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="index-home2.html" class="">HOME 2</a>
													</li>
													<li>
														<a href="index-home3.html" class="">HOME 3</a>
													</li>
												<li>
														<a href="../chocolate/index.html" class="">CHOCOLATE STYLE</a>
													</li>
													<li>
														<a href="../green/index.html" class="">GREEN STYLE</a>
													</li>
													<li>
														<a href="../blue/index.html" class="">BLUE STYLE</a>
													</li>
												</ul>
											</div>
										</div>
									</div>-->
								</li>
								<li class="uk-parent  <?php if ($page =='about'){echo 'uk-active';}?>" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
									<a href="about-us.php" class="">ABOUT US</a>
									<!--<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-2">
										<div class="uk-grid uk-dropdown-grid">
											<div class="uk-width-1-2">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="layouts.html" class="">LAYOUTS</a>
													</li>
													<li>
														<a href="offline.html" class="">MAINTENANCE</a>
													</li>
													<li>
														<a href="coming.html" class="">COMING SOON</a>
													</li>
													<li>
														<a href="error.html" class="">ERROR PAGE</a>
													</li>
													<li>
														<a href="single-article.html" class="">SINGLE ARTICLE</a>
													</li>
												</ul>
											</div>
											<div class="uk-width-1-2">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="left-content.html" class="">LEFT + CONTENT</a>
													</li>
													<li>
														<a href="left-right-content.html" class="">LEFT + RIGHT + CONTENT</a>
													</li>
													<li>
														<a href="left-content-right.html" class="">LEFT + CONTENT + RIGHT</a>
													</li>
													<li>
														<a href="content-right.html" class="">CONTENT + RIGHT</a>
													</li>
													<li>
														<a href="content-left-right.html" class="">CONTENT + LEFT + RIGHT</a>
													</li>
												</ul>
											</div>
										</div>
									</div>-->
								</li>
								<li class="uk-parent <?php if ($page =='event'){echo 'uk-active';}?>" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
									<a href="event.php" class="">EVENT</a>
									<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
										<div class="uk-grid uk-dropdown-grid">
											<div class="uk-width-1-1">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="event-list.php" class="">EVENT LIST</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="uk-parent <?php if ($page =='ministry'){echo 'uk-active';}?>" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
										<a href="ministry.php" class="">MINISTRY</a>
											<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
										<div class="uk-grid uk-dropdown-grid">
											<div class="uk-width-1-1">
												<ul class="uk-nav uk-nav-navbar">
													<li>
														<a href="youth.php" class="">YOUTH MINISTRY</a>
													</li>
													<li>
														<a href="mens.php" class="">KAMA</a>
													</li>
													<li>
														<a href="mothers_union.php" class="">MOTHERS UNION</a>
													</li>
													<li>
														<a href="#" class="">TEENS</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									</li>
									<li class="uk-parent <?php if ($page =='sermon'){echo 'uk-active';}?>">
										<a href="sermons.php" class="">SERMONS</a>
									</li>
									<!-- <li class="uk-parent" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false">
										<a href="blog.html" class="">BLOG</a>
										<div style="" class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
											<div class="uk-grid uk-dropdown-grid">
												<div class="uk-width-1-1">
													<ul class="uk-nav uk-nav-navbar">
														<li>
															<a href="our-pastors.html" class="">OUR PASTORS</a>
														</li>
														<li>
															<a href="testimonials.html" class="">TESTIMONIALS</a>
														</li>
														<li>
															<a href="faq.html" class="">HELP</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li>
										<a href="gallery.html" class="">GALLERY</a>
									</li>
									<!--<li> 
										<a href="donations.html" class="">DONATIONS</a>
									</li>
									<li>
										<a href="shop.html" class="">SHOP</a>
									</li>-->
									<li class="uk-parent  <?php if ($page =='contact'){echo 'uk-active';}?>">
										<a href="contact-us.php" class="">CONTACT US</a>
									</li>
								</ul>						
								<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
						</nav>
					</div>
				</div> 			
			</div>
		</div>  