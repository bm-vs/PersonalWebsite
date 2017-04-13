<div class="container-fluid" id="cart-body">
	<h1>Shopping cart</h1>
	<hr>
	
	<div class="checkout-cart">
		<span class="checkout-subtotal">Subtotal: <span class="checkout-subtotal-value"></span></span>
		<button type="button" class="btn checkout-button ">Order</button>
	</div>
	
	<div class="items-display" id="cart-results">		
		<?php
			$n_products = 5;				

			for ($i = 0; $i < $n_products; $i++) {
		?>
				<div class="product-list">
					<button type="button" class="btn remove-cart-item">
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
								<div class="available"><span class="glyphicon glyphicon-ok"></span>&nbsp; Available</div>
								<div class="rating"><img src="../resources/star.png"><img src="../resources/star.png"><img src="../resources/star.png"><img src="../resources/star.png"></div>
							</div>
							<div class="list-middle-container col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="price"><span class="price-value">300,00</span>€</div>
							</div>
							<div class="list-right-container col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
								<input type="text" name="quantity" class="form-control input-number" value="1" min="1" max="60" readonly>
								<button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		?>
	</div>
	
	<div class="checkout-cart">
		<span class="checkout-subtotal">Subtotal: <span class="checkout-subtotal-value"></span></span>
		<button type="button" class="btn checkout-button ">Order</button>
	</div>
	
</div>