<?php get_header(); //chama o topo do site ?>
<!--<div id="slider-topo">
        <div class="slides_container">
			<?php //get_template_part('loop', 'slider');?> 
        </div>
	</div>
     </div>--><!--fim do slider-topo-->
     <div id="titulo-busca">
     	
     	
     
     
</div><!--fim do topo-->


<div id="conteudo">
    		<div id="conteudo-sindicato">
        		<div id="titulopg">
        			<h1 class="titulo-pg"><?php the_title();?></h1>
                    <?php //query_posts('category_name=noticias&paged=$paged');
if ( have_posts() ) : while ( have_posts() ) : the_post(); //resumindo, se existrem posts, mostre-os?>

<div class="post-noticia-single">

	 <h2 class="titulo-serv22"><a style="color: white" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><span><?php the_title();?></span></a></h2>
     <div class="data-noticias"><strong><?php the_time('d, M Y') ?></strong></div>
	<div class="imagem-noticias"><?php the_post_thumbnail('post-thumbnails'); ?></div>
    
    <?php the_content(); ?> 
    
	
    
    
</div><!--fim do post-->                  
<?php endwhile;?> 
	<div id="paginacao">
    <?php wp_pagenavi(); ?>
    	
    </div>
    
<?php else: //se não existirem posts, mostre a mensagem abaixo?>
	<h2><?php _e('Ops...', 'sincomavi'); ?></h2>
	<p><?php _e('Desculpe, nenhuma postagem encontrada.', 'sincomavi'); ?></p>

<?php endif; wp_reset_query();?>
        		</div><!--fim do titulopg-->
        	</div><!--fim do conteudo-sindicato-->
            
            <div id="lateral-sindicato1">
            	<?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div><!--fim da lateral-sindicato-->
            
            <div id="estrutura">
            
            </div><!--fim da estrutura-->
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>