<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div class="post-convenios-cat">
	<div class="img-convenios-cat">
		<?php the_post_thumbnail('post-thumbnails'); ?>
    </div><!--fim da img-convenios-cat-->
    
    <h1 class="titulo-convenios-cat"><span><?php the_title();?></span></h1>
  
    <div class="texto-convenios-cat">
		<?php the_content(); ?> 
    </div><!--fim do texto-convenios-cat-->
    
    <!--<a class="bt-dest-marrom2" href="<?php //the_permalink(); ?>" title="Veja mais"><?php //_e('VEJA MAIS','sincomavi'); ?></a>-->
    
</div><!--fim do convenios-cat-->                   
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