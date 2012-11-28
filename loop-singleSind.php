<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div <?php post_class(); ?>>
		<h1 class="titulo-single22"><a style="color: white" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><span><?php the_title(); ?></span></a></h1>
					
	<?php the_post_thumbnail('post-thumbnails'); ?>
    <div class="clear"></div>
    <?php the_content(); ?> 
    <span class="divisor-cinza"></span>
    
    <!--<a class="bt-noticias-home" href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a>-->
</div><!--fim do post-->                   
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