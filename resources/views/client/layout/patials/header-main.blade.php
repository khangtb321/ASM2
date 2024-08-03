<div class="header__main d-none d-lg-flex">
			<div class="container-fluid custom-container">
				<!-- Header Main Menu Start -->
				<nav class="header__main--menu position-relative">
					<!-- Menu Item List Start -->
					<ul class="menu-items-list menu-items-list--dark justify-content-center d-flex">
						<li>
							<a class="active" href="index.html">
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Pages</span>
								<i class="lastudioicon-down-arrow" aria-hidden="true"></i>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="about.html"><span>About us</span></a>
								</li>
								<li>
									<a href="coming-soon.html"><span>Coming Soon</span></a>
								</li>
								<li>
									<a href="our-team.html"><span>Our Team</span></a>
								</li>
								<li>
									<a href="contact-us.html"><span>Contact Us</span></a>
								</li>
								<li>
									<a href="faqs.html"><span>FAQ's</span></a>
								</li>
								<li>
									<a href="term-of-use.html"><span>term of use</span></a>
								</li>
								<li>
									<a href="404.html"><span>404 Page</span></a>
								</li>
								<li>
									<a href="login-register.html"><span>Login & Register</span></a>
								</li>
							</ul>
						</li>
						<li class="position-static">
							<a href="#">
								<span>Shop</span>
								<i class="lastudioicon-down-arrow" aria-hidden="true"></i>
							</a>
							<div class="mega-menu mega-menu-width d-flex flex-wrap">
								<div class="mega-menu-col">
									
									<ul class="">
										@foreach ($categories as $category )
										<li>
											<a href="shop-fullwidth.html">
												<span>{{$category->name}}</span>
											</a>
										</li>
										@endforeach
										
					
									</ul>
								</div>
					
							</div>
						</li>
						<li class="position-static">
							<a href="#">
								<span>Collections</span>
								<i class="lastudioicon-down-arrow" aria-hidden="true"></i>
							</a>
							<div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
								<div class="mega-menu__banner">
									<a href="#">
										<div class="mega-menu__banner--image">
											<img src="theme/client/assets/images/megamenu.jpg" alt="Fashion Banner" width="470"
												height="475" />
										</div>
										<div class="mega-menu__banner--caption">
											<h4 class="caption-title">New Arrival</h4>
											<p class="caption-desc">Non curabitur gravida</p>
										</div>
									</a>
								</div>
								<div class="mega-menu__content">
									<h4 class="mega-menu__content--title">Summer Collection 2023</h4>
									<div class="d-flex flex-wrap">
										<ul class="mega-menu__content--list">
											<li><a href="#">Dresses and jumpsuits</a></li>
											<li><a href="#">Shirts</a></li>
											<li><a href="#">T-shirts and tops</a></li>
											<li><a href="#">Jackets and Suit Jackets</a></li>
											<li><a href="#">Cardigans and sweaters</a></li>
											<li><a href="#">Sweatshirts</a></li>
											<li><a href="#">Coats</a></li>
										</ul>
										<ul class="mega-menu__content--list">
											<li><a href="#">Trousers</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Skirts</a></li>
											<li><a href="#">Shorts</a></li>
											<li><a href="#">Bikinis and swimsuits</a></li>
											<li><a href="#">Sportswear</a></li>
											<li><a href="#">Underwear and lingerie</a></li>
											<li><a href="#">Pyjamas</a></li>
										</ul>
									</div>
									<div class="mt-auto">
										<ul class="mega-menu__info">
											<li><a href="#">info@exmple.com</a></li>
											<li><a href="#">(626)997-4298</a></li>
										</ul>
										<div class="mega-menu__social">
											<div class="mega-menu__social--lable">Connect with us</div>
											<ul class="mega-menu__social--social">
												<li>
													<a href="#" aria-label="facebook">
														<i class="lastudioicon-b-facebook"></i>
													</a>
												</li>
												<li>
													<a href="#" aria-label="twitter">
														<i class="lastudioicon-b-twitter"></i>
													</a>
												</li>
												<li>
													<a href="#" aria-label="instagram">
														<i class="lastudioicon-b-instagram"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#">
								<span>Blog</span>
								<i class="lastudioicon-down-arrow" aria-hidden="true"></i>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="blog-right-sidebar.html">
										<span>Blog Right Sidebar</span>
									</a>
								</li>
								<li>
									<a href="blog-left-sidebar.html">
										<span>Blog Left Sidebar</span>
									</a>
								</li>
								<li>
									<a href="blog.html">
										<span>Blog No Sidebar</span>
									</a>
								</li>
								<li>
									<a href="blog-single.html">
										<span>Single Post</span>
									</a>
								</li>
							</ul>
						</li>

					</ul>
					<!-- Menu Item List End -->
				</nav>
				<!-- Header Main Menu End -->
			</div>
		</div>