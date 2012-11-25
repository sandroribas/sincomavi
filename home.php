<?php
/*
Template Name: Home
*/
?>
<?php get_header(); //chama o topo do site ?>
<div id="slider-topo">
        <div class="slides_container">
			<?php get_template_part('loop', 'slider');?> 
        </div>
	</div>
     </div><!--fim do slider-topo-->
     <div id="titulo-busca">
     	<div id="tituloh">
        	<h1 class="titulo-home22"><?php _e('DESTAQUES','sincomavi')?></h1>
        </div><!--fim do tituloh-->
     	<?php get_search_form('minha_busca'); ?><!--fim da busca-->
     
     
</div><!--fim do topo-->


<div id="conteudo">
    <div id="destaques-home">
    	<?php get_template_part('loop', 'destaquesHome');?>
    </div><!--fim dos destaques-home-->
    
    <div id="conteudo-home">
        <div id="noticias-home">
        	<h1 class="titulos"><span class="linha-titulo"><?php _e('NOTÍCIAS','sincomavi')?></span></h1>
         	<?php get_template_part('loop', 'noticiasHome');?>
        </div><!--fim da col1-home-->
        <div id="col2-home">
        	<h1 class="titulos2"><span class="linha-titulo"><?php _e('SERVIÇOS','sincomavi')?></span></h1>
            <ul id="serv-home">
				<?php get_template_part('loop', 'servicosHome');?>
            </ul>
            <span class="divisor-azul"></span>
            <h1 class="titulos3"><span class="linha-titulo"><?php _e('CURSOS','sincomavi')?></span></h1>
            <?php get_template_part('loop', 'cursosHome');?>
        </div><!--fim da col2-home-->
        <div id="anuncios-home">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Anuncios Home') ) : ?>
            <p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets nos '); ?><strong><?php _e('Anuncios Home'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
            <?php endif; ?>
        </div><!--fim da col3-home-->
    </div><!--fim do conteudo-home-->
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>