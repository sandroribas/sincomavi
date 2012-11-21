<?php
/*
Template Name: Contato
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
                <div id="tituloc">
                <h1 class="titulo-contato"><?php _e('FALE CONOSCO','sincomavi')?></h1>
            	</div><!--fim do tituloh-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="destaques-contato">
    			<?php //get_template_part('loop', 'destaquesJuridicos');?>
                <div class="topoCont-left">
                
                </div>
                <div class="topoCont-right">
                
                </div>
    		</div><!--fim dos destaques-home-->

    		<div id="conteudo-contato">
        		<div id="contato-left">
                	<?php //get_template_part('loop', 'legislaJuridico');?>
                </div><!--fim do legisla-left-->
                
        		<div id="container-contForms">
                    <div id="bg-contato-titulo">
                    	<h1>entre em contato conosco</h1>
                    </div>
                    
                    <ul class="tabs">
                        <li class="primeira-tab"><a href="#tab1"><strong><?php _e('DÚVIDAS','sincomavi')?></strong></a></li>
                        <li><a href="#tab2"><strong><?php _e('CADASTRO','sincomavi')?></strong></a></li>
                        <li><a href="#tab3"><strong><?php _e('INSCRIÇÃO','sincomavi')?></strong></a></li>
                    </ul>
                    <div id="tab1" class="tab">
                    	<h3>Seção 1</h3>
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis placerat dolor id aliquet. Sed a orci in justo blandit commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
               		</div>
                    
                    <div id="tab2" class="tab">
                        <h3>Seção 2</h3>
                        <p>Aenean et est tortor. In pharetra pretium convallis. Mauris sollicitudin ligula non mi hendrerit varius. Fusce convallis hendrerit mauris, eu accumsan nisl aliquam eu.</p>
                    </div>
                    
                    <div id="tab3" class="tab">
                        <h3>Seção 3</h3>
                        <p>Suspendisse potenti. Morbi laoreet magna vitae est mollis ultricies. Mauris eget enim ac justo eleifend malesuada. Proin non consectetur est. Integer semper laoreet porta. Praesent facilisis leo nec libero tincidunt blandit.</p>
                    </div>
                    
                </div><!--fim do container-contForms-->
                
        	</div><!--fim do conteudo-juridico-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>