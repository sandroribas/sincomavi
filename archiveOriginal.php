<?php 
/*
Template Name: ArchivesOLD
*/
get_header(); //chama o topo do site ?>
<!--<div id="slider-topo">
        <div class="slides_container">
			<?php //get_template_part('loop', 'slider');?> 
        </div>
	</div>
     </div>--><!--fim do slider-topo-->
    
     	
     	
     
     
</div><!--fim do topo-->


<div id="conteudo">
<div id="titulo-buscaS">
                <div id="titulos">
                <h1 class="titulo-not"><?php _e('Arquivos','sincomavi')?></h1>
            	</div><!--fim do titulos-->
                <?php get_search_form('minha_busca'); ?><!--fim da busca-->
            </div>
            
			<div id="topo-noticias">
                <div class="img-left-top-noticias">
                    
                </div><!--fim da img-left-toposerv-->
            </div><!--fim do topo-servico-->
            
            

    		<div id="conteudo-noticias">
				<div id="grupo_noticias">
                	<div id="cont-not">
                    TESTE
                    <?php wp_tag_cloud('smallest=8&largest=12&unit=pt&number=30&format=list&order=RAND'); ?>
                    FIM DO TESTE
                    <div class="ultimos-20-posts">
                    	<h2><?php _e('Mais Recentes','sincomavi'); ?></h2>
                    	<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 20, 'format' => 'custom' ) ); //últimos vinte posts links ?>
                    </div><!--fim dos últimos 20 posts-->
                        
                        
                        <h2><?php _e('Últimos 15 dias','sincomavi'); ?></h2>
                        <?php wp_get_archives( array( 'type' => 'daily', 'limit' => 15 ) ); //últimos 15 dias - listagem(ul>li) ?>
                        
                        <hr />
                        <br />
                        <!--mostrando posts por mês no dropdown-->
                        <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                          <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
                          <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
                        </select> ou
                        <br />
                        <br />
                        <!--mostrando apenas categorias mãe no dropdown-->
                        <select name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
                         <option value=""><?php echo esc_attr(__('Selecionar categoria')); ?></option> 
                         <?php 
                          $categories=  get_categories('depth=1'); 
                          foreach ($categories as $cat) {
							  if($cat -> parent < 1){
                            $option = '<option value="http://localhost/wp-estudos/Category/archives/'.$cat->category_nicename.'">';
                            $option .= $cat->cat_name;
                            //$option .= ' ('.$cat->category_count.')';
                            $option .= '</option>';
                            echo $option;
							}
                          }
                         ?>
                        </select>
                         <br />
                         <br />
                         
                         <div class="posts-por-ano">                 
                        <h2 class="titulo-serv22"><?php _e('Arquivos por Ano','sincomavi'); ?></h2><!--listagem de posts por mês - li>ul -->
                        <ul>
                            <?php wp_get_archives('type=yearly'); ?>
                        </ul>
                        </div><!--fim das postagens por mês-->

                        <div class="posts-por-mes">                 
                        <h2 class="titulo-serv22"><?php _e('Arquivos por Mês','sincomavi'); ?></h2><!--listagem de posts por mês - li>ul -->
                        <ul>
                            <?php wp_get_archives('type=monthly'); ?>
                        </ul>
                        </div><!--fim das postagens por mês-->
                        
                        <div class="posts-por-semana">                 
                        <h2 class="titulo-serv22"><?php _e('Arquivos por Semana','sincomavi'); ?></h2><!--listagem de posts por mês - li>ul -->
                        <ul>
                            <?php wp_get_archives('type=weekly'); ?>
                        </ul>
                        </div><!--fim das postagens por mês-->
                        
                        <div class="posts-por-dia">                 
                        <h2 class="titulo-serv22"><?php _e('Arquivos por Dia','sincomavi'); ?></h2><!--listagem de posts por mês - li>ul -->
                        <ul>
                            <?php wp_get_archives('type=daily'); ?>
                        </ul>
                        </div><!--fim das postagens por mês-->
                        
                        <h2 class="titulo-serv22">Arquivos por Categoria</h2>
                        <ul>
                             <?php wp_list_categories('orderby=slug&hierarchical=1&depth=1&exclude=20,37&feed_image=http://localhost/wp-estudos/wp-content/themes/sincomavi/img/rss-ico.png&show_count=0&title_li='); ?>
                        </ul>
                       
                        
                        <h2 class="titulo-serv22">Postagens por Categoria</h2>

						<?php while(have_posts()) : the_post(); ?>
                        
                        
                        <ul>
                        	
                            <?php $totalposts = get_posts('numberposts=200&offset=0');
                                  foreach($totalposts as $post) :
								  
                            ?>
                            <li>
                            	<div class="arq-top-text"><span class="arq-cat-bold">Em: </span><span class="arq-cat-name"><?php the_category(', ') ?></span></div>
                            	<div class="arq-data"><?php the_time('j M Y'); ?></div>
                               <a href="<?php the_permalink(); ?>"><h1 class="arq-cat-link"><?php the_title(); ?></h1></a>
                                 <?php the_excerpt(); ?>
                                  <br />
                                  <?php //comments_number('No Comments', 'One Comment', '% Comments' );?>
                            </li>
                         
                            <?php endforeach; ?>
                        </ul>
                         
                       <?php endwhile; ?>
                       
                       <h2 class="titulo-serv22">Postagens por Ordem Alfabética</h2>
                        <?php wp_get_archives('type=alpha'); ?>
                    </div><!--fim do cont-not-->
                   
                    
                    <div id="lat-noticias">
                    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral Noticias') ) : ?>
            			<p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets na '); ?><strong><?php _e('Lateral Noticias'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
            			<?php endif; ?>
                    </div><!--fim da lat-noticias-->
                
                </div><!--fim dos grupo_noticias-->
                
                
        	</div><!--fim do conteudo-noticias-->
            
</div><!--fim do conteudo-->
<?php get_footer(); //chama o rodape do site ?>