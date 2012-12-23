<?php
query_posts('category_name=destaques-home&showposts=5');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<?php 
$linkBtn = get_post_meta($post->ID, 'link_botao', true);//pegando campo personalizado com a URL
$nomeBtn = get_post_meta($post->ID, 'nome_botao', true);//pegando campo personalizado com a URL
?>
<div <?php post_class( 'custom-class' ); ?>>
	<?php the_post_thumbnail('post-thumbnails'); ?>
    <?php the_excerpt(); ?> 
    <a class="bt-dest-home" href="<?php echo $linkBtn; ?>" title="<?php echo $nomeBtn; ?>"><?php the_title(); ?></a>
</div><!--fim dos dest-home-->                   
<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>