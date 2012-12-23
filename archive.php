<?php 
/*
Template Name: Archives
*/
get_header(); //chama o topo do site ?>
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
                    	
                        
                    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
							<?php if( is_archive()){?>
							<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
                            
                            <?php if(has_post_thumbnail()){ ?><div class="img-arq"><?php the_post_thumbnail('post-thumbnails'); ?></div> <?php }?>
							<?php the_excerpt(); ?> 
								<?php } ?>			 
						<?php endwhile;?> 
                            <!--PAGENAVI-->
                            <?php //posts_nav_link('&harr;','&lt; Previous Posts','Older Posts &gt;'); ?>
                            <?php //if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                            <?php if(function_exists('wp_pagenavi2')) { ?>
                            <?php wp_pagenavi2(); ?>
                            <?php } else { ?>      
                            <div class="navigation"><p><?php posts_nav_link('&harr;','&lt; Previous Posts','Older Posts &gt;'); ?></p></div>
                            <div style="float:left"></div>
                            <?php } ?> 
                            <!--FIM DA PAGENAVI-->    
                        <?php else: //se não existirem posts, mostre a mensagem abaixo?>
							<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
							<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>
						
						<?php endif; wp_reset_query();?>
                        
                        <div class="ultimos-20-posts">
                    	 <h2 class="titulo-serv22"><?php _e('Mais Recentes','sincomavi'); ?></h2>
                    	<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 20, 'format' => 'custom' ) ); //últimos vinte posts links ?>
                    </div><!--fim dos últimos 20 posts-->
                        
                        <h2 class="titulo-serv22">Arquivos por Categoria</h2>
                        <ul class="teste">
                             <?php wp_list_categories('orderby=slug&hierarchical=1&depth=1&exclude=20,37&feed_image=http://localhost/wp-estudos/wp-content/themes/sincomavi/img/rss-ico.png&show_count=0&title_li='); ?>
                        </ul>
                    
                    </div><!--fim do cont-not-->
                   
                    
                    <div id="lat-noticias">
                    	
                    	<div class="nuvem">
                        	<h2 class="titulo-serv22"><?php _e('Nuvem de Tags','sincomavi'); ?></h2>
                    		<?php wp_tag_cloud('smallest=8&largest=12&unit=pt&number=30&format=list&order=RAND'); ?>
                    	</div><!--fim da nuvem-->
                        
                    	<div class="posts-por-mes">                 
                        <h2 class="titulo-serv22"><?php _e('Arquivos por Mês','sincomavi'); ?></h2><!--listagem de posts por mês - li>ul -->
                        <ul>
                            <?php wp_get_archives('type=monthly'); ?>
                        </ul>
                        </div><!--fim das postagens por mês-->
                        
                        <div class="posts-por-ano">                 
                        <h2 class="titulo-serv22"><?php _e('Arquivos por Ano','sincomavi'); ?></h2><!--listagem de posts por mês - li>ul -->
                        <ul>
                            <?php wp_get_archives('type=yearly'); ?>
                        </ul>
                        </div><!--fim das postagens por ano-->
                        
                        <!--mostrando posts por mês no dropdown-->
                        <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                          <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
                          <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
                        </select>
                        
                    	<!--<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral Noticias') ) : ?>
            			<p><?php //_e('Esta coluna é uma widget area. '); ?><?php //_e('Adicione widgets na '); ?><strong><?php //_e('Lateral Noticias'); ?></strong> <?php //_e('para mais funcionalidades!'); ?></p>
            			<?php //endif; ?>-->
                    </div><!--fim da lat-noticias-->
                
                </div><!--fim dos grupo_noticias-->
                
                
        	</div><!--fim do conteudo-noticias-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>