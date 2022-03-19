<?php 

/*
Theme Functions.

@package bortolon
*/

  function addStyleScripts() {
      wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css');
      wp_enqueue_script('customindexjs', get_template_directory_uri() . '/index.js', array(), '1.0.0', true);
  }

  add_action('wp_enqueue_scripts', 'addStyleScripts');

  //adicionando posts do blog
  $argsblog = array(
    'category_name' => 'Blog',
    'numberposts' => 3
  );

  $argsdestaq = array(
    'category_name' => 'Destaque',
    'numberposts' => 2
  );

  $argsblogdefinitive = array (
    'category_name' => 'Blog'
  );

  $argsdepoimentos = array (
    'post_type' => 'Depoimentos'
  );

  $argsslideinicial = array (
    'category_name' => 'Slideinicial',
    'numberposts' => 1
  );

  $mypostsblog = get_posts($argsblog);
  $destaqueposts = get_posts($argsdestaq);
  $mypostsblogdefinitive = get_posts($argsblogdefinitive);
  $depoimentos = get_posts($argsdepoimentos);
  $inicialSlide = get_posts($argsslideinicial);

  // Our custom post type function
function create_posttype() {
 
  register_post_type( 'Depoimentos',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Depoimentos' ),
              'singular_name' => __( 'Depoimentos' )
          ),
          'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'Depoimentos'),
          'show_in_rest' => true,
          'menu_icon' => 'dashicons-format-chat',
          'menu_position' => 4,

      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
  
 

?>