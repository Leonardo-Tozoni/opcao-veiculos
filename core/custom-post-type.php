<?php
/**
 * alpina_post_type class.
 *
 * @package  Alpina
 */

/**
 * Adicionamos uma ação no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_projetos' );
add_action( 'init', 'create_post_type_vagas' );

/**
 * Esta é a função que é chamada pelo add_action()
 */

function create_post_type_projetos() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
	    'name' => _x('Projetos', 'post type general name'),
	    'singular_name' => _x('Projeto', 'post type singular name'),
	    'add_new' => _x('Adicionar Novo', 'Projeto'),
	    'add_new_item' => __('Adicionar Novo Projeto'),
	    'edit_item' => __('Editar Projeto'),
	    'new_item' => __('Novo Projetos'),
	    'all_items' => __('Todos os Projetos'),
	    'view_item' => __('Ver Projeto'),
	    'search_items' => __('Pesquisar Projetos'),
	    'not_found' =>  __('Nenhum Projeto Encontrado'),
	    'not_found_in_trash' => __('Nenhum Projeto na Lixeira'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Projetos'
    );
    
    /**
     * Registamos o tipo de post projetos através desta função
     * passando-lhe os labels e parâmetros de controle.
     */
    register_post_type( 'projetos', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'projetos',
	    'rewrite' => array(
		 'slug' => 'projetos',
		 'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => null,
			'menu_icon' => 'dashicons-align-full-width', // to get new icons access: https://developer.wordpress.org/resource/dashicons/#calendar
	    'supports' => array('title','editor','revisions','thumbnail')
	    )
    );

		function create_post_type_vagas() {

			/**
			 * Labels customizados para o tipo de post
			 * 
			 */
			$labels = array(
				'name' => _x('Banner Principal', 'post type general name'),
				'singular_name' => _x('Vaga', 'post type singular name'),
				'add_new' => _x('Adicionar Novo', 'Banner'),
				'add_new_item' => __('Adicionar Novo Banner'),
				'edit_item' => __('Editar Banner'),
				'new_item' => __('Novo Banner'),
				'all_items' => __('Todos os Banner'),
				'view_item' => __('Ver Banner'),
				'search_items' => __('Pesquisar Banner'),
				'not_found' =>  __('Nenhum Banner Encontrado'),
				'not_found_in_trash' => __('Nenhum Vaga na Lixeira'),
				'parent_item_colon' => '',
				'menu_name' => 'Banner'
			);
			
			/**
			 * Registamos o tipo de post projetos através desta função
			 * passando-lhe os labels e parâmetros de controle.
			 */
			register_post_type( 'vagas', array(
				'labels' => $labels,
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'has_archive' => 'vagas',
				'rewrite' => array(
			 'slug' => 'vagas',
			 'with_front' => false,
				),
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'menu_icon' => 'dashicons-id-alt',
				'supports' => array('title','revisions')
				)
			);
			
		}
    
}