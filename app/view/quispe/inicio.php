<!-- CARGANDO -->
<div class="preloader">
	<div class="lds-ellipsis">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<!-- FIN DE CARGANDO -->
<!-- MODAL -->
<div class="container">
<!--	<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">-->
<!--			<div class="modal-content">-->
<!--				<div class="modal-body">-->
<!--					<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--						<span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>-->
<!--					</button>-->
<!--					<div class="row no-gutters">-->
<!--						<div class="col-sm-7">-->
<!--							<div class="popup_content text-left">-->
<!--								<div class="popup-text">-->
<!--									<div class="heading_s1">-->
<!--										<h3>Subscribe Newsletter and Get 25% Discount!</h3>-->
<!--									</div>-->
<!--									<p>Subscribe to the newsletter to receive updates about new products.</p>-->
<!--								</div>-->
<!--								<form method="post">-->
<!--									<div class="form-group">-->
<!--										<input name="email" required type="email" class="form-control" placeholder="Enter Your Email">-->
<!--									</div>-->
<!--									<div class="form-group">-->
<!--										<button class="btn btn-fill-out btn-block text-uppercase" title="Subscribe" type="submit">Subscribe</button>-->
<!--									</div>-->
<!--								</form>-->
<!--								<div class="chek-form">-->
<!--									<div class="custome-checkbox">-->
<!--										<input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">-->
<!--										<label class="form-check-label" for="exampleCheckbox3"><span>Don't show this popup again!</span></label>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-sm-5">-->
<!--							<div class="background_bg h-100" data-img-src="--><?php //= _SERVER_._STYLES_F_ ?><!--assets/images/popup_img3.jpg"></div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
</div>
<!-- FIN DE MODAL -->
<!-- HEADER -->
<header class="header_wrap">
	<!--	LOGO, BUSCADOR Y CARRITO-->
	<div class="middle-header dark_skin">
		<div class="custom-container">
			<div class="nav_block">
				<!--	LOGO QUISPE-->
				<a class="navbar-brand" href="<?= _SERVER_ ?>Quispe/detalle_producto">
					<img class="logo_dark" src="<?= _SERVER_._STYLES_F_ ?>assets/img/Quispe-Oficial-removebg.png" style="width: 260px" alt="logo"/>
				</a>
				<!--	BUSCADOR POR CATEGORÍAS-->
				<div class="product_search_form rounded_input">
					<form>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="custom_select">
									<select class="first_null">
										<option value="">Categorías</option>
										<option value="">Categoría 1</option>
										<option value="">Categoría 2</option>
										<option value="">Categoría 3</option>
										<option value="">Categoría 4</option>
									</select>
								</div>
							</div>
							<input class="form-control" placeholder="Buscar Producto..." required=""  type="text">
							<button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
				<!--	CARRITO Y OTROS-->
				<ul class="navbar-nav attr-nav align-items-center">
					<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="nav-link"><i class="linearicons-user"></i></a></li>
					<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>
					<li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-toggle="dropdown"><i class="linearicons-bag2"></i><span class="cart_count">2</span><span class="amount"><span class="currency_symbol">S/</span>159.00</span></a>
						<div class="cart_box cart_right dropdown-menu dropdown-menu-right">
							<ul class="cart_list">
								<li>
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="item_remove"><i class="ion-close"></i></a>
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto"><img src="<?= _SERVER_._STYLES_F_ ?>assets/images/cart_thamb1.jpg" alt="cart_thumb1">Producto 01</a>
									<span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">S/</span></span>78.00</span>
								</li>
								<li>
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="item_remove"><i class="ion-close"></i></a>
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto"><img src="<?= _SERVER_._STYLES_F_ ?>assets/images/cart_thamb2.jpg" alt="cart_thumb2">Producto 02</a>
									<span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">S/</span></span>81.00</span>
								</li>
							</ul>
							<div class="cart_footer">
								<p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">S/</span></span>159.00</p>
								<p class="cart_buttons"><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="btn btn-fill-line view-cart">Ver Carrito</a><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="btn btn-fill-out checkout">Verificar</a></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--CATEGORÍAS	-->
	<div class="bottom_header dark_skin main_menu_uppercase border-top border-bottom">
		<div class="custom-container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-3">
					<div class="categories_wrap">
						<button type="button" data-toggle="collapse" data-target="#navCatContent" aria-expanded="false" class="categories_btn">
							<i class="linearicons-menu"></i><span>Categorías </span>
						</button>
						<div id="navCatContent" class="nav_cat navbar collapse">
							<ul>
								<li class="dropdown dropdown-mega-menu">
									<a class="dropdown-item nav-link dropdown-toggler" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-toggle="dropdown"><i class="flaticon-tv"></i> <span>Categoría 1</span></a>
									<div class="dropdown-menu">
										<ul class="mega-menu d-lg-flex">
											<li class="mega-menu-col col-lg-7">
												<ul class="d-lg-flex">
													<li class="mega-menu-col col-lg-6">
														<ul>
															<li class="dropdown-header">Subcategorías</li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
														</ul>
													</li>
													<li class="mega-menu-col col-lg-6">
														<ul>
															<li class="dropdown-header">SubCategorías</li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-5">
												<div class="header-banner2">
													<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/menu_banner7.jpg" alt="menu_banner">
													<div class="banne_info">
														<h6>20% Descuento</h6>
														<h4>Computadora</h4>
														<a href="<?= _SERVER_ ?>Quispe/detalle_producto">Comprar Ahora</a>
													</div>
												</div>
												<div class="header-banner2">
													<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/menu_banner8.jpg" alt="menu_banner">
													<div class="banne_info">
														<h6>15% Descuento</h6>
														<h4>Laptops</h4>
														<a href="<?= _SERVER_ ?>Quispe/detalle_producto">Comprar Ahora</a>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="dropdown dropdown-mega-menu">
									<a class="dropdown-item nav-link dropdown-toggler" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-toggle="dropdown"><i class="flaticon-responsive"></i> <span>Categoría 2</span></a>
									<div class="dropdown-menu">
										<ul class="mega-menu d-lg-flex">
											<li class="mega-menu-col col-lg-7">
												<ul class="d-lg-flex">
													<li class="mega-menu-col col-lg-6">
														<ul>
															<li class="dropdown-header">Subcategorías</li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
														</ul>
													</li>
													<li class="mega-menu-col col-lg-6">
														<ul>
															<li class="dropdown-header">SubCategorías</li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-5">
												<div class="header-banner2">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto"><img src="<?= _SERVER_._STYLES_F_ ?>assets/images/menu_banner6.jpg" alt="menu_banner"></a>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="dropdown dropdown-mega-menu">
									<a class="dropdown-item nav-link dropdown-toggler" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-toggle="dropdown"><i class="flaticon-camera"></i> <span>Categoría 3</span></a>
									<div class="dropdown-menu">
										<ul class="mega-menu d-lg-flex">
											<li class="mega-menu-col col-lg-7">
												<ul class="d-lg-flex">
													<li class="mega-menu-col col-lg-6">
														<ul>
															<li class="dropdown-header">Subcategorías</li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
														</ul>
													</li>
													<li class="mega-menu-col col-lg-6">
														<ul>
															<li class="dropdown-header">SubCategorías</li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
															<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-5">
												<div class="header-banner2">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto"><img src="<?= _SERVER_._STYLES_F_ ?>assets/images/menu_banner9.jpg" alt="menu_banner"></a>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="dropdown dropdown-mega-menu">
									<a class="dropdown-item nav-link dropdown-toggler" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-toggle="dropdown"><i class="flaticon-plugins"></i> <span>Categoría 4</span></a>
									<div class="dropdown-menu">
										<ul class="mega-menu d-lg-flex">
											<li class="mega-menu-col col-lg-4">
												<ul>
													<li class="dropdown-header">Mujeres</li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-4">
												<ul>
													<li class="dropdown-header">Hombres</li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-4">
												<ul>
													<li class="dropdown-header">Niños</li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto 1</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</li>
								<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="flaticon-headphones"></i> <span>Auriculares</span></a></li>
								<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="flaticon-console"></i> <span>Juegos</span></a></li>
								<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="flaticon-watch"></i> <span>Relojes</span></a></li>
								<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="flaticon-music-system"></i> <span>Audio y Teatro en Casa</span></a></li>
								<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="flaticon-monitor"></i> <span>TV & Smart Box</span></a></li>
								<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="flaticon-printer"></i> <span>Impresoras</span></a></li>
								<li>
									<ul class="more_slide_open">
										<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="flaticon-fax"></i> <span>Teléfonos</span></a></li>
										<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="flaticon-mouse"></i> <span>Mouse</span></a></li>
									</ul>
								</li>
							</ul>
							<div class="more_categories">Más Categorías</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-8 col-sm-6 col-9">
					<nav class="navbar navbar-expand-lg">
						<button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarSidetoggle" aria-expanded="false">
							<span class="ion-android-menu"></span>
						</button>
						<div class="pr_search_icon">
							<a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
						</div>
                        <!------->
						<div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
							<ul class="navbar-nav">
                                <!--INICIO-->
								<li class="dropdown">
									<a class="nav-link" href="<?=_SERVER_?>">Inicio</a>
<!--									<div class="dropdown-menu">-->
<!--										<ul>-->
<!--											<li><a class="dropdown-item nav-link nav_item" href="index.html">Fashion 1</a></li>-->
<!--											<li><a class="dropdown-item nav-link nav_item" href="index-2.html">Fashion 2</a></li>-->
<!--											<li><a class="dropdown-item nav-link nav_item" href="index-3.html">Furniture 3</a></li>-->
<!--										</ul>-->
<!--									</div>-->
								</li>
<!--								PÁGINAS-->
								<li class="dropdown">
									<a class="dropdown-toggle nav-link" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-toggle="dropdown">Páginas</a>
									<div class="dropdown-menu">
										<ul>
											<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Sobre Nosotros</a></li>
											<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Contáctanos</a></li>
											<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Registrarse</a></li>
											<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Términos y condiciones</a></li>
										</ul>
									</div>
								</li>
<!--								PRODUCTOS-->
								<li class="dropdown dropdown-mega-menu">
									<a class="dropdown-toggle nav-link" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-toggle="dropdown">Productos</a>
									<div class="dropdown-menu">
										<ul class="mega-menu d-lg-flex">
											<li class="mega-menu-col col-lg-3">
												<ul>
													<li class="dropdown-header">Mujeres</li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto a</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto b</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto c</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto d</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto e</a></li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-3">
												<ul>
													<li class="dropdown-header">Hombres</li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto a</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto b</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto c</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto d</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto e</a></li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-3">
												<ul>
													<li class="dropdown-header">Niños</li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto a</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto b</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto c</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto d</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto e</a></li>
												</ul>
											</li>
											<li class="mega-menu-col col-lg-3">
												<ul>
													<li class="dropdown-header">Accessorios</li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto a</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto b</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto c</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto d</a></li>
													<li><a class="dropdown-item nav-link nav_item" href="<?= _SERVER_ ?>Quispe/detalle_producto">Producto e</a></li>
												</ul>
											</li>
										</ul>
										<div class="d-lg-flex menu_banners">
											<div class="col-lg-6">
												<div class="header-banner">
													<div class="sale-banner">
														<a class="hover_effect1" href="<?= _SERVER_ ?>Quispe/detalle_producto">
															<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img7.jpg" alt="shop_banner_img7">
														</a>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="header-banner">
													<div class="sale-banner">
														<a class="hover_effect1" href="<?= _SERVER_ ?>Quispe/detalle_producto">
															<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img8.jpg" alt="shop_banner_img8">
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="contact_phone contact_support">
							<i class="linearicons-phone-wave"></i>
							<span>974 996 034</span>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- FIN DE HEADER -->
<!-- CARRUSEL -->
<div class="mt-4 staggered-animation-wrap">
	<div class="custom-container">
		<div class="row">
			<div class="col-lg-7 offset-lg-3">
				<div class="banner_section shop_el_slider">
					<div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
						<!--BANNER 1,2 Y 3-->
						<div class="carousel-inner">
							<div class="carousel-item active background_bg" data-img-src="<?= _SERVER_._STYLES_F_ ?>assets/images/banner13.jpg">
								<div class="banner_slide_content banner_content_inner">
									<div class="col-lg-7 col-10">
										<div class="banner_content3 overflow-hidden">
											<h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Get up to 50% Descuento Today Only!</h5>
											<h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Iphone 8</h2>
											<h4 class="staggered-animation mb-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">S/45.00</span><del>S/55.25</del></h4>
											<a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-animation="slideInLeft" data-animation-delay="1.5s">Comprar Ahora</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item background_bg" data-img-src="<?= _SERVER_._STYLES_F_ ?>assets/images/banner14.jpg">
								<div class="banner_slide_content banner_content_inner">
									<div class="col-lg-8 col-10">
										<div class="banner_content3 overflow-hidden">
											<h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s"></h5>
											<h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Smart Watches</h2>
											<h4 class="staggered-animation mb-3 mb-sm-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">S/45.00</span><del>S/55.25</del></h4>
											<a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-animation="slideInLeft" data-animation-delay="1.5s">Comprar Ahora</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item background_bg" data-img-src="<?= _SERVER_._STYLES_F_ ?>assets/images/banner15.jpg">
								<div class="banner_slide_content banner_content_inner">
									<div class="col-lg-8 col-10">
										<div class="banner_content3 overflow-hidden">
											<h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s"></h5>
											<h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Auriculares</h2>
											<h4 class="staggered-animation mb-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">S/45.00</span><del>S/55.25</del></h4>
											<a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="<?= _SERVER_ ?>Quispe/detalle_producto" data-animation="slideInLeft" data-animation-delay="1.5s">Comprar Ahora</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--FIN DE BANNER 1,2 Y 3-->
						<ol class="carousel-indicators indicators_style3">
							<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleControls" data-slide-to="1"></li>
							<li data-target="#carouselExampleControls" data-slide-to="2"></li>
						</ol>
					</div>
				</div>
			</div>
			<!--COLECCIÓN DE IPHONE Y MAC-->
			<div class="col-lg-2 d-none d-lg-block">
				<div class="shop_banner2 el_banner1">
					<a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="hover_effect1">
						<div class="el_title text_white">
							<h6>Colección de Iphone</h6>
							<span>25% de Descuento</span>
						</div>
						<div class="el_img">
							<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img6.png" alt="shop_banner_img6">
						</div>
					</a>
				</div>
				<div class="shop_banner2 el_banner2">
					<a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="hover_effect1">
						<div class="el_title text_white">
							<h6>Computadora MAC</h6>
							<span><u>Comprar Ahora</u></span>
						</div>
						<div class="el_img">
							<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img7.png" alt="shop_banner_img7">
						</div>
					</a>
				</div>
			</div>
			<!-- FIN COLECCIÓN DE IPHONE Y MAC-->
		</div>
	</div>
</div>
<!-- FIN DE CARRUSEL -->
<!-- CONTENIDO PRINCIPAL -->
<div class="main_content">
<!-- PRODUCTOS EXCLUSIVOS -->
	<div class="section small_pt pb-0">
		<div class="custom-container">
			<div class="row">
				<!--BANNER AMARILLO-->
				<div class="col-xl-3 d-none d-xl-block">
					<div class="sale-banner">
						<a class="hover_effect1" href="<?= _SERVER_ ?>Quispe/detalle_producto">
							<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img6.jpg" alt="shop_banner_img6">
						</a>
					</div>
				</div>
				<!--FIN DE BANNER AMARILLO-->
				<div class="col-xl-9">
					<!--PRODUCTOS EXCLUSIVOS-->
					<div class="row">
						<div class="col-12">
							<div class="heading_tab_header">
								<div class="heading_s2">
									<h4>Productos Exclusivos</h4>
								</div>
								<!--LLEGADOS, VENDIDOS Y OFERTAS-->
								<div class="tab-style2">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tabmenubar" aria-expanded="false">
										<span class="ion-android-menu"></span>
									</button>
									<ul class="nav nav-tabs justify-content-center justify-content-md-end" id="tabmenubar" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">Recién LLegados</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="sellers-tab" data-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Los Más Vendidos</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="special-tab" data-toggle="tab" href="#special" role="tab" aria-controls="special" aria-selected="false">Ofertas Especiales</a>
										</li>
									</ul>
								</div>
								<!-- FIN DE  LLEGADOS, VENDIDOS Y OFERTAS-->
							</div>
						</div>
					</div>
					<!--FIN DE PRODUCTOS EXCLUSIVOS-->
					<div class="row">
						<div class="col-12">
							<div class="tab_slider">
								<!--PRODUCTOS RECIÉN LLEGADOS-->
								<div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
									<div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img1.jpg" alt="el_img1">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img1.jpg" alt="el_hover_img1">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Auricular Rojo y Negro</a></h6>
													<div class="product_price">
														<span class="price">S/45.00</span>
														<del>S/55.25</del>
														<div class="on_sale">
															<span>35% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
														<span class="rating_num">(21)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img2.jpg" alt="el_img2">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img2.jpg" alt="el_hover_img2">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Smart Watch</a></h6>
													<div class="product_price">
														<span class="price">S/55.00</span>
														<del>S/95.00</del>
														<div class="on_sale">
															<span>25% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:68%"></div>
														</div>
														<span class="rating_num">(15)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<span class="pr_flash">Nuevo</span>
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img3.jpg" alt="el_img3">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img3.jpg" alt="el_hover_img3">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Cámara Nikon HD</a></h6>
													<div class="product_price">
														<span class="price">S/68.00</span>
														<del>S/99.00</del>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:87%"></div>
														</div>
														<span class="rating_num">(25)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img4.jpg" alt="el_img4">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img4.jpg" alt="el_hover_img4">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Equipo de Sonido</a></h6>
													<div class="product_price">
														<span class="price">S/69.00</span>
														<del>S/89.00</del>
														<div class="on_sale">
															<span>20% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:70%"></div>
														</div>
														<span class="rating_num">(22)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img5.jpg" alt="el_img5">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img5.jpg" alt="el_hover_img5">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Televisores Smart</a></h6>
													<div class="product_price">
														<span class="price">S/45.00</span>
														<del>S/55.25</del>
														<div class="on_sale">
															<span>35% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
														<span class="rating_num">(21)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<span class="pr_flash bg-danger">Hot</span>
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img6.jpg" alt="el_img6">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img6.jpg" alt="el_hover_img6">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Celular Samsung</a></h6>
													<div class="product_price">
														<span class="price">S/55.00</span>
														<del>S/95.00</del>
														<div class="on_sale">
															<span>25% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:68%"></div>
														</div>
														<span class="rating_num">(15)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--PRODUCTOS MÁS VENDIDOS-->
								<div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
									<div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img7.jpg" alt="el_img7">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img7.jpg" alt="el_hover_img7">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Radio Pequeño</a></h6>
													<div class="product_price">
														<span class="price">S/45.00</span>
														<del>S/55.25</del>
														<div class="on_sale">
															<span>35% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
														<span class="rating_num">(21)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<span class="pr_flash bg-danger">Hot</span>
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img8.jpg" alt="el_img8">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img8.jpg" alt="el_hover_img8">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Cámara de Vigilancia</a></h6>
													<div class="product_price">
														<span class="price">S/55.00</span>
														<del>S/95.00</del>
														<div class="on_sale">
															<span>25% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:68%"></div>
														</div>
														<span class="rating_num">(15)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img9.jpg" alt="el_img9">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img9.jpg" alt="el_hover_img9">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">oppo Reno3 Pro</a></h6>
													<div class="product_price">
														<span class="price">S/68.00</span>
														<del>S/99.00</del>
														<div class="on_sale">
															<span>20% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:87%"></div>
														</div>
														<span class="rating_num">(25)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<span class="pr_flash bg-success">Venta</span>
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img10.jpg" alt="el_img10">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img10.jpg" alt="el_hover_img10">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Auricular Clásico</a></h6>
													<div class="product_price">
														<span class="price">S/68.00</span>
														<del>S/99.00</del>
														<div class="on_sale">
															<span>20% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:87%"></div>
														</div>
														<span class="rating_num">(25)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img11.jpg" alt="el_img11">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img11.jpg" alt="el_hover_img11">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">HDMI de alta velocidad</a></h6>
													<div class="product_price">
														<span class="price">S/69.00</span>
														<del>S/89.00</del>
														<div class="on_sale">
															<span>20% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:70%"></div>
														</div>
														<span class="rating_num">(22)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img12.jpg" alt="el_img12">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img12.jpg" alt="el_hover_img12">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Sirena</a></h6>
													<div class="product_price">
														<span class="price">S/45.00</span>
														<del>S/55.25</del>
														<div class="on_sale">
															<span>35% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
														<span class="rating_num">(21)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--PRODUCTOS OFERTAS ESPECIALES-->
								<div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
									<div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img2.jpg" alt="el_img2">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img2.jpg" alt="el_hover_img2">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Smart Watch</a></h6>
													<div class="product_price">
														<span class="price">S/55.00</span>
														<del>S/95.00</del>
														<div class="on_sale">
															<span>25% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:68%"></div>
														</div>
														<span class="rating_num">(15)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img5.jpg" alt="el_img5">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img5.jpg" alt="el_hover_img5">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Televisores Smart</a></h6>
													<div class="product_price">
														<span class="price">S/45.00</span>
														<del>S/55.25</del>
														<div class="on_sale">
															<span>35% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
														<span class="rating_num">(21)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img9.jpg" alt="el_img9">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img9.jpg" alt="el_hover_img9">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">oppo Reno3 Pro</a></h6>
													<div class="product_price">
														<span class="price">S/68.00</span>
														<del>S/99.00</del>
														<div class="on_sale">
															<span>20% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:87%"></div>
														</div>
														<span class="rating_num">(25)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img7.jpg" alt="el_img7">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img7.jpg" alt="el_hover_img7">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Radio Pequeño</a></h6>
													<div class="product_price">
														<span class="price">S/45.00</span>
														<del>S/55.25</del>
														<div class="on_sale">
															<span>35% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
														<span class="rating_num">(21)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img5.jpg" alt="el_img5">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img5.jpg" alt="el_hover_img5">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Televisores Smart</a></h6>
													<div class="product_price">
														<span class="price">S/45.00</span>
														<del>S/55.25</del>
														<div class="on_sale">
															<span>35% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
														<span class="rating_num">(21)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="product_wrap">
												<div class="product_img">
													<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
														<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img12.jpg" alt="el_img12">
														<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img12.jpg" alt="el_hover_img12">
													</a>
													<div class="product_action_box">
														<ul class="list_none pr_action_btn">
															<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
															<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product_info">
													<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Sirena</a></h6>
													<div class="product_price">
														<span class="price">S/45.00</span>
														<del>S/55.25</del>
														<div class="on_sale">
															<span>35% Descuento</span>
														</div>
													</div>
													<div class="rating_wrap">
														<div class="rating">
															<div class="product_rate" style="width:80%"></div>
														</div>
														<span class="rating_num">(21)</span>
													</div>
													<div class="pr_desc">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- FIN DE PRODUCTOS EXCLUSIVOS -->
<!-- 3 BANNERS-->
	<div class="section pb_20 small_pt">
		<div class="custom-container">
			<div class="row">
				<!--BANNER 1-->
				<div class="col-md-4">
					<div class="sale-banner mb-3 mb-md-4">
						<a class="hover_effect1" href="<?= _SERVER_ ?>Quispe/detalle_producto">
							<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img7.2.png" alt="shop_banner_img7">
						</a>
					</div>
				</div>
				<!--BANNER 2-->
				<div class="col-md-4">
					<div class="sale-banner mb-3 mb-md-4">
						<a class="hover_effect1" href="<?= _SERVER_ ?>Quispe/detalle_producto">
							<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img8.2.png" alt="shop_banner_img8">
						</a>
					</div>
				</div>
				<!--BANNER 3-->
				<div class="col-md-4">
					<div class="sale-banner mb-3 mb-md-4">
						<a class="hover_effect1" href="<?= _SERVER_ ?>Quispe/detalle_producto">
                            <img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img9.2.jpg" alt="shop_banner_img9">
                        </a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- FIN DE 3 BANNERS-->
<!-- OFERTAS DEL DÍA -->
	<div class="section pt-0 pb-0">
		<div class="custom-container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading_tab_header">
						<div class="heading_s2">
							<h4>OFERTA DEL DÍA</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="product_slider carousel_slider owl-carousel owl-theme nav_style3" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "650":{"items": "2"}, "1199":{"items": "2"}}'>
						<!--PRODUCTO 1-->
						<div class="item">
							<div class="deal_wrap">
								<div class="product_img">
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
										<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img1.jpg" alt="el_img1">
									</a>
								</div>
								<div class="deal_content">
									<div class="product_info">
										<h5 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Auricular Rojo y Negro</a></h5>
										<div class="product_price">
											<span class="price">S/45.00</span>
											<del>S/55.25</del>
										</div>
									</div>
									<div class="deal_progress">
										<span class="stock-sold">Vendido: <strong>6</strong></span>
										<span class="stock-available">Disponible: <strong>8</strong></span>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width:46%"> 46% </div>
										</div>
									</div>
									<div class="countdown_time countdown_style4 mb-4" data-time="2021/10/02 12:30:15"></div>
								</div>
							</div>
						</div>
						<!--PRODUCTO 2-->
						<div class="item">
							<div class="deal_wrap">
								<div class="product_img">
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
										<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img2.jpg" alt="el_img2">
									</a>
								</div>
								<div class="deal_content">
									<div class="product_info">
										<h5 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Smart Watch</a></h5>
										<div class="product_price">
											<span class="price">S/55.00</span>
											<del>S/95.00</del>
										</div>
									</div>
									<div class="deal_progress">
										<span class="stock-sold">Vendido: <strong>4</strong></span>
										<span class="stock-available">Disponible: <strong>22</strong></span>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:26%"> 26% </div>
										</div>
									</div>
									<div class="countdown_time countdown_style4 mb-4" data-time="2021/09/02 12:30:15"></div>
								</div>
							</div>
						</div>
						<!--PRODUCTO 3-->
						<div class="item">
							<div class="deal_wrap">
								<div class="product_img">
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
										<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img3.jpg" alt="el_img3">
									</a>
								</div>
								<div class="deal_content">
									<div class="product_info">
										<h5 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Cámara Nikon HD</a></h5>
										<div class="product_price">
											<span class="price">S/68.00</span>
											<del>S/99.25</del>
										</div>
									</div>
									<div class="deal_progress">
										<span class="stock-sold">Vendido: <strong>16</strong></span>
										<span class="stock-available">Disponible: <strong>20</strong></span>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width:28%"> 28% </div>
										</div>
									</div>
									<div class="countdown_time countdown_style4 mb-4" data-time="2021/11/02 12:30:15"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- FIN DE OFERTAS DEL DÍA -->
<!-- PRODUCTOS TENDENCIA -->
	<div class="section small_pt small_pb">
		<div class="custom-container">
			<div class="row">
				<!-- BANNER AZÚL-->
				<div class="col-xl-3 d-none d-xl-block">
					<div class="sale-banner">
						<a class="hover_effect1" href="<?= _SERVER_ ?>Quispe/detalle_producto">
							<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/shop_banner_img10.jpg" alt="shop_banner_img10">
						</a>
					</div>
				</div>
				<!-- FIN DE BANNER AZÚL-->
				<div class="col-xl-9">
					<!-- TÍTULO Y VER MÁS -->
					<div class="row">
						<div class="col-12">
							<div class="heading_tab_header">
								<div class="heading_s2">
									<h4>PRODUCTOS EN TENDENCIA</h4>
								</div>
								<div class="view_all">
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="text_default"><i class="linearicons-power"></i> <span>Ver Todo</span></a>
								</div>
							</div>
						</div>
					</div>
					<!-- FIN DE TÍTULO Y VER MÁS -->
					<!--CONTENEDOR DE LOS PRODUCTOS-->
					<div class="row">
						<div class="col-12">
							<div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>
								<!--PRODUCTO 1-->
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img2.jpg" alt="el_img2">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img2.jpg" alt="el_hover_img2">
											</a>
											<div class="product_action_box">
												<ul class="list_none pr_action_btn">
													<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Smart Watch</a></h6>
											<div class="product_price">
												<span class="price">S/55.00</span>
												<del>S/95.00</del>
												<div class="on_sale">
													<span>25% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:68%"></div>
												</div>
												<span class="rating_num">(15)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
								<!--PRODUCTO 2-->
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img5.jpg" alt="el_img5">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img5.jpg" alt="el_hover_img5">
											</a>
											<div class="product_action_box">
												<ul class="list_none pr_action_btn">
													<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Televisores Smart</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
								<!--PRODUCTO 3-->
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img9.jpg" alt="el_img9">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img9.jpg" alt="el_hover_img9">
											</a>
											<div class="product_action_box">
												<ul class="list_none pr_action_btn">
													<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">oppo Reno3 Pro</a></h6>
											<div class="product_price">
												<span class="price">S/68.00</span>
												<del>S/99.00</del>
												<div class="on_sale">
													<span>20% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:87%"></div>
												</div>
												<span class="rating_num">(25)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
								<!--PRODUCTO 4-->
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img7.jpg" alt="el_img7">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img7.jpg" alt="el_hover_img7">
											</a>
											<div class="product_action_box">
												<ul class="list_none pr_action_btn">
													<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Radio Pequeño</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
								<!--PRODUCTO 5-->
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img5.jpg" alt="el_img5">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img5.jpg" alt="el_hover_img5">
											</a>
											<div class="product_action_box">
												<ul class="list_none pr_action_btn">
													<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Televisores Smart</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
								<!--PRODUCTO 6-->
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img12.jpg" alt="el_img12">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img12.jpg" alt="el_hover_img12">
											</a>
											<div class="product_action_box">
												<ul class="list_none pr_action_btn">
													<li class="add-to-cart"><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-basket-loaded"></i> Añadir al carrito</a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
													<li><a href="<?= _SERVER_ ?>Quispe/detalle_producto"><i class="icon-heart"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Sound Equipment for Low</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--FIN DE CONTENEDOR DE LOS PRODUCTOS-->
				</div>
			</div>
		</div>
	</div>
<!-- FIN DE PRODUCTOS TENDENCIA -->
<!-- NUESTRAS MARCAS -->
	<div class="section pt-0 small_pb">
		<div class="custom-container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading_tab_header">
						<div class="heading_s2">
							<h4>NUESTRAS MARCAS</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}, "1199":{"items": "6"}}'>
						<div class="item">
							<div class="cl_logo">
								<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/cl_logo1.png" alt="cl_logo"/>
							</div>
						</div>
						<div class="item">
							<div class="cl_logo">
								<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/cl_logo2.png" alt="cl_logo"/>
							</div>
						</div>
						<div class="item">
							<div class="cl_logo">
								<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/cl_logo4.png" alt="cl_logo"/>
							</div>
						</div>
						<div class="item">
							<div class="cl_logo">
								<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/cl_logo5.png" alt="cl_logo"/>
							</div>
						</div>
						<div class="item">
							<div class="cl_logo">
								<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/cl_logo6.png" alt="cl_logo"/>
							</div>
						</div>
						<div class="item">
							<div class="cl_logo">
								<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/cl_logo7.png" alt="cl_logo"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- FIN DE NUESTRAS MARCAS -->
<!-- DESTACADOS, CALIFICADOS Y OFERTA -->
	<div class="section pt-0 pb_20">
		<div class="custom-container">
			<div class="row">
				<!--PRODUCTOS DESTACADOS-->
				<div class="col-lg-4">
					<!--TÍTULO-->
					<div class="row">
						<div class="col-12">
							<div class="heading_tab_header">
								<div class="heading_s2">
									<h4>Destacados</h4>
								</div>
								<div class="view_all">
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="text_default"><span>Ver Todo</span></a>
								</div>
							</div>
						</div>
					</div>
					<!--PRODUCTOS-->
					<div class="row">
						<div class="col-12">
							<div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img2.jpg" alt="el_img2">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img2.jpg" alt="el_hover_img2">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Smart Watch</a></h6>
											<div class="product_price">
												<span class="price">S/55.00</span>
												<del>S/95.00</del>
												<div class="on_sale">
													<span>25% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:68%"></div>
												</div>
												<span class="rating_num">(15)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img1.jpg" alt="el_img1">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img1.jpg" alt="el_hover_img1">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Auricular Rojo y Negro</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<span class="pr_flash">Nuevo</span>
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img3.jpg" alt="el_img3">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img3.jpg" alt="el_hover_img3">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Cámara Nikon HD</a></h6>
											<div class="product_price">
												<span class="price">S/68.00</span>
												<del>S/99.00</del>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:87%"></div>
												</div>
												<span class="rating_num">(25)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img5.jpg" alt="el_img5">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img5.jpg" alt="el_hover_img5">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Televisores Smart</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img9.jpg" alt="el_img9">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img9.jpg" alt="el_hover_img9">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">oppo Reno3 Pro</a></h6>
											<div class="product_price">
												<span class="price">S/68.00</span>
												<del>S/99.00</del>
												<div class="on_sale">
													<span>20% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:87%"></div>
												</div>
												<span class="rating_num">(25)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img7.jpg" alt="el_img7">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img7.jpg" alt="el_hover_img7">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Radio Pequeño</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--MEJOR CALIFICADOS-->
				<div class="col-lg-4">
					<!--TÍTULO-->
					<div class="row">
						<div class="col-12">
							<div class="heading_tab_header">
								<div class="heading_s2">
									<h4>Mejor Calificados</h4>
								</div>
								<div class="view_all">
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="text_default"><span>Ver Todo</span></a>
								</div>
							</div>
						</div>
					</div>
					<!--PRODUCTOS-->
					<div class="row">
						<div class="col-12">
							<div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img5.jpg" alt="el_img5">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img5.jpg" alt="el_hover_img5">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Televisores Smart</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img12.jpg" alt="el_img12">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img12.jpg" alt="el_hover_img12">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Sirena</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img4.jpg" alt="el_img4">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img4.jpg" alt="el_hover_img4">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Equipo de Sonido</a></h6>
											<div class="product_price">
												<span class="price">S/69.00</span>
												<del>S/89.00</del>
												<div class="on_sale">
													<span>20% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:70%"></div>
												</div>
												<span class="rating_num">(22)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="product_wrap">
										<span class="pr_flash bg-danger">Hot</span>
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img6.jpg" alt="el_img6">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img6.jpg" alt="el_hover_img6">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Celular Samsung</a></h6>
											<div class="product_price">
												<span class="price">S/55.00</span>
												<del>S/95.00</del>
												<div class="on_sale">
													<span>25% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:68%"></div>
												</div>
												<span class="rating_num">(15)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<span class="pr_flash bg-danger">Hot</span>
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img8.jpg" alt="el_img8">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img8.jpg" alt="el_hover_img8">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Cámara de Vigilancia</a></h6>
											<div class="product_price">
												<span class="price">S/55.00</span>
												<del>S/95.00</del>
												<div class="on_sale">
													<span>25% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:68%"></div>
												</div>
												<span class="rating_num">(15)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<span class="pr_flash bg-success">Sale</span>
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img10.jpg" alt="el_img10">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img10.jpg" alt="el_hover_img10">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Auricular Clásico</a></h6>
											<div class="product_price">
												<span class="price">S/68.00</span>
												<del>S/99.00</del>
												<div class="on_sale">
													<span>20% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:87%"></div>
												</div>
												<span class="rating_num">(25)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!--EN OFERTA-->
				<div class="col-lg-4">
                    <!--TÍTULO-->
					<div class="row">
						<div class="col-12">
							<div class="heading_tab_header">
								<div class="heading_s2">
									<h4>EN OFERTA</h4>
								</div>
								<div class="view_all">
									<a href="<?= _SERVER_ ?>Quispe/detalle_producto" class="text_default"><span>Ver Todo</span></a>
								</div>
							</div>
						</div>
					</div>
                    <!--PRODUCTOS-->
					<div class="row">
						<div class="col-12">
							<div class="product_slider carousel_slider product_list owl-carousel owl-theme nav_style5" data-nav="true" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "380":{"items": "1"}, "640":{"items": "2"}, "991":{"items": "1"}}'>
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img11.jpg" alt="el_img11">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img11.jpg" alt="el_hover_img11">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">HDMI de alta velocidad</a></h6>
											<div class="product_price">
												<span class="price">S/69.00</span>
												<del>S/89.00</del>
												<div class="on_sale">
													<span>20% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:70%"></div>
												</div>
												<span class="rating_num">(22)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img7.jpg" alt="el_img7">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img7.jpg" alt="el_hover_img7">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Radio Pequeño</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">

												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<span class="pr_flash bg-danger">Hot</span>
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img8.jpg" alt="el_img8">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img8.jpg" alt="el_hover_img8">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Cámara de Vigilancia</a></h6>
											<div class="product_price">
												<span class="price">S/55.00</span>
												<del>S/95.00</del>
												<div class="on_sale">
													<span>25% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:68%"></div>
												</div>
												<span class="rating_num">(15)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img5.jpg" alt="el_img5">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img5.jpg" alt="el_hover_img5">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Televisores Smart</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img9.jpg" alt="el_img9">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img9.jpg" alt="el_hover_img9">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">oppo Reno3 Pro</a></h6>
											<div class="product_price">
												<span class="price">S/68.00</span>
												<del>S/99.00</del>
												<div class="on_sale">
													<span>20% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:87%"></div>
												</div>
												<span class="rating_num">(25)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
									<div class="product_wrap">
										<div class="product_img">
											<a href="<?= _SERVER_ ?>Quispe/detalle_producto">
												<img src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_img1.jpg" alt="el_img1">
												<img class="product_hover_img" src="<?= _SERVER_._STYLES_F_ ?>assets/images/el_hover_img1.jpg" alt="el_hover_img1">
											</a>
										</div>
										<div class="product_info">
											<h6 class="product_title"><a href="<?= _SERVER_ ?>Quispe/detalle_producto">Auricular Rojo y Negro</a></h6>
											<div class="product_price">
												<span class="price">S/45.00</span>
												<del>S/55.25</del>
												<div class="on_sale">
													<span>35% Descuento</span>
												</div>
											</div>
											<div class="rating_wrap">
												<div class="rating">
													<div class="product_rate" style="width:80%"></div>
												</div>
												<span class="rating_num">(21)</span>
											</div>
											<div class="pr_desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- FIN DE DESTACADOS, CALIFICADOS Y OFERTA -->
<!-- SUSCRIBIRSE -->
	<div class="section bg_default small_pt small_pb">
		<div class="custom-container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="newsletter_text text_white">
						<h3>Suscríbete Ahora</h3>
						<p>Regístrese ahora para recibir actualizaciones sobre promociones. </p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="newsletter_form2 rounded_input">
						<form>
							<input type="text" required="" class="form-control" placeholder="Ingrese su Email">
							<button type="submit" class="btn btn-dark btn-radius" name="submit" value="Submit">Suscribirse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- FIN DE SUSCRIBIRSE -->
</div>
<!-- FIN DE CONTENIDO PRINCIPAL -->
