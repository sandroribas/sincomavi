<?php
/*
Template Name: Convênios
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
    		<div id="conteudo-sindicato">
        		
                <?php get_template_part('loop', 'convenios');?>
                
        	</div><!--fim do conteudo-sindicato-->
            
            <div id="lateral-sindicato1">
            	<?php get_search_form('minha_busca'); ?><!--fim da busca-->
                <div id="diretoria">
                     <div id="dir-div1">
                     	 <?php query_posts('p=278'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<h2><span><?php the_title(); ?></span></h2>
							<?php the_content(); ?>
							<?php endwhile;?>
                        <a href="#" class="bt-mais"></a>
                    </div><!--fim da dir-div1-->
                    
                    <div id="dir-div2">
                        <?php query_posts('p=276'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<h2><span><?php the_title(); ?></span></h2>
							<?php the_content(); ?>
							<?php endwhile;?>
                         <a href="#" class="bt-menos"></a>
                    </div><!--fim da div-dir2-->
                </div><!--dim da DIRETORIA-->
                
                <div class="anuncio-revista">
                	<a href="#" title=""><img src="<?php bloginfo('template_directory'); ?>/img/anuncio-revistas.jpg" alt="Veja todas edições." /></a>
                </div>
            </div><!--fim da lateral-sindicato-->
            
            <div id="estrutura">
            	<div class="titulo1"><h1 class="titulo1-1"><?php _e('ESTRUTURA','sincomavi')?></h1></div>
                <h2><span><?php _e('SINCOMAVI conta com alto grau de informatização','sincomavi')?></span></h2>
            	<?php get_template_part('loop', 'sindicatoEstrutura');?>
            </div><!--fim da estrutura-->
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>