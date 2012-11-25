<?php get_header(); //chama o topo do site ?>

     
</div><!--fim do topo-->


<div id="conteudo-busca">
			
            
            <div id="titulo-pgbusca">
                <div id="titulob">
                <h1 class="titulo-busca2"><?php _e('RESULTADOS DA BUSCA','sincomavi')?></h1>
            	</div><!--fim do tituloh-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
                
            </div>
            
			<div id="destaques-contato">
    			<?php //get_template_part('loop', 'destaquesJuridicos');?>
                <div class="left-busca">
                	<div class="busca-res">
                	<?php //exibindo a palavra buscada e o número de resultados====================================================================================
					/* Search Count */
					$allsearch = &new WP_Query("s=$s&showposts=-1");
					$key = wp_specialchars($s, 1);
					$count = $allsearch->post_count;
					_e('');
					_e('<p><span class="marca2">');
					echo $key;
					_e('</span> tem: <span class="marca">');
					echo $count . ' ';
					_e('</span>resultado(s)</p>');
					wp_reset_query();
					
					//fim da exibição========================================================================================================
					?>
					</div><!--fim da busca-res-->
        		 <?php get_template_part('loop', 'busca');?>
                </div>
                <div class="right-busca">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Anuncios Home') ) : ?>
            <p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets nos '); ?><strong><?php _e('Anuncios Home'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
            <?php endif; ?>
                </div>
    		</div><!--fim dos destaques-home-->

    		
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>