<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os ?>
    
    
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="result-busca">
    	<div class="breadCrumbs"><?php the_breadcrumb();  ?></div>
		<div class="imagem-busca"><?php the_post_thumbnail('post-thumbnails'); ?></div>
        <h1><span><?php the_title(); ?></span></h1>
        <a href="<?php the_permalink() ?>"><?php search_excerpt_highlight();//destacando result com search_excerpt_highlight();?></a>
			
        <a class="btn-azul" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('Veja Mais','sincomavi'); ?></a>
        </div>
        
	<?php }else{ ?> 
       <div class="result-busca" style="display:none">
    	<div class="breadCrumbs"><?php the_breadcrumb();  ?></div>
        <h1><span><?php the_title(); ?></span></h1>
        <a href="<?php the_permalink() ?>"><?php search_excerpt_highlight();//destacando result com search_excerpt_highlight();?></a>
			
        <a class="btn-azul" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('Veja Mais','sincomavi'); ?></a>
        </div>
        
	<?php }	?>
    
    

	<?php endwhile;?> 
    <!--PAGENAVI-->
    <?php //posts_nav_link('&harr;','&lt; Previous Posts','Older Posts &gt;'); ?>
	<?php //if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php if(function_exists('wp_pagenavi2')) { ?>
	<?php wp_pagenavi2(); ?>   
    <?php } else { ?>      
    <div class="navigation"><p><?php posts_nav_link('&harr;','&lt; Previous Posts','Older Posts &gt;'); ?></p></div>
    <?php } ?> 
	<!--FIM DA PAGENAVI-->
	<?php else: //se não existirem posts, mostre a mensagem abaixo?>

	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'aristatico'); ?></p>

<?php endif; wp_reset_query();?>

	<!--<p align="center"><?php //posts_nav_link(); ?></p>-->  