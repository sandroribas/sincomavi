<?php
query_posts('category_name=constrhuir&showposts=1');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>

	<?php the_post_thumbnail('post-thumbnails'); ?>
    <h1><a style="color:inherit" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><span><?php the_title();?></span></a></h1>
    <?php the_content(); ?> 
                  
<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>