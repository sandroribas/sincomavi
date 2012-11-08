<?php
/*
Template Name: Geral
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
            <div id="titulo-busca">
                <div id="tituloh">
                <h1 class="titulo-home"><?php the_title();?></h1>
            	</div><!--fim do tituloh-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="destaques-geral">
    			<?php get_template_part('loop', 'page');?>
    		</div><!--fim dos destaques-home-->

    		<div id="conteudo-geral">
        		<h1 class="titulo-total"><?php _e('???','sincomavi')?></h1>
                Outra seção
                <?php get_template_part('loop', 'juridico');?>
                
        	</div><!--fim do conteudo-sindicato-->

</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>