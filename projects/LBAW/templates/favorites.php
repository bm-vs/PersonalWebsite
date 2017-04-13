<div class="container-fluid" id="favorites-body">
	<h1>Favorites</h1>
	<hr>
	
	<div class="items-display" id="cart-results">		
		<?php
			$n_products = 5;				

			for ($i = 0; $i < $n_products; $i++) {
		?>
				<div class="product-list">
					<button type="button" class="btn remove-favorites-item">
						<span class="glyphicon glyphicon-remove"></span>
					</button>
				
					<div class="product-image-container">
						<img src="../resources/products/xiaomi_mi5.png" alt="xiaomi_mi5">
					</div>
					<div class="product-info-container">
						<div class="row">						
							<div class="list-left-container col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="name"><a>Xiaomi MI5</a></div>
								<div class="type-brand"><a>Smartphone</a> - <a>Xiaomi</a></div>
						
							</div>
							<div class="list-middle-container col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="available"><span class="glyphicon glyphicon-ok"></span>&nbsp; Available</div>
								<div class="rating1"><img src="../resources/star.png"><img src="../resources/star.png"><img src="../resources/star.png"><img src="../resources/star.png"></div>					
							</div>
							<div class="list-right-container col-lg-4 col-md-4 col-sm-4 col-xs-12">			
								<div class="price">300,00€</div>
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