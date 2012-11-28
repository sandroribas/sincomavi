<?php
query_posts('category_name=conveniados&showposts=6');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div class="convenioDest">
	<?php the_post_thumbnail('post-thumbnails'); ?>
    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><span><?php the_title();?></span></a></h1>
    <div class="clear"></div>
    <?php the_content(); ?> 
    <a class="bt-dest-marrom2" href="<?php echo $linkBtn;?>" title="<?php echo $nomeBnt; ?>"><?php echo $nomeBtn; ?></a>
    <!--<a class="bt-noticias-home" href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a>-->
</div><!--fim do post-->                   
<?php endwhile;?> 
	<?php //if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    
<?php else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>