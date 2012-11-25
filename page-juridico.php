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
                        <p><?php _e('É um fato conhecido de todos que um leitor se distrairá com o conteúdo djdifdi edjijifmdokd', 'sincomavi'); ?></p>
                    </div><!--fim da leg-topJur-->
                </div><!--fim da img-left-topojur-->
                
                <div class="img-right-topojur">
                
                	<div class="form-azul">
                    	
                        <form action="#" class="formulario-arq" name="jump5">
                           <div class="div-form">
                           	<h2><span class="bordas-tituloAzul"><?php _e('RESENHA TRIBUTÁRIA','sincomavi');?></span></h2>
							<p><?php _e('As edições anteriores da Resenha Tributária podem ser acessadas no menu abaixo.','sincomavi'); ?></p>
                                <select name="menu5" class="select" title="Arquivos"  onChange="window.open(document.jump5.menu5.options[document.jump5.menu5.selectedIndex].value)" value="GO">
                                    <option class="optionss" ></option>
                                    <?php
                                    $bookmarks = get_bookmarks( array( 'orderby' => 'name', 'order' => 'ASC', 'category_name'  => 'Resenhas Tributárias' ));
                                    // Loop through each bookmark and print formatted output
                                    foreach ( $bookmarks as $bm ) { 
                                        printf( '<option class="optionss"  value="%s">%s</option>', $bm->link_url, __($bm->link_name) );
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                </div><!--fim d img-right-topojur-->
            </div><!--fim do topo-juridico-->
            
            <div id="titulo-busca">
                <div id="tituloh">
                <h1 class="titulo-juridico"><?php _e('DESTAQUES','sincomavi')?></h1>
            	</div><!--fim do tituloh-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="destaques-juridico">
    			<?php get_template_part('loop', 'destaquesJuridicos');?>
    		</div><!--fim dos destaques-home-->

    		<div id="conteudo-juridico">
        		<h1 class="titulo-total-juridico"><?php _e('LEGISLAÇÃO','sincomavi')?></h1>

                <div id="legisla-left">
                	<?php get_template_part('loop', 'legislaJuridico');?>
                </div><!--fim do legisla-left-->
                
        		<div id="legisla-right">
                   
                    <div class="form-cinza">
                        <form action="#" class="formulario-arq" name="jump">
                           <div class="div-form">
                           		<h2><span class="bordas-tituloCinza"><?php _e('CONSULTE','sincomavi');?></span></h2>
								<p><?php _e('Neste menu o interessado tem a seu dispor as convenções coletivas celebradas em 2007.','sincomavi'); ?></p>

                                <select name="menu" class="select" title="Arquivos"  onChange="window.open(document.jump.menu.options[document.jump.menu.selectedIndex].value)" value="GO">
                                    <option></option>
                                    <?php
                                    $bookmarks = get_bookmarks( array( 'orderby' => 'name', 'order' => 'ASC', 'category_name'  => 'Consultorias' ));
                                    // Loop through each bookmark and print formatted output
                                    foreach ( $bookmarks as $bm ) { 
                                        printf( '<option value="%s">%s</option>', $bm->link_url, __($bm->link_name) );
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                    </div>
                	
                    <div class="form-cinza">
                        <form action="#" class="formulario-arq" name="jump2">
                           <div class="div-form">
                           		<h2><span class="bordas-tituloCinza"><?php _e('CONVENÇÕES 2007','sincomavi');?></span></h2>
								<p><?php _e('Neste menu o interessado tem a seu dispor as convenções coletivas celebradas em 2007.','sincomavi'); ?></p>
                                
                                <select name="menu2" class="select" title="Arquivos"  onChange="window.open(document.jump2.menu2.options[document.jump2.menu2.selectedIndex].value)" value="GO">
                                    <option></option>
                                    <?php
                                    $bookmarks = get_bookmarks( array( 'orderby' => 'name', 'order' => 'ASC', 'category_name'  => 'Convenções 2007' ));
                                    // Loop through each bookmark and print formatted output
                                    foreach ( $bookmarks as $bm ) { 
                                        printf( '<option value="%s">%s</option>', $bm->link_url, __($bm->link_name) );
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                    <div class="form-cinza2">
                        <form action="#" class="formulario-arq" name="jump3">
                           <div class="div-form">
                           		<h2><span class="bordas-tituloCinza"><?php _e('guia on line de contribuição','sincomavi');?></span></h2>
								<p><?php _e('Neste menu o interessado tem a seu dispor as convenções coletivas celebradas em 2007.','sincomavi'); ?></p>
                              
                                <select name="menu3" class="select" title="Arquivos"  onChange="window.open(document.jump3.menu3.options[document.jump3.menu3.selectedIndex].value)" value="GO">
                                    <option></option>
                                    <?php
                                    $bookmarks = get_bookmarks( array( 'orderby' => 'name', 'order' => 'ASC', 'category_name'  => 'Contribuições' ));
                                    // Loop through each bookmark and print formatted output
                                    foreach ( $bookmarks as $bm ) { 
                                        printf( '<option value="%s">%s</option>', $bm->link_url, __($bm->link_name) );
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                    <div class="form-cinza2">
                        <form action="#" class="formulario-arq" name="jump4">
                           <div class="div-form">
                           		<h2><span class="bordas-tituloCinza"><?php _e('CONSULTE OS DOCUMENTOS','sincomavi');?></span></h2>
								<p><?php _e('Neste menu o interessado tem a seu dispor as convenções coletivas celebradas em 2007.','sincomavi'); ?></p>
                                
                                <select name="menu4" class="select" title="Arquivos"  onChange="window.open(document.jump4.menu4.options[document.jump4.menu4.selectedIndex].value)" value="GO">
                                    <option></option>
                                    <?php
                                    $bookmarks = get_bookmarks( array( 'orderby' => 'name', 'order' => 'ASC', 'category_name'  => 'Outros Documentos' ));
                                    // Loop through each bookmark and print formatted output
                                    foreach ( $bookmarks as $bm ) { 
                                        printf( '<option value="%s">%s</option>', $bm->link_url, __($bm->link_name) );
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                    </div>
                       
                
                    <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral Legisla A') ) : ?>
                    	<p><?php// _e('Esta coluna é uma widget area. '); ?><?php //_e('Adicione widgets nos '); ?><strong><?php// _e('Lateral Legisla A'); ?></strong> <?php //_e('para mais funcionalidades!'); ?></p>
                    <?php //endif; ?>
                </div><!--fim do legisla-right-->
                
        	</div><!--fim do conteudo-juridico-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>