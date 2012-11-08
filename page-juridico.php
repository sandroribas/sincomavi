<?php
/*
Template Name: Jurídco
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
			<div id="topo-juridico">
                <div class="img-left-topojur">
                    <div class="leg-topoJur">
                        <h1><?php _e('Jurídico','sincomavi'); ?></h1>
                        <p><?php _e('É um fato conhecido de todos que um leitor se distrairá com o conteúdo djdifdi edjijifmdokd', 'sincomavi'); ?>
                    </div><!--fim da leg-topJur-->
                </div><!--fim da img-left-topojur-->
                
                <div class="img-right-topojur">
                
                	<div class="form-azul"><!--FORM-AZUL-->
                    	<h2><span class="bordas-tituloAzul"><?php _e('RESENHA TRIBUTÁRIA','sincomavi');?></span></h2>
                        <p><?php _e('As edições anteriores da Resenha Tributária podem ser acessadas no menu abaixo.','sincomavi'); ?></p>
                        <form class="formularioAzul">
                        	<input type="text" class="campoAzul" name="s" id="s" />
							<input type="hidden" class="submit" name="submit" id="searchsubmit" />
                        </form>
                    </div><!--FORM-AZUL-->
                    
                </div><!--fim d img-right-topojur-->
            </div><!--fim do topo-juridico-->
            
            <div id="titulo-busca">
                <div id="tituloh">
                <h1 class="titulo-home"><?php _e('DESTAQUES','sincomavi')?></h1>
            	</div><!--fim do tituloh-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="destaques-juridico">
    			<?php get_template_part('loop', 'destaquesJuridicos');?>
    		</div><!--fim dos destaques-home-->

    		<div id="conteudo-juridico">
        		<h1 class="titulo-total"><?php _e('LEGISLAÇÃO','sincomavi')?></h1>
                <?php get_template_part('loop', 'legislaJuridico');?>
                
        	</div><!--fim do conteudo-sindicato-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>