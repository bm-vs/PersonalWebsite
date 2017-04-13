$(document).ready(function(){
	$('.remove-favorites-item').click(function() {
		$(this).parent().remove();
	});
	
	$('.product-image-container').click(function() {
		window.location.href = "product.php";
	});
	
	$('.product-info-container .name').click(function() {
		window.location.href = "product.php";
	});
});