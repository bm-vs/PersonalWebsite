<div class="container-fluid" id="search-body">

	<!-------------------------------------------------------------------------------------------------------------------------->
	<!-- Side -->
	<!-- Mobile extras -->
	<button onclick="openNav()" class="btn btn-default hidden-sm hidden-md hidden-lg" id="side-nav-bttn" type="submit">
		<span class="glyphicon glyphicon-menu-hamburger"></span>
	</button>
	
	<div id="search-mobile-background-filter" class="hidden-xs hidden-sm hidden-md hidden-lg mobile-background-filter" onclick="closeNav()"></div>
	
	<!-- Filters nav -->
	<nav class="panel-group sidenav hidden-xs visible-sm-block visible-md-block visible-lg-block" id="search-filters">
		<a href="javascript:void(0)" class="closebtn hidden-sm hidden-md hidden-lg" onclick="closeNav()">&times;</a>
	
		<!-- Category -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#filter-categories">Categories</a></h4>
			</div>
			<div id="filter-categories" class="panel-collapse collapse in">
				<ul class="list-group">
					<?php
						$categories = array("Smartphones", "Tablets", "Laptop");				

						for ($i = 0; $i < sizeof($categories); $i++) {
							echo "<li class='list-group-item'><label for='ccb$i'>",
								$categories[$i],
								"</label><div class='custom-checkbox'><input id='ccb$i' type='checkbox' value=''><label for='ccb$i'></label></div></li>";
						}
					?>
				</ul>
			</div>
		</div>
		
		<!-- Price -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#filter-price">Price</a></h4>
			</div>
			<div id="filter-price" class="panel-collapse collapse in">
				<label for="filter-price-amount">Range:</label>
				<input type="text" id="filter-price-amount" readonly>
				<div id="filter-price-slider"></div>
			</div>
		</div>
		
		<!-- Brand -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#filter-brands">Brand</a></h4>
			</div>
			<div id="filter-brands" class="panel-collapse collapse in">
				<ul class="list-group">
					<?php
						$brands = array("Samsung", "Apple", "Nokia");				

						for ($i = 0; $i < sizeof($brands); $i++) {
							echo "<li class='list-group-item'><label for='bcb$i'>",
								$brands[$i],
								"</label><div class='custom-checkbox'><input id='bcb$i' type='checkbox' value=''><label for='bcb$i'></label></div></li>";
						}
					?>
				</ul>
			</div>
		</div>
		
		<!-- On sale -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#filter-onsale">On sale</a></h4>
			</div>
			<div id="filter-onsale" class="panel-collapse collapse in">
				<ul class="list-group">
					<li class="list-group-item"><label for="scb">On sale</label><div class="custom-checkbox"><input id="scb" type="checkbox" value=""><label for="scb"></label></div></li>
				</ul>
			</div>
		</div>
		
		<!-- Rating -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" href="#filter-rating">Rating</a></h4>
			</div>
			<div id="filter-rating" class="panel-collapse collapse in">
				<div class="rating">
					<!-- stars -->
					<input id="rating-input-1" type="radio" value="1" name="rating-input"/>
					<label class="rating-star" for="rating-input-1"></label>
					<input id="rating-input-2" type="radio" value="2" name="rating-input"/>
					<label class="rating-star" for="rating-input-2"></label>
					<input id="rating-input-3" type="radio" value="3" name="rating-input"/>
					<label class="rating-star" for="rating-input-3"></label>
					<input id="rating-input-4" type="radio" value="4" name="rating-input"/>
					<label class="rating-star" for="rating-input-4"></label>
					<input id="rating-input-5" type="radio" value="5" name="rating-input"/>
					<label class="rating-star" for="rating-input-5"></label>
					<span>&nbsp & up</span>
				</div>
			</div>
		</div>
	</nav>

	<!-------------------------------------------------------------------------------------------------------------------------->
	<!-- Top -->
	<nav id="search-display">
		<!-- Square/List -->
		<button class="btn btn-default" id="search-display-bttn">
			<span class="glyphicon glyphicon-th-large"></span>
		</button>
		
		<!-- Order by -->
		<div class="dropdown" id="search-order">
			<button class="btn btn-default dropdown-toggle" id="search-order-bttn" data-toggle="dropdown">
				Sort by: &nbsp;&nbsp;<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Relevant</a></li>
				<li><a href="#">Higher price</a></li>
				<li><a href="#">Lower price</a></li>
				<li><a href="#">Most sold</a></li>
				<li><a href="#">Best rating</a></li>
				<li><a href="#">Date released</a></li>
				<li><a href="#">Name: A -> Z</a></li>
				<li><a href="#">Name: Z -> A</a></li>
			</ul>
		</div>
	</nav>
	<hr>

	<!------------------------------------------------------------------------------------------------------------------------->
	<!-- Center -->
	<div class="items-display" id="search-results">		
		<?php
			$n_products = 10;				

			for ($i = 0; $i < $n_products; $i++) {
		?>
				<div class="product-mosaic col-lg-3 col-md-4 col-sm-6 col-xs-6">
					<div class="product-image-container">
						<img src="../resources/products/xiaomi_mi5.png" alt="xiaomi_mi5">
					</div>
					<div class="product-info-container">
						<div class="center-block">
							<div class="list-left-container">
								<div class="name"><a>Xiaomi MI5</a></div>
								<div class="type-brand"><a>Smartphone</a> - <a>Xiaomi</a></div>
						
							</div>
							<div class="list-middle-container">
								<div class="available"><span class="glyphicon glyphicon-ok"></span>&nbsp; Available</div>
								<div class="rating"><img src="../resources/star.png"><img src="../resources/star.png"><img src="../resources/star.png"><img src="../resources/star.png"></div>					
							</div>
							<div class="list-right-container">			
								<div class="price">300,00€</div>
								<button class="btn btn-default" id="product-fav-bttn">
									<span class="glyphicon glyphicon-heart"></span>
								</button>
								<button class="btn btn-default" id="product-cart-bttn">
									<span class="glyphicon glyphicon-shopping-cart"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		?>
	</div>

</div>
