jQuery(function($){
	$(".gform_wrapper form").on("submit", function(e){
		b = $("input[type=submit]", this);
		b.attr("disabled", true);
		b.css("background", "darkgray");
		b.css("color", "black");
		b.val("Verwerken…");
	});
});
