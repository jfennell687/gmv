/*******

	***	Anchor Slider by Cedric Dugas   ***
	*** Http://www.position-absolute.com ***
	
	Never have an anchor jumping your content, slide it.

	Don't forget to put an id to your anchor !
	You can use and modify this script for any project you want, but please leave this comment as credit.
	
*****/
		


jQuery(document).ready(function() {
	jQuery("a.anchorLink").anchorAnimate();

	if(jQuery('body').hasClass('newsletter'))
	{
		var content = jQuery('.newsletter #content');
		var	sidebar = jQuery('.newsletter #sidebar');
		var	contentTop = content.offset().top;

		jQuery(window).scroll(function() {
			var y = jQuery(this).scrollTop();

			if(y >= contentTop)
			{
				sidebar.css({'position': 'fixed', 'top': 0});
			}
			else
			{
				sidebar.css({'position': 'absolute'});
			}
		});
	}
});

jQuery.fn.anchorAnimate = function(settings) {

 	settings = jQuery.extend({
		speed : 400
	}, settings);	
	
	return this.each(function(){
		var caller = jQuery(this);
		caller.click(function (event) {	
			event.preventDefault();
			var locationHref = window.location.href;
			var elementClick = caller.attr("href");

			var destination = jQuery(elementClick).offset().top;
			jQuery("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
				window.location.hash = elementClick
			});
		  	return false;
		})
	})
}