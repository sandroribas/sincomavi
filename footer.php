		<div id="rodape">
        	<div id="conteudo-rodape">
            
                <div class="rodape-col1">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rodape A') ) : ?>
                    <p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets no '); ?><strong><?php _e('Footer A'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
                    <?php endif; ?>
                </div><!--rodape-cols fim-->
                
                <div class="rodape-col2">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rodape B') ) : ?>
                    <p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets no '); ?><strong><?php _e('Footer A'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
                    <?php endif; ?>
                </div><!--rodape-cols fim-->
                
                <div class="rodape-col3">
					<ul>
					  <li><a href="https://twitter.com/@sincomavi" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter-ico.png" alt="Siga-nos!" /></a></li>
					  <li><a href="https://www.facebook.com/SINCOMAVI/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/fb-ico.png" alt="Curta a SINCOMAVI no Facebook!" /></a></li>
					  <li><a href="http://pinterest.com/sincomavi/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/pin-ico.png" alt="Pin us!" /></a></li>
					  <li><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/rss-ico.png" alt="Assine nossa RSS!" /></a></li>
					</ul>
                </div><!--rodape-cols fim-->
                
            </div><!--fim do conteudo-rodape-->
        </div><!--fim do rodape-->
    </div><!--fim do site-->
</div><!--fim do container-->
</body>
</html>