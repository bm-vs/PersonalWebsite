<div class="container-fluid" id="category-body">
	<h1>Smartphones</h1>
	<hr>
	<div class="items-display">
		<h2>New &nbsp;<a href="search.php"><span class="view-more">More >></span></a></h2>
	<?php
			$n_products = 5;				

			for ($i = 0; $i < $n_products; $i++) {
		?>
				<div class="product-mosaic col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="product-image-container">
						<img src="../resources/products/xiaomi_mi5.png" alt="xiaomi_mi5">
					</div>
					<div class="product-info-container">
						<div class="center-block">
							<div class="name"><a>Xiaomi MI5</a></div>
							<div class="type-brand"><a>Smartphone</a> - <a>Xiaomi</a></div>
					
								
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
		<?php
			}
		?>
	</div>
	
	<div class="items-display">
		<h2>Best sellers &nbsp;<a href="search.php"><span class="view-more">More >></span></a></h2>
	<?php
			$n_products = 6;				

			for ($i = 0; $i < $n_products; $i++) {
		?>
				<div class="product-mosaic col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="product-image-container">
						<img src="../resources/products/xiaomi_mi5.png" alt="xiaomi_mi5">
					</div>
					<div class="product-info-container">
						<div class="center-block">
							<div class="name"><a>Xiaomi MI5</a></div>
							<div class="type-brand"><a>Smartphone</a> - <a>Xiaomi</a></div>
					
								
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
		<?php
			}
		?>
	</div>
</div>