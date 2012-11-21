<?php
query_posts('post_type=parceiros&showposts=8');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div <?php post_class(); ?>>
	<div class="imgParceiro">
		<?php the_post_thumbnail('post-thumbnails'); ?>
    </div><!--fim da imgParceiro-->
    
    
    	<h1><span><?php the_title();?></span></h1>
  
    
	<?php the_excerpt(); ?> 
    
    <a class="bt-dest-marrom2" href="<?php the_permalink(); ?>" title="Veja mais"><?php _e('VEJA MAIS','sincomavi'); ?></a>
    
</div><!--fim do post-->                   
<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>