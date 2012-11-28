<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>

<div <?php post_class(); ?>>
	<h1 class="h1-videos"><span><?php the_title(); ?></span></h1>
	<?php the_content(); ?> 
	<!--<a class="bt-dest-amarelo" href="<?php //the_permalink();?>" title="<?php //the_title_attribute(); ?>"><?php //_e('LEIA MAIS','sincomavi'); ?></a>    -->
    
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
	<p><?php _e('Desculpe, nenhum Curso ou Palestra encontrado.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>