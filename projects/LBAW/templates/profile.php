<div class="container-fluid" id="profile-body">
    <!-- Profile -->
	<h1>Your profile</h1>
	<hr>
	<div class="profile-content">
		<ul class="nav nav-pills">
			<li class="active">
				<a data-toggle="pill" href="#accountInfo">
					<h2> <i class="fa fa-address-card-o" ></i>&nbsp; Account Info</h2>
				</a>
			</li>
			<li>
				<a data-toggle="pill" href="#security">
					<h2> <i class="fa fa-lock" ></i>&nbsp; Security</h2>
				</a>
			</li>
			<li>
				<a data-toggle="pill" href="#myAddresses">
					<h2> <i class="fa fa-map-marker" ></i>&nbsp; My Addresses</h2>
				</a>
			</li>
			<li>
				<a data-toggle="pill" href="#myOrders">
					<h2> <i class="fa fa-list-alt" ></i>&nbsp; My Orders</h2>
				</a>
			</li>
		</ul>
	
		<div class="tab-content">
			<!-- Account Info -->
			<div id="accountInfo" class="tab-pane in active">
                <div class="row">
                    <div class="col-sm-2">
                        <b>Avatar:</b>
                    </div>
                    <div class="col-sm-8">
                        <div class="avatar-image-container">
                            <img src="../resources/avatar.png" class="media-object">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <b>First Name:</b>
                    </div>
                    <div class="col-sm-8">
                        <p>Augustus</p>
                    </div>
                </div>
				<div class="row">
					<div class="col-sm-2">
						<b>Last Name:</b>
					</div>
					<div class="col-sm-8">
						<p>Caesar</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<b>E-mail address:</b>
					</div>
					<div class="col-sm-8">
						<p>augustus@romail.com</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<b>Country:</b>
					</div>
					<div class="col-sm-8">
						<p>Roman Empire</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<button type="button" class="btn btn-primary btn-block profileButton">Edit</button>
					</div>
				</div>
			</div>

			<!-- Security -->
			<div id="security" class="tab-pane">
				<div class="row">
					<div class="col-sm-2">
						<b>Password:</b>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="password" class="form-control" id="oldpwd" placeholder="Old Password">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" placeholder="New Password">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="password" class="form-control" id="newpwd" placeholder="Confirm">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-2">
						<button type="button" class="btn btn-primary btn-block profileButton">Save</button>
					</div>
				</div>
			</div>

			<!-- My Addresses -->
			<div id="myAddresses" class="tab-pane">
				<ul class="row list-unstyled">
					<li class="col-sm-6 col-md-6">
						<div class="adressCard">
							<p>Augustus Caesar</p>
							<p>Street 1, Door 1</p>
							<p>Roma 1000</p>
							<p>Roma</p>
							<p>Roman Empire</p>
							<p>Tel:+39 06 6485 0987</p>
							<button type="button" class="btn btn-primary btn-block profileButton">Default</a></button>
							<button type="button" class="btn btn-primary btn-block profileButton"><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-primary btn-block profileButton delete-address"><i class="fa fa-trash"></i></button>
						</div>
					</li>
					<li class="col-sm-6 col-md-6">
						<div class="adressCard">
							<p>Cleopatra</p>
							<p>Street 1, Door 1</p>
							<p>Cairo 1000</p>
							<p>Cairo</p>
							<p>Egyptian Empire</p>
							<p>Tel:+20 101 701 7003</p>
							<button type="button" class="btn btn-primary btn-block profileButton">Default</a></button>
							<button type="button" class="btn btn-primary btn-block profileButton"><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-primary btn-block profileButton delete-address"><i class="fa fa-trash"></i></button>
						</div>
					</li>


					<li class="col-sm-6 col-md-6">
						<button type="button" class="btn btn-primary btn-block profileButton">Add</button>
					</li>
				</ul>
			</div>

			<!-- My Orders -->
			<div id="myOrders" class="tab-pane">
				<div class="list-group panel" id="orders">
					<!--ORDER-->
					<div class="container-fluid">
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<a href="#order1" class="list-group-item" data-toggle="collapse" id="orderNumber">
								Order Number: BAT00710235
								<i class="fa fa-caret-down"></i>
							</a>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">
							<h5 class="orderDate">Sep 12, 2016 09:10:22 AM</h5>
						</div>
					</div>
					<div class="collapse order" id="order1">
						<!--TRACKING-->
						<div class="tracking">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center" id="filler">
									<i class="fa fa-check-square-o" style="font-size:25px"></i>
									<h5>Order Placed</h5>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center">
									<i class="fa fa-money" style="font-size:25px"></i>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
									<i class="fa fa fa-check-square-o" style="font-size:25px"></i>
									<h5>Payment Received</h5>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center">
									<i class="fa fa-gift" style="font-size:25px"></i>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
									<i class="fa fa fa-check-square-o" style="font-size:25px"></i>
									<h5>Dispatched</h5>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center">
									<i class="fa fa-plane" style="font-size:25px"></i>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
									<i class="fa fa fa-check-square-o" style="font-size:25px"></i>
									<h5>Delivered</h5>
								</div>
							</div>
						</div>
						<!--SHIPPING INFO-->
						<div class="shippingInfo">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<p><i>Shipping Method:</i></p>
									<p>Standard</p>
                                    <p><i>Payment Method:</i></p>
									<p>Paypal</p>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<div>
                                        <p><i>Billing Address:</i></p>
										<p>Augustus Caesar</p>
										<p>Street 1, Door 1</p>
										<p>Roma 1000</p>
										<p>Roma</p>
										<p>Roman Empire</p>
										<p>Tel:+39 06 6485 0987</p>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<div>
                                        <p><i>Shipping Address:</i></p>
										<p>Augustus Caesar</p>
										<p>Street 1, Door 1</p>
										<p>Roma 1000</p>
										<p>Roma</p>
										<p>Roman Empire</p>
										<p>Tel:+39 06 6485 0987</p>
									</div>
								</div>
							</div>
						</div>
						<!--SHIPPING CONTENTS-->
						<div class="shippingContents">
							<?php
							$n_products = 5;

							for ($i = 0; $i < $n_products; $i++) {
								?>
								<div class="product-list">
									<div class="product-image-container">
										<img src="../resources/products/xiaomi_mi5.png" alt="xiaomi_mi5">
									</div>
									<div class="product-info-container">
										<div class="row">
											<div class="list-left-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="name"><a>Xiaomi MI5</a></div>
												<div class="type-brand"><a>Smartphone</a> - <a>Xiaomi</a></div>
											</div>
											<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
												<div class="price"><span class="price-value">300,00</span>€</div>
											</div>
											<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
												<div class="quantity"><span class="price-value">x 1</span></div>
											</div>
											<div class="list-right-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
												<div class="price"><span class="price-value">300,00</span>€</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
						<!--SHIPPING PRICE-->
						<div class="shippingPrice">
							<div class="row">
								<div class="list-left-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="price">Subtotal: <span class="price-value">1500,00</span>€</div>
								</div>
								<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="price">Discount: <span class="price-value">0,00</span>€</div>
								</div>
								<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="price">Tax: <span class="price-value">0,00</span>€</div>
								</div>
								<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="price">Shipping: <span class="price-value">0,00</span>€</div>
								</div>
								<div class="list-middle-container col-lg-4 col-md-4 col-sm-4 col-xs-12" align="right">
									<div class="price">Grand Total: <span class="price-value">1500,00</span>€</div>
								</div>
							</div>
						</div>
					</div>



					<!--ORDER-->
					<div class="container-fluid">
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<a href="#order2" class="list-group-item" data-toggle="collapse" id="orderNumber">
								Order Number: BAT00905742
								<i class="fa fa-caret-down"></i>
							</a>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">
							<h5 class="orderDate">Nov 28, 2016 20:23:41 AM</h5>
						</div>
					</div>
					<div class="collapse order" id="order2">
						<!--TRACKING-->
						<div class="tracking">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center" id="filler">
									<i class="fa fa-check-square-o" style="font-size:25px"></i>
									<h5>Order Placed</h5>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center">
									<i class="fa fa-money" style="font-size:25px"></i>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
									<i class="fa fa fa-check-square-o" style="font-size:25px"></i>
									<h5>Payment Received</h5>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center">
									<i class="fa fa-gift" style="font-size:25px"></i>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
									<i class="fa fa fa-check-square-o" style="font-size:25px"></i>
									<h5>Dispatched</h5>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center">
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
									<i class="fa fa fa-square-o" style="font-size:25px"></i>
									<h5>Delivered</h5>
								</div>
							</div>
						</div>
						<!--SHIPPING INFO-->
						<div class="shippingInfo">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <p><i>Shipping Method:</i></p>
                                    <p>Standard</p>
                                    <p><i>Payment Method:</i></p>
                                    <p>Paypal</p>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<div>
                                        <p><i>Billing Address:</i></p>
										<p>Augustus Caesar</p>
										<p>Street 1, Door 1</p>
										<p>Roma 1000</p>
										<p>Roma</p>
										<p>Roman Empire</p>
										<p>Tel:+39 06 6485 0987</p>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<div>
                                        <p><i>Shipping Address:</i></p>
                                        <p>Cleopatra</p>
                                        <p>Street 1, Door 1</p>
                                        <p>Cairo 1000</p>
                                        <p>Cairo</p>
                                        <p>Egyptian Empire</p>
                                        <p>Tel:+20 101 701 7003</p>
									</div>
								</div>
							</div>
						</div>
						<!--SHIPPING CONTENTS-->
						<div class="shippingContents">
							<?php
							$n_products = 5;

							for ($i = 0; $i < $n_products; $i++) {
								?>
								<div class="product-list">
									<div class="product-image-container">
										<img src="../resources/products/xiaomi_mi5.png" alt="xiaomi_mi5">
									</div>
									<div class="product-info-container">
										<div class="row">
											<div class="list-left-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="name"><a>Xiaomi MI5</a></div>
												<div class="type-brand"><a>Smartphone</a> - <a>Xiaomi</a></div>
											</div>
											<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
												<div class="price"><span class="price-value">300,00</span>€</div>
											</div>
											<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
												<div class="quantity"><span class="price-value">x 1</span></div>
											</div>
											<div class="list-right-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
												<div class="price"><span class="price-value">300,00</span>€</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
						<!--SHIPPING PRICE-->
						<div class="shippingPrice">
							<div class="row">
								<div class="list-left-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="price">Subtotal: <span class="price-value">1500,00</span>€</div>
								</div>
								<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="price">Discount: <span class="price-value">0,00</span>€</div>
								</div>
								<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="price">Tax: <span class="price-value">0,00</span>€</div>
								</div>
								<div class="list-middle-container col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<div class="price">Shipping: <span class="price-value">0,00</span>€</div>
								</div>
								<div class="list-middle-container col-lg-4 col-md-4 col-sm-4 col-xs-12" align="right">
									<div class="price">Grand Total: <span class="price-value">1500,00</span>€</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
    </div>
</div>