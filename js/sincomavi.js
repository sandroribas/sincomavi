var $j = jQuery.noConflict();
$j(document).ready(function(){
		$j(function(){
			$j('#slider-topo').slides({
				preload: true,
				preloadImage: './wp-content/themes/sincomavi/img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$j('.caption').animate({
						opacity:0
					},500);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$j('.caption').animate({
						opacity:1
					},500);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$j('.caption').animate({
						opacity:1
					},500);
				}
			});
		});
});