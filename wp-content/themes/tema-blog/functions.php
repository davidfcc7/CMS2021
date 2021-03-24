<?php 
//menu
if (function_exists('register_nav_menus')) {
    register_nav_menus (array('topMenu' => 'Menu principal superior'));
}
//imagenes destacadas
if (function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}
?>