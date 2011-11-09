<?php

/**
 * http://codex.wordpress.org/Function_Reference/language_attributes
 */
function language_attributes($doctype=null) {
  global $language;
  //TODO: this may be too much output, depending on how bloginfo() is supposed to work
  echo 'xmlns="http://www.w3.org/1999/xhtml" ';
  echo 'xml:lang="' . $language->language . '" ';
  echo 'lang="' . $language->language . '" dir="' . $language->dir . '"';
}


/**
 * http://codex.wordpress.org/Function_Reference/bloginfo
 */
function bloginfo($show=null) {
  global $base_path;
  
  switch($show) {
    case 'name':
      echo variable_get('site_name', 'drupal');
      break;
    
    case 'description':
      echo variable_get('site_slogan', '');
      break;
      
    case 'admin_email':
      //TODO:
      break;
    
    case 'url':
      echo $base_path;
      break;
    
    case 'wpurl':
      echo $base_path;
      break;
      
    case 'stylesheet_directory':
      //TODO:
      break;
    
    case 'stylesheet_url':
      //TODO:
      break;
    
    case 'theme/style.css':
      //TODO:
      break;
    
    case 'template_directory':
      echo $base_path . path_to_theme() . "/wp-theme";
      break;
    
    case 'template_url':
      //TODO:
      break;
    
    case 'atom_url':
      //TODO:
      break;
    
    case 'rss2_url':
      //TODO:
      break;
    
    case 'rss_url':
      //TODO:
      break;
    
    case 'pingback_url':
      echo $base_path . "/xmlrpc.php";
      break;
    
    case 'rdf_url':
      //TODO:
      break;
    
    case 'comments_atom_url':
      //TODO:
      break;
    
    case 'comments_rss2_url':
      //TODO:
      break;
    
    case 'charset':
      //TODO:
      break;
    
    case 'html_type':
      //TODO:
      break;
    
    case 'language':
      //TODO:
      break;
      
    case 'text_direction':
      //TODO:
      break;
    
    case 'version':
      echo "0.0a"; // Honestly, do we really want to advertize exact versions?
      break;
  }
}


/**
 * http://codex.wordpress.org/Function_Reference/add_theme_support
 */
function add_theme_support() {
  // Currently supress
}
  

/**
 * http://codex.wordpress.org/Function_Reference/wp_title
 */
function wp_title($sep=null, $echo=null, $seplocation=null) {
  //TODO: respond to variable passed in
  return variable_get('site_name', 'drupal');
}


/**
 * http://codex.wordpress.org/Function_Reference/has_nav_menu
 */
function has_nav_menu($location=null) {
  //TODO: Just making assumptions for now
  $retval = false;
  if($location == 'main-menu') {
    $retval = true;
  }
  return $retval;
}


/** 
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function wp_nav_menu() {
  // Output the main-menu content here
  $menu = menu_navigation_links('main-menu');
  $output = "";
  $output .= '<ul class="menu">';
  foreach($menu as $item) {
    $output .= '<li><a href="/' . $item['href'] . '">' . $item['title'] .'</a></li>';
  }
  $output .= '</ul>';
  
  echo $output;
}


/**
 * http://codex.wordpress.org/Function_Reference/wp_list_pages
 */
function wp_list_pages() {
  // This is being suppressed - always rely on wp_nav_menu
  // TODO: implement for real
}


/**
 * http://codex.wordpress.org/Function_Reference/is_singular
 */
function is_singular(){
  //TODO: 
  return false;
}


/**
 * http://codex.wordpress.org/Function_Reference/wp_head
 */
function wp_head() {
  //TODO:
}


/** 
 * http://codex.wordpress.org/Function_Reference/is_404
 */
function is_404() {
  return false;
}


/**
 * http://codex.wordpress.org/Function_Reference/is_home
 */
function is_home() {
  //TODO:
  return false;
}


/**
 * http://codex.wordpress.org/Function_Reference/is_front_page
 */
function is_front_page() {
  return false;
}


/**
 * http://codex.wordpress.org/Function_Reference/body_class
 */
function body_class() {
  //TODO:
}


/**
 * http://codex.wordpress.org/Function_Reference/get_search_form
 */
function get_search_form() {
  $output = '';
  
  $output .= '<div id="searchform">';
  $block = module_invoke('search', 'block_view', 'search');
  $output .= render($block);
  $output .= '</div>';
  
  echo $output;
}


/**
 * http://codex.wordpress.org/Function_Reference/wp_footer
 */
function wp_footer() {
  //TODO:
}

  
  
?>