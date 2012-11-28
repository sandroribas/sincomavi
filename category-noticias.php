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
                <h1 class="titulo-not"><?php _e('NOTÍCIAS','sincomavi')?></h1>
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
                        
                        
                        	<?php get_template_part('loop', 'noticiasCat');?>
                            
                            
                                                <h1 class="titulo-serv223"><a style="color: white" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><span><?php _e('NOTÍCIAS RELACIONADAS','sincomavi');?></span></a></h1>
                                           <?php
											$randomPost = $wpdb->get_var("SELECT guid FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY rand() LIMIT 1");
											$categories = get_the_category($post->ID);
											if ($categories) {
											$category_ids = array();
											foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
											$args=array(
											'category__in' => $category_ids,
											'post__not_in' => array($post->ID),
											'showposts'=>3,
											'caller_get_posts'=>1
											);
											$my_query = new wp_query($args);
											if( $my_query->have_posts() ) {
											echo '<div id="postsRelacionados">';
											while ($my_query->have_posts()) {
											$my_query->the_post();
											?>
											<div class="conteudoRelacionados">
												<div class="fotoRelacionados"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'pequena' ); } ?></a></div>
												<div class="tituloRelacionados"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
												<div class="textoRelacionados"><?php echo the_excerpt(); ?></div>
                                                <a class="bt-dest-amarelo" href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php _e('LEIA MAIS','sincomavi'); ?></a>
											</div>
											<?php
											}
											echo '</div>';
											}
											}
											?>
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