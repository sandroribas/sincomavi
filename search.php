<?php get_header(); //chama o topo do site ?>

<div id="conteudo-noticias" class="fundo-arredondado">
    	
        <div id="central-noticias" >

<?php 
//exibindo a palavra buscada e o número de resultados====================================================================================

/* Search Count */
$allsearch = &new WP_Query("s=$s&showposts=-1");
$key = wp_specialchars($s, 1);
$count = $allsearch->post_count;
_e('');
_e('<span><p><span class="marca2"><u>');
echo $key;
_e('</u></span> tem: <span class="marca">');
echo $count . ' ';
_e('</span>resultado(s)</p></span>');
wp_reset_query();

//fim da exibição========================================================================================================
?>

<!--LOOP WORDPRESS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
				 <?php get_template_part('loop', 'busca');?>
<!--Fim do LOOP WORDPRESS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
                

    </div><!--central-noticias-->
	<!--SIDEBAR 2 ========================================================================================== -->
    <?php get_template_part('LateralDireita2'); ?>
    <!--fim SIDEBAR 2 ========================================================================================== -->

</div><!--fim conteudo-noticias-->
        
	</div><!--fim WRAPPER-->
    
<?php get_footer(); //chama o rodape do site ?>