<?php 
//menu
if (function_exists('register_nav_menus')) {
    register_nav_menus (array('topMenu' => 'Menu principal superior'));
}
//imagenes destacadas
if (function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}
//sidebar
add_action('widgets_init','my_register_sidebars');
function my_register_sidebars(){
    register_sidebars(
        array(
            'id'    => 'primary',
            'name'  => ('primary sidebar'),
            'id'    => ('a short description of the sidebar'),
            'id'    => '<div id="%1$s" class="widget %2$s my-3">',
            'id'    => '</div>',
            'id'    => '<h3 class="widget-title">',
            'id'    => '</h3>'
            
        )
    );
}
?>