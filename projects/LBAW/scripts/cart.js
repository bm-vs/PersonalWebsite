$(document).ready(function(){
	calculateSubtotal();
	
	function calculateSubtotal() {
		var subtotal = 0;
		
		$('.price-value').each(function() {
			value = parseInt($(this).text());
			quantity = parseInt($(this).closest(".product-info-container").find("input").val());
			subtotal += value * quantity;
		});
		
		$('.checkout-subtotal-value').text(subtotal + "€");
	}
	
    $('.quantity-right-plus').click(function(){
        var quantity = parseInt($(this).siblings('input').val());
        if(quantity < 60) {
            $(this).siblings('input').val(quantity + 1);
        }
		calculateSubtotal();
    });

    $('.quantity-left-minus').click(function(){
        var quantity = parseInt($(this).siblings('input').val());
        if(quantity > 1){
            $(this).siblings('input').val(quantity - 1);
        }
		calculateSubtotal();
    });
	
	$('.remove-cart-item').click(function() {
		$(this).parent().remove();
		calculateSubtotal();
	});
	
	$('.product-image-container').click(function() {
		window.location.href = "product.php";
	});
	
	$('.product-info-container .name').click(function() {
		window.location.href = "product.php";
	});

});