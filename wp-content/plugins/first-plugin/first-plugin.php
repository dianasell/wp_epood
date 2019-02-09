<?php
/*
Plugin Name: First plugin
Plugin URI: http://dianasell.ikt.khk.ee/wp-epood/
Description: This is my first WordPress Plugin
Author: Diana Sell
Author URI: http://dianasell.ikt.khk.ee/wp-epood/
Version: 1.0
*/
 
add_action('admin_bar_menu', 'add_toolbar_items', 100);
function add_toolbar_items($admin_bar){
    $admin_bar->add_menu( array(
        'id'    => 'my-item',
        'title' => 'My Item',
        'href'  => '#',
        'meta'  => array(
            'title' => __('My Item'),            
        ),
    ));
    $admin_bar->add_menu( array(
        'id'    => 'my-sub-item',
        'parent' => 'my-item',
        'title' => 'My Sub Menu Item',
        'href'  => '#',
        'meta'  => array(
            'title' => __('My Sub Menu Item'),
            'target' => '_blank',
            'class' => 'my_menu_item_class'
        ),
    ));
    $admin_bar->add_menu( array(
        'id'    => 'my-second-sub-item',
        'parent' => 'my-item',
        'title' => 'My Second Sub Menu Item',
        'href'  => '#',
        'meta'  => array(
            'title' => __('My Second Sub Menu Item'),
            'target' => '_blank',
            'class' => 'my_menu_item_class'
        ),
    ));
}