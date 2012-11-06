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
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rodape C') ) : ?>
                    <p><?php _e('Esta coluna é uma widget area. '); ?><?php _e('Adicione widgets no '); ?><strong><?php _e('Footer A'); ?></strong> <?php _e('para mais funcionalidades!'); ?></p>
                    <?php endif; ?>
                </div><!--rodape-cols fim-->
                
            </div><!--fim do conteudo-rodape-->
        </div><!--fim do rodape-->
    </div><!--fim do site-->
</div><!--fim do container-->
</body>
</html>