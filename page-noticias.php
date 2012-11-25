<?php
/*
Template Name: Notícias
*/
?>
<?php get_header(); //chama o topo do site ?>
<!--<div id="slider-topo">
        <div class="slides_container">
			<?php //get_template_part('loop', 'slider');?> 
        </div>
	</div>
     </div>--><!--fim do slider-topo-->
    
     	
     	
     
     
</div><!--fim do topo-->


<div id="conteudo">
<div id="titulo-buscaS">
                <div id="titulos">
                <h1 class="titulo-not"><?php _e('NOTÍCIAS','sincomavi')?></h1>
            	</div><!--fim do titulos-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="topo-noticias">
                <div class="img-left-top-noticias">
                    
                </div><!--fim da img-left-toposerv-->
                
            </div><!--fim do topo-servico-->
            
            

    		<div id="conteudo-noticias">
				<div id="grupo_noticias">
                	<div id="cont-not">
                        
                        
                        	<?php get_template_part('loop', 'noticias');?>
                        	
                       
                    </div><!--fim do cont-constrhuir-->
                   
                    
                    <div id="lat-noticias">
                    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral Noticias') ) : ?>
            			<p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets na '); ?><strong><?php _e('Lateral Noticias'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
            			<?php endif; ?>
                    </div><!--fim da lat-servicos-->
                
                </div><!--fim dos grupo_construir-->
                
                
                <div id="convenios">
                	<h2 class="titulo-total3"><a href="http://localhost/wp-estudos/convenios/" title="Convenios"><?php _e('ONONO ONONO','sincomavi')?></a></h2>
                    <?php get_template_part('loop', 'conveniosDest');?>
                </div><!--fim dos convenios-->
                
                
                
                
        	</div><!--fim do conteudo-servicos-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>