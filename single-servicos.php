<?php get_header(); //chama o topo do site ?>
<!--<div id="slider-topo">
        <div class="slides_container">
			<?php //get_template_part('loop', 'slider');?> 
        </div>
	</div>
     </div>--><!--fim do slider-topo-->
    
     	
     	
     
     
</div><!--fim do topo-->


<div id="conteudo">
    		<div id="conteudo-single">
            	
        		
                <?php get_template_part('loop', 'singleServ');?>
                <div id="postsRelacionados">
                <h1 class="titulo-single3"><a style="color: white" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><span><?php _e('NOTÍCIAS RELACIONADAS','sincomavi');?></span></a></h1>
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
											
											while ($my_query->have_posts()) {
											$my_query->the_post();
											?>
											<div class="conteudoRelacionados">
												<div class="fotoRelacionados"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'pequena' ); } ?></a></div>
												<div class="tituloRelacionadosmar2"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
												<div class="textoRelacionados"><?php echo the_excerpt(); ?></div>
                                                <a class="bt-dest-mar2" href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php _e('LEIA MAIS','sincomavi'); ?></a>
											</div>
											<?php
											}
											
											}
											}
											?>
               								</div>
        	</div><!--fim do conteudo-sindicato-->
            
            <div id="lateral-single">
            	<?php get_search_form('minha_busca'); ?><!--fim da busca-->
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral Busca') ) : ?>
            <p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets na '); ?><strong><?php _e('Lateral Busca'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
            <?php endif; ?>
            </div><!--fim da lateral-sindicato-->

</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>