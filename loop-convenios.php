<?php
query_posts('post_type=convenios&showposts=6');

if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>
<div <?php post_class(); ?>>
	<?php the_post_thumbnail('post-thumbnails'); ?>
    <div class="titulo-modelo1"><h1 class="titulo-modelo1-1"><?php the_title();?></h1></div><!--fim do titulopg-->
    <div class="clear"></div>
    <?php the_content(); ?> 
    <span class="divisor-cinza"></span>
    <div id="page-nav">
        <div id="navig">
         	
        </div>
    </div>
    <!--<a class="bt-noticias-home" href="<?php //the_permalink(); ?>" title="<?php //the_title_attribute(); ?>"><?php //the_title(); ?></a>-->
</div><!--fim do post-->                   
<?php endwhile; else : ?>

<?php endif; ?>