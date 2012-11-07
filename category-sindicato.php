<?php get_header(); //chama o topo do site ?>
<!--<div id="slider-topo">
        <div class="slides_container">
			<?php //get_template_part('loop', 'slider');?> 
        </div>
	</div>
     </div>--><!--fim do slider-topo-->
     <div id="titulo-busca">
     	
     	
     
     
</div><!--fim do topo-->


<div id="conteudo">
    		<div id="conteudo-sindicato">
        		<div id="titulopg">
        			<h1 class="titulo-pg"><?php the_title();?></h1>
                    <p>Categoria Sindicato</p>
        		</div><!--fim do titulopg-->
        	</div><!--fim do conteudo-sindicato-->
            
            <div id="lateral-sindicato1">
            	<?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div><!--fim da lateral-sindicato-->
            
            <div id="estrutura">
            
            </div><!--fim da estrutura-->
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>