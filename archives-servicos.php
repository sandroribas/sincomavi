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
                <h1 class="titulo-not"><?php _e('Arquivos','sincomavi')?></h1>
            	</div><!--fim do titulos-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="topo-noticias">
                <div class="img-left-top-noticias">
                    
                </div><!--fim da img-left-toposerv-->
            </div><!--fim do topo-servico-->
            
            

    		<div id="conteudo-noticias">
				<div id="grupo_noticias">
                	<div id="cont-not">
                        <?php the_post(); ?>
                        <h1 class="entry-title"><?php //the_title(); ?></h1>
                        <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 20, 'format' => 'custom' ) ); //últimos vinte posts ?>
                        <hr>
                        <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); //últimos 12 meses ?>
                        <hr>
                        <?php wp_get_archives( array( 'type' => 'daily', 'limit' => 15 ) ); //últimos 15 dias ?>
                        <hr>
                        <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                          <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
                          <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
                        </select>
                        
                        <h2 class="titulo-serv22">Arquivos por mês</h2>
                        <ul>
                            <?php wp_get_archives('type=monthly'); ?>
                        </ul>
                        
                        <h2 class="titulo-serv22">Arquivos por Categoria</h2>
                        <ul>
                             <?php wp_list_categories(); ?>
                        </ul>
                        
                    </div><!--fim do cont-not-->
                   
                    
                    <div id="lat-noticias">
                    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral Noticias') ) : ?>
            			<p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets na '); ?><strong><?php _e('Lateral Noticias'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
            			<?php endif; ?>
                    </div><!--fim da lat-noticias-->
                
                </div><!--fim dos grupo_noticias-->
                
                
        	</div><!--fim do conteudo-noticias-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>