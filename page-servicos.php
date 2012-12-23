<?php
/*
Template Name: Serviços
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
                <h1 class="titulo-serv"><?php _e('CONVÊNIOS','sincomavi')?></h1>
                
            	</div><!--fim do tituloh-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="topo-servico">
                <div class="img-left-toposerv">
                    <div class="leg-toposerv">
                        <h1><?php _e('Serviços','sincomavi'); ?></h1>
                        <p><?php _e('É um fato conhecido de todos que um leitor se distrairá com o conteúdo djdifdi edjijifmdokd', 'sincomavi'); ?></p>
                    </div><!--fim da leg-topJur-->
                </div><!--fim da img-left-toposerv-->
                
                <div class="img-right-toposerv">
                
                	<div class="form-marrom">
                    	
                        <form action="#" class="formulario-arq" name="jump7">
                           <div class="div-form">
                           	<h2><span class="bordas-tituloAzul"><?php _e('CONSTRULOG','sincomavi');?></span></h2>
							<p><?php _e('Lista de profissionais e empresas que possui preços diferenciados aos associados da entidade. É necessário a apresentação de guia emitida pelo SINCOMAVI para a obtenção do desconto.','sincomavi'); ?></p>
                                <select name="menu7" class="select" title="Consulte Aqui"  onChange="window.open(document.jump7.menu7.options[document.jump7.menu7.selectedIndex].value)" value="GO">
                                    <option class="optionss" ></option>
                                    <?php
                                    $bookmarks = get_bookmarks( array( 'orderby' => 'name', 'order' => 'ASC', 'category_name'  => 'Construlog' ));
                                    // Loop through each bookmark and print formatted output
                                    foreach ( $bookmarks as $bm ) { 
                                        printf( '<option class="optionss"  value="%s">%s</option>', $bm->link_url, __($bm->link_name) );
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                </div><!--fim d img-right-toposerv-->
            </div><!--fim do topo-servico-->
            
            
            
			<div id="destaques-servicos">
                <div id="destaques-servicosL">
                	<h1 class="titulos">
                    	<span class="linha-titulo"><?php _e('CURSOS E PALESTRAS','sincomavi')?></span>
                    </h1>
               
                    <?php get_template_part('loop', 'cursosDest');?>
                </div><!--fim dos destaques-servicosL-->
            
                <div id="destaques-servicosR">
                	<div class="form-azul">
                    	
                        <form action="#" class="formulario-arq" name="jump8">
                           <div class="div-form">
                           	<h2><span class="bordas-tituloAzul"><?php _e('CURSOS REALIZADOS','sincomavi');?></span></h2>
							<p><?php _e('Lista de profissionais e empresas que possui preços diferenciados aos associados da entidade. É necessário a apresentação de guia emitida pelo SINCOMAVI para a obtenção do desconto.','sincomavi'); ?></p>
                                <select name="menu8" class="select" title="Curso"  onChange="window.open(document.jump8.menu8.options[document.jump8.menu8.selectedIndex].value)" value="GO">
                                    <option class="optionss" ></option>
                                    <?php
                                    $bookmarks = get_bookmarks( array( 'orderby' => 'name', 'order' => 'ASC', 'category_name'  => 'Cursos Realizados' ));
                                    // Loop through each bookmark and print formatted output
                                    foreach ( $bookmarks as $bm ) { 
                                        printf( '<option class="optionss"  value="%s">%s</option>', $bm->link_url, __($bm->link_name) );
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                    </div>
                </div><!--fim dos destaques-servicosR-->
    		</div><!--fim dos destaques-home-->

    		<div id="conteudo-servicos">
				<div id="parceiros">
                	<?php get_template_part('loop', 'parceirosDest');?>
                </div><!--fim dos parceiros-->
				
                <div id="convenios">
                	<h2 class="titulo-total2"><a href="http://localhost/wp-estudos/convenios/" title="Convenios"><?php _e('CLÍNICAS E MÉDICOS CONVENIADOS','sincomavi')?></a></h2>
                    <?php get_template_part('loop', 'conveniosDest');?>
                </div><!--fim dos convenios-->
                
                <div id="grupo_construir">
                	<div id="cont-constrhuir">
                        <div id="titulos2">
                            <h2 class="titulo-serv2"><?php _e('GRUPO CONSTRHUIR','sincomavi')?></h2>
                        </div><!--fim do titulos2-->
                        <div class="left">
                        	<?php get_template_part('loop', 'constrhuirDest');?>
                        	
                        </div><!--fim da left-->
                        <div class="right">
                        
                        	<div class="form-mar">
                                <form action="#" class="formulario-arq" name="jump9">
                                   <div class="div-form">
                                        <h2><span class="bordas-tituloCinza"><?php _e('EVENTOS PROGRAMADOS','sincomavi');?></span></h2>
                                        <p><?php _e('Neste menu o interessado tem a seu dispor as convenções coletivas celebradas em 2007.','sincomavi'); ?></p>
        
                                        <select name="menu9" class="select" title="Eventos"  onChange="window.open(document.jump9.menu9.options[document.jump9.menu9.selectedIndex].value)" value="GO">
                                            <option></option>
                                            <?php
                                            $bookmarks = get_bookmarks( array( 'orderby' => 'name', 'order' => 'ASC', 'category_name'  => 'Eventos Programados' ));
                                            // Loop through each bookmark and print formatted output
                                            foreach ( $bookmarks as $bm ) { 
                                                printf( '<option value="%s">%s</option>', $bm->link_url, __($bm->link_name) );
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            
                        </div><!--fim da right-->
                    </div><!--fim do cont-constrhuir-->
                    
                    <div id="lat-servicos">
                    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Anuncios Serviços') ) : ?>
            			<p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets nos '); ?><strong><?php _e('Anuncios Serviços'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
            			<?php endif; ?>
                    </div><!--fim da lat-servicos-->
                
                </div><!--fim dos convenios-->
                
                
        	</div><!--fim do conteudo-servicos-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>