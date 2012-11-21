<?php get_header(); //chama o topo do site ?>

     
</div><!--fim do topo-->


<div id="conteudo">
			
            
            <div id="titulo-busca">
                <div id="titulob">
                <h1 class="titulo-busca2"><?php _e('FALE CONOSCO','sincomavi')?></h1>
            	</div><!--fim do tituloh-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="destaques-contato">
    			<?php //get_template_part('loop', 'destaquesJuridicos');?>
                <div class="topoCont-left">
                LEFT
                </div>
                <div class="topoCont-right">
                RIGHT
                </div>
    		</div><!--fim dos destaques-home-->

    		<div id="conteudo-contato">
            	<?php //exibindo a palavra buscada e o número de resultados====================================================================================
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

        		 <?php get_template_part('loop', 'busca');?>
            </div><!--fim do conteudo-contato-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>