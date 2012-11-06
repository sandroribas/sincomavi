var $j = jQuery.noConflict();
$j(document).ready(function(){
		/*---SLIDER-----*/
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
		/*---FIM DO SLIDER-----*/
});

/*---MENU-----*/
		$j("#nav-topo ul li").each(function() {
 
        var el = $('#' + $(this).attr('id') + ' ul:eq(0)'); 
 
        $j(this).hover(function() {
            var n_left = $(this).position().left + 0;
            var n_top = $(this).position().top + 167;
            var n_width = $(this).width() + 10;
 
            el.css('left', n_left);
            el.css('top', n_top);
            el.css('width', n_width);
            el.show();
        }, function(){
            el.hide();
        });
    });
	
	/*---ANIMAÇÃO MENU-----*/
	$j(function(){
	$j('#nav-topo li a')
			.css( {backgroundPosition: "0px -167px"} )
			.mouseover(function(){
				$j(this).stop().animate({backgroundPosition:"(0px 0px)"}, {duration:500})
				
			})
			.mouseout(function(){
				$j(this).stop().animate({backgroundPosition:"(0px -167px)"}, {duration:200, complete:function(){
					$j(this).css({backgroundPosition: "0px -167px"})
				}})
			})
	});
	/*---FIM DO MENU-----*/