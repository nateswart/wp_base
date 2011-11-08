<?php

/**
 *
 */
function language_attributes() {
  
}

function bloginfo($v) {
  global $base_path;
  
  switch($v) {
    case 'template_directory':
      echo $base_path . path_to_theme() . "/oulipo";
      break;
      
    case 'html_type':
      break;
      
    case 'pingback_url':
      break;
    
    case 'url':
      echo $base_path;
      break;
      
    case 'name':
      echo variable_get('site_name', 'drupal');
      break;
      
    case 'description':
      echo variable_get('site_slogan', '');
      break;
      
    case 'atom_url':
      // TODO: output the feed url here
      break;
  }
}

function add_theme_support() {}
  
function wp_title() {
  return variable_get('site_name', 'drupal');
}

function has_nav_menu($menu) {
  $retval = false;
  if($menu == 'main-menu') {
    $retval = true;
  }
  return $retval;
}

function wp_nav_menu() {
  // Output the main-menu content here

  $menu = menu_navigation_links('main-menu');
  
  print '<ul class="menu">';
  foreach($menu as $item) {
    print '<li><a href="/' . $item['href'] . '">' . $item['title'] .'</a></li>';
  }
  print '</ul>';
  
}

function wp_list_pages() {
  // This is being suppressed - always rely on wp_nav_menu
}

function is_singular(){}

function wp_head() {}

function is_404() {}

function is_home() {}

function is_front_page() {}

function body_class() {}

function get_search_form() {
  print '<div id="searchform">';
  $block = module_invoke('search', 'block_view', 'search');
  print render($block);
  print '</div>';
}

function wp_footer() {}

  
  
?>