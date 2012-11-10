var $j = jQuery.noConflict();	
$j(document).ready(function(){
		/*estilizando os selects*/
		if (!$j.browser.opera) {
    
			// select element styling
			$j('select.select').each(function(){
				var title = $j(this).attr('title');
				if( $j('option:selected', this).val() != ''  ) title = $j('option:selected',this).text();
				$j(this)
					.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
					.after('<span class="select-span">' + title + '</span>')
					.change(function(){
						val = $j('option:selected',this).text();
						$j(this).next().text(val);
						})
			});

		};
		
		
		/*---SLIDER-----*/
		$j(function(){
			$j('#slider-topo').slides({
				preload: true,
				preloadImage: './wp-content/themes/sincomavi/img/loading.gif',
				play: 10000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$j('.caption').animate({
						opacity:0
					},1000);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$j('.caption').animate({
						opacity:1
					},1000);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$j('.caption').animate({
						opacity:1
					},1000);
				}
			});
		});
		/*---FIM DO SLIDER-----*/	
		
		//Faux columns 1
		function mesmaAltura(noticiasJS, anunciosJS){
			noticiasJSAltura = $j(noticiasJS).height();
			anunciosJSAltura = $j(anunciosJS).height();
			maiorAltura = Math.max(noticiasJSAltura, anunciosJSAltura);
			
			$j(noticiasJS).height(maiorAltura);
			$j(anunciosJS).height(maiorAltura);
		};
		mesmaAltura('#noticias-home','#col2-home');
		
		//Faux columns 2
		function mesmaAlturaJ(noticiasJ, anunciosJ){
			noticiasJAltura = $j(noticiasJ).height();
			anunciosJAltura = $j(anunciosJ).height();
			maiorAlturaJ = Math.max(noticiasJAltura, anunciosJAltura);
			
			$j(noticiasJ).height(maiorAlturaJ);
			$j(anunciosJ).height(maiorAlturaJ);
		};
		mesmaAlturaJ('#noticias-home','#anuncios-home');
		
		//Faux columns 3
		function mesmaAlturaJA(noticiasJA, anunciosJA){
			noticiasJAAltura = $j(noticiasJA).height();
			anunciosJAAltura = $j(anunciosJA).height();
			maiorAlturaJA = Math.max(noticiasJAAltura, anunciosJAAltura);
			
			$j(noticiasJA).height(maiorAlturaJA);
			$j(anunciosJA).height(maiorAlturaJA);
		};
		mesmaAlturaJA('#conteudo-sindicato','#lateral-sindicato1');
		
		//Faux columns 3
		function mesmaAlturaJU(noticiasJU, anunciosJU){
			noticiasJUAltura = $j(noticiasJU).height();
			anunciosJUAltura = $j(anunciosJU).height();
			maiorAlturaJU = Math.max(noticiasJUAltura, anunciosJUAltura);
			
			$j(noticiasJU).height(maiorAlturaJU);
			$j(anunciosJU).height(maiorAlturaJU);
		};
		mesmaAlturaJA('#legisla-left','#legisla-right');
		
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