<?php
/**
 * O template do formulário de busca do thema 2BR
 *
 * @package WordPress
 * @subpackage 2Br
 * @since 2Br 1.0
 */
?>
<div id="busca">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<span class="label-busca">Busca</span><input type="text" class="field" name="s" id="s" />
		<input type="hidden" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Buscar', 'sincomavi' ); ?>" />
	</form>
</div>