<?php query_posts('category_name=noticias-home&showposts=6');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div class="noticia-home">
<?php //if(has_post_thumbnail()){?>
	<a class="todos-links" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnails'); ?></a>
<?php //} ?>   
 
    <h1><a class="todos-links" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_excerpt(); ?>
    <span class="divisor-cinza"></span>
    <!--<a class="bt-noticias-home" href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a>-->
</div><!--fim dos noticias-home-->                   
<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query(); ?>
