jQuery(function($){
	$("gform_wrapper form").on("submit", function(e){
		e.preventDefault();
		b = $(this);
		b.attr("disabled", true);
		b.css("background", "darkgray"); 
		b.css("color", "black"); 
		b.val("Verwerken…");		
	});
});