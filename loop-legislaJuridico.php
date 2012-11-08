<?php
query_posts('category_name=legislacao&showposts=4');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div <?php post_class( 'custom-class' ); ?>>
	<div class="img-post">
		<?php the_post_thumbnail('post-thumbnails'); ?>
    </div>
    
    <div class="conteudo-legisla">
        <h1 class="titulos5"><span class="linha-titulo2"><?php the_title();?></span></h1>
        <?php the_excerpt(); ?> 
        <a class="bt-dest-juridico" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php _e('VEJA MAIS','sincomavi');?></a>
    </div><!--fim do conteudo-legisla-->
    
    <div class="lat-legisla">
    </div>
    
</div><!--fim dos dest-home-->                   
<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>