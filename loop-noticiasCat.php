<?php //query_posts('category_name=noticias&showposts=1');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>

<div class="post-noticia">

	 <h2 class="titulo-serv22"><a style="color: white" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><span><?php the_title();?></span></a></h2>
     <div class="data-noticias"><strong><?php the_time('d, M Y') ?></strong></div>
	<div class="imagem-noticias"><?php the_post_thumbnail('post-thumbnails'); ?></div>
    
    <?php the_excerpt(); ?> 
    <a class="bt-dest-amarelo" href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php _e('LEIA MAIS','sincomavi'); ?></a>    
    
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