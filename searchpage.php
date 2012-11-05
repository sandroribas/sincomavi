<?php get_header(); //chama o topo do site ?>

<div id="content">

<?php if ( have_posts() ) : ?>                
 
<?php while ( have_posts() ) : the_post() ?>
<!-- this is our loop -->
<?php endwhile; ?>
 
<?php else : ?>
 
<!-- here's where we'll put a search form if there're no posts -->
 
<?php endif; ?> 
<h2>Busca</h2>   

</div><!--fim CONTENT-->
        
	</div><!--fim WRAPPER-->
    
<?php get_footer(); //chama o rodape do site ?>