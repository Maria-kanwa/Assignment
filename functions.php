<?php
function icodeguru_files()

{
    
   
        wp_enqueue_style('Assignment site_main_styles', get_stylesheet_uri());
   // wp_enqueue_style('Assignment site_main_styles', "/wp-content/themes/Assignment/style.css");
    
    
        wp_enqueue_script('main.js', get_theme_file_uri('/main.js'), NULL, '1.0');
    
    
  
}
add_action('wp_enqueue_scripts', 'icodeguru_files');



function icodeguru_features(){
    register_nav_menus(array(
'primary'=>'Main menu',
'secondary'=>'footer menu',
'useful'=>'useful links',
    ));
    add_theme_support('custom-logo');// logo registration
    add_theme_support('post-thumbnails');// feature image or thumbnail registration
}
add_action('after_setup_theme','icodeguru_features') ;


function icodeguru_sidebars()   {
    register_sidebar(array(
'name' => ('Sidebar 1'),
'id'=>'sidebar-1',
//giving class to sidebar for styling in css
'before_widget' => ' <section id ="first-sidebar" class ="sidebar-1">',
'after_widget' => '</section>',
    ));
    

}
add_action('widgets_init','icodeguru_sidebars');



?>