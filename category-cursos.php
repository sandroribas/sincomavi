<?php get_header(); //chama o topo do site ?>
</div><!--fim do topo-->


<div id="conteudo">
<div id="titulo-buscaS">
                <div id="titulos">
                <h1 class="titulo-serv"><?php _e('CURSOS','sincomavi')?></h1>
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
            
            
            
			<div id="conteudo-cursos">
                
                	<h1 class="titulos">
                    	<span class="linha-titulo"><a href="http://localhost/wp-estudos/Category/servicos/cursos/" title=""><?php _e('CURSOS REALIZADOS','sincomavi')?></a></span>
                    </h1>
               		<div class="left">
                    	<?php get_template_part('loop', 'cursosCat');?>
                	</div>
            		<div class="right">
                    	<span class="linha-titulo"><a href="http://localhost/wp-estudos/Category/servicos/cursos/" title=""><?php _e('TESTE','sincomavi')?></a></span>
                    </div>
                
    		</div><!--fim dos conteudo-cursos-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>