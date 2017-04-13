$(document).ready(function() {
	$("#types a").click(function() {
		$("#search-order-bttn").html($(this).text() + " &nbsp;&nbsp;<span class='caret'></span>");
	});
});