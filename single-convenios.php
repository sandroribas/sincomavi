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
        		Single CONVÊNIOS!
                <?php get_template_part('loop', 'index');?>
               	
        	</div><!--fim do conteudo-sindicato-->
            
            <div id="lateral-sindicato1">
            	<?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div><!--fim da lateral-sindicato-->

</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>