<?php
//query_posts('post_type=cursos&showposts=3');
query_posts('category_name=destaques-cursos&showposts=3');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<?php 
$linkBtn = get_post_meta($post->ID, 'link_botao', true);//pegando campo personalizado com a URL
$nomeBtn = get_post_meta($post->ID, 'nome_botao', true);//pegando campo personalizado com a URL
?>
<div <?php post_class(); ?>>
	<?php the_post_thumbnail('post-thumbnails'); ?>
    <div class="titulo-destaquesServ"><h1><?php the_title();?></h1></div><!--fim do titulopg-->
    <div class="clear"></div>
    <?php the_content(); ?> 
    <a class="bt-dest-marrom2" href="<?php echo $linkBtn;?>" title="<?php echo $nomeBnt; ?>"><?php echo $nomeBtn; ?></a>
    <!--<a class="bt-noticias-home" href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a>-->
</div><!--fim do post-->                   
<?php endwhile; else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>