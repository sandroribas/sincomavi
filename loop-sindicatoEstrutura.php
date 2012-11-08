<?php
query_posts('category_name=estrutura&showposts=4');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div class="cols">
	<div class="img-post"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('post-thumbnails'); ?></a></div>
    <!--<div class="titulopg"><h1 class="titulo-pg"><?php //the_title();?></h1></div>fim do titulopg-->
    <a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
    <!--<span class="divisor-cinza"></span>-->
    <!--<a class="bt-noticias-home" href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a>-->
</div><!--fim dos post-sindicato-->                   
<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>