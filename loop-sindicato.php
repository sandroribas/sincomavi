<?php
query_posts('category_name=sindicato&showposts=2');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div <?php post_class(); ?>>
	<?php the_post_thumbnail('post-thumbnails'); ?>
    <div id="titulopg"><h1 class="titulo-pg"><?php the_title();?></h1></div><!--fim do titulopg-->
    <?php the_content(); ?> 
    <!--<span class="divisor-cinza"></span>-->
    <!--<a class="bt-noticias-home" href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a>-->
</div><!--fim dos post-sindicato-->                   
<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>