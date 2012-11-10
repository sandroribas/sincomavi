<?php
//load_theme_textdomain('sincomavi', get_template_directory() . '/languages');

if(! isset($content_width)) $content_width = 650;

/*---CACHE---*/
//define('WP_CACHE', true); // habilita o cache
//define('DISABLE_CACHE', true); // desabilita o cache se o de cima não estiver como true(para desabilitar alterar a linha acima para: define('WP_CACHE', false); // desabilita o cache)

/*---CUSTOM HEADER------------------------------------------------------------------------------------*/
$args = array(
	'width'         => 960,
	'height'        => 450,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

/*---Fundo personalizado----------------------------------------------------------------------------i-------*/
add_custom_background();

/*---MENUS---*/
/*---Suporte a menus personalizados------------------------------------------------------------------------*/
add_theme_support('nav-menus');
//Uso: wp_nav_menu(array('sort_column' => 'menu_order', 'container_class' => 'menu-header'));

/*---DOIS MENUS PERSONALIZADOS(menuPrincipal e menuRodape)-------------------------------------------------------------------------*/

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'menu' => 'Principal',
		  'esq_nav' => 'Rodape'
		)
	);
}

//--Custom Walker
class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '<strong>';
           $append = '</strong>';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}

/*---FIM DOS MENUS---*/

/*---POSTS---*/

/*---Adicionando suporte a miniaturas de Post  (disponível desde a v2.9)---*/
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	
        set_post_thumbnail_size( 650, 160, true ); // default Post Thumbnail dimensions   

}

add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'slider-div', 960, 450, true ); //300 pixels wide (and unlimited height)
	add_image_size( 'fotos-lojas', 400, 300, true ); //(cropped)
}

//---single posts
add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php"; } return $t;' ));

//---tamanho do excerpt
function new_excerpt_length($length) {
return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

//--ADICIONANDO CUSTOM POSTS

/*---HOME---
function custom_home() {
  $labels2 = array(
    'name' => _x('Home', 'post type general name'),
    'singular_name' => _x('Home', 'post type singular name'),
    'add_new' => _x('Adicionar Novo', 'Home post'),
    'add_new_item' => __('Adicionar Novo Home Post'),
    'edit_item' => __('Editar Home'),
    'new_item' => __('Novo Home Post'),
    'all_items' => __('Todos os Home Posts'),
    'view_item' => __('Ver Home'),
    'search_items' => __('Buscar Home Posts'),
    'not_found' =>  __('Nenhum Home Post encontrado'),
    'not_found_in_trash' => __('Nenhum Home Post encontrado no lixo'), 
    'parent_item_colon' => '',
    'menu_name' => 'Home Posts'//__('Pagina Inicial')

  );
  $args2 = array(
    'labels' => $labels2,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
   'menu_position' => 20,
	//'menu_icon' => get_stylesheet_directory_uri() . '/images/home_icon.png',
	'query_var' => true
  ); 
  register_post_type('home',$args2);
}
add_action( 'init', 'custom_home' );
---FIM DO HOME---*/



/*---FIM DOS POSTS---*/


/*===CUSTOMIZAÇÃO DO ADMIN============================================================================*/
//Reorganizando o menu do admin


//removendo cometários da barra do admin
function OXP_admin_bar_edit() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'OXP_admin_bar_edit' );
	
//removendo comentarios do menu do admin
function remove_menus () {
global $menu;
	$restricted = array(/*__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance')/*, __('Tools'), __('Users'), __('Settings'), __('Plugins'),*/ __('Comments')/*, __('Links')*/);
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');

//customizando o logo do painel de login
function custom_login_logo() {
        echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo-login.jpg) 50% 50% no-repeat !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

//---customizando URL do logo do login
function change_wp_login_url() {
        echo bloginfo('url');
}
add_filter('login_headerurl', 'change_wp_login_url');

//---alterando o titulo do logo
function change_wp_login_title() {
        echo get_option('blogname');
}
add_filter('login_headertitle', 'change_wp_login_title');

//---mudando a css da tela de login
function minha_tela_de_login() {
  echo '<link rel="stylesheet" type="text/css" href="
  ' . WP_CONTENT_URL . '/themes/sincomavi/css/meu_login.css" />';
}

add_action('login_head', 'minha_tela_de_login');
function teste_home(){
	if(is_home()){
		
	}
}

//BARRA DO ADMIN=================================================================================================================================================================================================
function add_custom_admin_styles() {
	echo '<style>#header-logo { background-image: url(images/logo-barra.png)!important; }</style>';

}

add_action('admin_head', 'add_custom_admin_styles');

/*---alterando o texto do footer do painel admin ===========================================================================*/
add_filter('admin_footer_text', 'remove_footer_admin'); 
function remove_footer_admin () {
echo "SINCOMAVI 2012";
}

function change_footer_version() {return 'SINCOMAVI CMS Admin - Versão 1.0';}
add_filter( 'update_footer', 'change_footer_version', 9999);

/*---separando posts de custom posts por colunas no admin----------------------------------------------------------------*/
// PEGANDO A IMAGEM DESTACADA
function ST4_get_featured_image($post_ID) {
	$post_thumbnail_id = get_post_thumbnail_id($post_ID);
	if ($post_thumbnail_id) {
		$post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
		return $post_thumbnail_img[0];
	}
}
// ADICIONANDO UMA NOVA COLUNA
function ST4_columns_head($defaults) {
	$defaults['featured_image'] = 'Imagem Destacada';
	return $defaults;
}

// MOSTRANDO A IMAGEM DESTACADA
function ST4_columns_content($column_name, $post_ID) {  
    if ($column_name == 'featured_image') {  
        $post_featured_image = ST4_get_featured_image($post_ID);  
        if ($post_featured_image) {  
            // TEM IMAGEM DESTACADA 
            echo '<img src="' . $post_featured_image . '" />';  
        }  
        else {  
            // SEM IMAGEM DESTACADA? MOSTRE A IMAGEM 'DEFAULT'
			echo "<img src='".get_bloginfo('template_url')."/images/default.png' />";
        }  
    }  
}  
add_filter('manage_posts_columns', 'ST4_columns_head');
add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);

/*===FIM DA CUSTOMIZAÇÃO DO ADMIN============================================================================*/

/*---REGISTRANDO MÚLTIPLAS SIDEBARS(10)*/
	if ( function_exists('register_sidebar') )
		//HOME
	    register_sidebar(array('name'=>'Anuncios Home',
		'name' => __( 'Anuncios Home' ),
		'id'=>'anuncios-home',
		'description' => __( 'Inclua Widgets nos Anuncios Home.' ),
		'before_widget'=>'<div>',
		'after_widget'=>'</div>',
		'before_title'=>'<h1>',
		'after_title'=>'</h1>',));
		
		register_sidebar(array('name'=>'Anuncios A',
		'name' => __( 'Anuncios A' ),
		'id'=>'anuncios-a',
		'description' => __( 'Inclua Widgets na Anuncios A.' ),
		'before_widget'=>'<div>',
		'after_widget'=>'</div>',
		'before_title'=>'<h1>',
		'after_title'=>'</h1>',));
		
		register_sidebar(array('name'=>'Anuncios B',
		'name' => __( 'Anuncios B' ),
		'id'=>'anuncios-b',
		'description' => __( 'Inclua Widgets na Lateral Home A.' ),
		'before_widget'=>'<div>',
		'after_widget'=>'</div>',
		'before_title'=>'<h1 class="especial2">',
		'after_title'=>'</h1>',));
		
		register_sidebar(array('name'=>'Lateral Legisla A',
		'name' => __( 'Lateral Legisla A' ),
		'id'=>'lateral-legislal-a',
		'description' => __( 'Inclua Widgets na Lateral Legisla A.' ),
		'before_widget'=>'<div>',
		'after_widget'=>'</div>',
		'before_title'=>'',
		'after_title'=>'',));
		
		register_sidebar(array('name'=>'Lateral Legisla B',
		'name' => __( 'Lateral Legisla B' ),
		'id'=>'lateral-legislal-b',
		'description' => __( 'Inclua Widgets na Lateral Legisla B.' ),
		'before_widget'=>'<div>',
		'after_widget'=>'</div>',
		'before_title'=>'',
		'after_title'=>'',));
		
		//as sidebars auxiliares ainda estão sem uso
		register_sidebar(array('name'=>'Sidebar 1',
		'name' => __( 'Sidebar 1' ),
		'id'=>'sidebar-1',
		'description' => __( 'Inclua Widgets na Sidebar Auxiliar Esquerda.' ),
		'before_widget'=>'<div>',
		'after_widget'=>'</div>',
		'before_title'=>'<h1">',
		'after_title'=>'</h1>',));
		
		register_sidebar(array('name'=>'Sidebar 2',
		'name' => __( 'Sidebar 2' ),
		'id'=>'sidebar-2',
		'description' => __( 'Inclua Widgets na Sidebar Auxiliar Direita.' ),
		'before_widget'=>'<div>',
		'after_widget'=>'</div>',
		'before_title'=>'<h1">',
		'after_title'=>'</h1>',));
		
		//RODAPÉ
		register_sidebar(array('name'=>'Rodapé A',
		'name' => __( 'Rodapé A' ),
		'id'=>'rodape-a',
		'description' => __( 'Inclua Widgets no Rodapé A.' ),
		'before_widget'=>'',
		'after_widget'=>'',
		'before_title'=>'<h1>',
		'after_title'=>'</h1>',));
	
	    register_sidebar(array('name'=>'Rodapé B',
		'name' => __( 'Rodapé B' ),
		'id'=>'rodape-b',
		'description' => __( 'Inclua Widgets no Rodapé A.' ),
		'before_widget'=>'',
		'after_widget'=>'',
		'before_title'=>'<h1>',
		'after_title'=>'</h1>',));
		
	    register_sidebar(array('name'=>'Rodapé C',
		'name' => __( 'Rodapé C' ),
		'id'=>'rodape-c',
		'description' => __( 'Inclua Widgets no Rodapé A.' ),
		'before_widget'=>'<ul>',
		'after_widget'=>'</ul>',
		'before_title'=>'<h1>',
		'after_title'=>'</h1>',));
/*---FIM DO REGISTRO DAS MÚLTIPLAS SIDEBARS---*/

/*--BUSCA-------------------------------------------------------------------------------------------------------------------------------------------------*/
/*---Registrando Formulário de busca personalizado. Forma de Uso: <?php get_search_form('minha_busca'); ?>---*/
 function busca_topo( $form ) {
	
	$form = '<form method="get" id="searchform" action="'. home_url( '/' ).'">
  				<div id="busca">
    				<input type="text" class="field" name="s" id="s" placeholder="'. esc_attr_e( '', 'sincomavi' ).'" />
					<input type="submit" class="submit" name="submit" id="searchsubmit" value="'. esc_attr_e( '', 'sincomavi' ).'" />
  				</div>
			</form>';
	
    /*$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </div>
    </form>';*/

    return $form;
}

add_filter( 'get_search_form', 'busca_topo' );

/*Destacando os resultados da busca========================================================================*/
function search_excerpt_highlight() {
    $excerpt = get_the_excerpt();
    $keys = implode('|', explode(' ', get_search_query()));
    $excerpt = preg_replace('/(' . $keys .')/iu', '<span class="destacando-busca">\0</span>', $excerpt);

    echo '<p>' . $excerpt . '</p>';
}
/*--Fim das personalizações da BUSCA-------------------------------------------------------------------------------------------------------------------------------------------------*/
	
//INTERNACIONALIZANDO O TEMPLATE---------------------------------------------------------
load_theme_textdomain('sincomavi', get_template_directory() . '/languages');

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('sincomavi', get_template_directory() . '/languages');
}

//---GOOGLE FONTS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!---------------------------------------------------------------------------------
function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300');
            wp_enqueue_style( 'googleFonts');
        }
 
    add_action('wp_print_styles', 'load_fonts');

function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<span class="legenda">'.$thumbnail_image[0]->post_excerpt.'</span>';
  }
}

//TWITTER

?>