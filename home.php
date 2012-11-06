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
        	<h1 class="titulo-home">DESTAQUES</h1>
        </div><!--fim do tituloh-->
     	<?php get_search_form('minha_busca'); ?><!--fim da busca-->
     
     
</div><!--fim do topo-->


<div id="conteudo">
    <div id="destaques-home">
    	<?php get_template_part('loop', 'destaquesHome');?>
    </div><!--fim dos destaques-home-->
    
    <div id="conteudo-home">
        <div id="col1-home">
        
        </div><!--fim da col1-home-->
        <div id="col2-home">
        
        </div><!--fim da col2-home-->
        <div id="col3-home">
        
        </div><!--fim da col3-home-->
    </div><!--fim do conteudo-home-->
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>