<?php
/**
 * alpina_post_type class.
 *
 * @package  Alpina
 */

add_action( 'init', 'create_custom_taxonomy_projetos', 0 );
 
//create a custom taxonomy to CPT
function create_custom_taxonomy_projetos() {
 
  $labels = array(
    'name' => _x( 'Tipos', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Categoria' ),
    'all_items' => __( 'Todas Categorias' ),
    'parent_item' => __( 'Item pai da Categoria' ),
    'parent_item_colon' => __( 'Pai da Categoria:' ),
    'edit_item' => __( 'Editar Categoria' ), 
    'update_item' => __( 'Atualizar Categoria' ),
    'add_new_item' => __( 'Adicionar nova Categoria' ),
    'new_item_name' => __( 'Novo nome para Categoria' ),
    'menu_name' => __( 'Tipos' ),
  ); 	
 
  register_taxonomy('tipos',array('projetos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipo' ),
  ));
}