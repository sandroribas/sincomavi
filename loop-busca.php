<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os ?>
    <div class="result-busca">
        <h1><span><?php the_title(); ?></span></h1>
        <a href="<?php the_permalink() ?>"><?php search_excerpt_highlight();//aqui mostramos o resultado do excerto de texto destacado com search_excerpt_highlight(); ao invés de usar the_excerpt();  ?></a>
			
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        <hr />
    </div><!--fim do result-busca-->

	<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>

	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'aristatico'); ?></p>

<?php endif; wp_reset_query();?>

	<p align="center"><?php posts_nav_link(); ?></p>  
