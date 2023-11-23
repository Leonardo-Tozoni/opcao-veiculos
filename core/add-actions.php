<?php

// Remover Botão de Selecionar Widgets - Dashboard //
global $current_user;
wp_get_current_user();
if ($current_user->user_login !== 'alpina') {
	function hide_widget_button()
	{
		echo '<style type="text/css">
        #screen-meta-links,
        #dashboard_php_nag,
        #dashboard_site_health,
        #dashboard_right_now,
        #dashboard_quick_press,
        #dashboard_primary,
        #wp_mail_smtp_reports_widget_lite
        { display: none !important; }
        </style>';
	}
	add_action('admin_head', 'hide_widget_button');
}
// Remover Botão de Selecionar Widgets - Dashboard /

// WIDGET TOM TICKET

add_action('wp_dashboard_setup', 'wpmidia_custom_dashboard_widgets');
function wpmidia_custom_dashboard_widgets()
{
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Bem-vindo | Alpina Digital Branding', 'wpmidia_custom_dashboard_help');
}
function wpmidia_custom_dashboard_help()
{
	echo '<center><div class="container" style="background-color: #000;width: 100%;height: 400px;">
<a href="https://alpina.digital/" target="_blank" rel="noopener"><img src="https://alpina.digital/wp-content/themes/alpina_theme/assets/imgs/logo-alpina.svg" class="logotipo" style="margin: 65px 0 0 0"><br><h2 style="font-size: 20px;font-weight: 900;color: white">Alpina</h2></a><br><br><h4 style="font-size: 16px;font-weight: 400;color: white">Em caso de dúvida ou solicitações de mudanças no site,<br> acesse nossa central de chamados.</h4><br><br><h4 style="font-size: 16px;font-weight: 400;color: white">Login</h4><a href="https://alpinaweb.tomticket.com/" target="_blank" rel="noopener"><button>Entrar</button></a><br><h4><a href="https://alpinaweb.tomticket.com/helpdesk/novasenha" target="_blank" rel="noopener">Esqueceu sua senha?</a></h4><br>
</div></center>';
}


// FIM WIDGET TOM TICKET

add_action('wp_print_scripts', 'codyframe_js_support');

// Custom WordPress Login Logo
function alpina_login_logo() {
	echo '<style type="text/css">.login h1 a { background-image:url(http://alpinaweb.com.br/imagens/logotipo-alpinaweb.png) !important; background-size: 110px 80px; width: 110px; height: 80px; margin: 0 auto;}</style>';
}
add_action('login_head', 'alpina_login_logo');



/* remover ajuda */
function hide_help() {
	echo '<style type="text/css">
            #contextual-help-link-wrap, .updated.fade, .update-nag { display: none !important; }
	</style>';
}
add_action('admin_head', 'hide_help');



//Remove  WordPress Welcome Panel
add_action( 'load-index.php', 'remove_welcome_panel' );

function remove_welcome_panel()
{
	remove_action('welcome_panel', 'wp_welcome_panel');
	$user_id = get_current_user_id();
	if (0 !== get_user_meta( $user_id, 'show_welcome_panel', true ) ) {
		update_user_meta( $user_id, 'show_welcome_panel', 0 );
	}
}


// Remove script embed do head
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );



/* LINK PARA O SUPORTE DA ALPINA NA BARRA DO ADMIN */
function wp_admin_bar_new_item() {
	global $wp_admin_bar;
	$wp_admin_bar->add_menu(array(
		'id' => 'wp-admin-bar-new-item',
		'title' => __('Suporte Alpina'),
		'href' => 'https://alpinaweb.tomticket.com/'
	));
}
add_action('wp_before_admin_bar_render', 'wp_admin_bar_new_item');
/* LINK PARA O SUPORTE DA ALPINA NA BARRA DO ADMIN FIM */

/*ESCONDE MENSAGENS DO WORDPRESS E DE PLUGINS NO ADMIN*/
function pr_disable_admin_notices() {
	global $wp_filter;
	if ( !current_user_can('administrator') ) {
		unset( $wp_filter['admin_notices'] );
	}
}
add_action( 'admin_print_scripts', 'pr_disable_admin_notices' );
/*ESCONDE MENSAGENS DO WORDPRESS E DE PLUGINS NO ADMIN FIM*/

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

?>