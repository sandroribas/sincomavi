<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="url" content="http://www.aristaticoesouza.com.br" />
<meta name="language" content="portuguese" />
<meta name="description" content=""/><!--INCLUIR DESCRIPTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<meta name="keywords" content=""/><!--INCLUIR KEYWORDS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<meta name="owner" content="contato@aristaticoesouza.com.br"/>
<meta name="author" content="Sandro Ribas"/>
<meta name="reply-to" content="sandro@twobrasil.com" />
<meta http-equiv="expires" content="never"/>
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="1 Days" />
<title><?php bloginfo('name'); echo ' &bull; ' ; if (is_home () ) { bloginfo('name'); } elseif (is_category() || is_tag()) { single_cat_title(); echo ' &bull; ' ; bloginfo('name'); } elseif (is_single() || is_page()) { single_post_title(); } else { wp_title('',true); } ?>
</title>

<!-- //////// Favicon ////////  -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" />
    <!-- //////// Css - stylesheets ////////  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
    <!--<link href="<?php //bloginfo("template_url"); ?>/css/meu_login.css" rel="stylesheet" type="text/css" />estilo do login de usuários do WP-->
	
    <!-- //////// JS //////// -->
	<!-- //////// jQuery //////// -->
	<?php //wp_enqueue_script("jquery"); ?>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<!-- ////////Script personalizado ////////  -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.bgpos.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/sincomavi.js"></script>

</head>

<body>
<div id="container">
	<div id="site">
    	<div id="topo">
             <div id="logo-topo">
             	<img class="logot" src="<?php bloginfo('template_directory');?>/img/logo-topo.png" alt="SINCOMAVI" />
             </div><!--fim logo-topo-->
             <div id="nav-topo">
				<?php  //menu class walker
                wp_nav_menu( array(
                 'container' =>false,
                 'theme_location' => 'nav-topo',
                                'menu' => 'menuPrincipal',
                                'menu_id' => 'dropdown-menu',
                                'menu_class' => 'menu',
                                 'menu_class' => 'nav',
                                 'echo' => true,
                                 'before' => '',
                                 'after' => '',
                                 'link_before' => '',
                                 'link_after' => '',
                                 'depth' => 0,
                                 'walker' => new description_walker())
                 );
                  ?>
             </div><!--fim nav-topo-->