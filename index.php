<?php
/*
* Plugin Name: Facility Types
* Description: Registers the different types of services/facilities associated with market sounding projects
* Version: 1.0
* Author: navish
* Author URI: https://github.com/navish
*/

function mksounding_register_taxonomy_facility()
{
    $labels = [
        'name'              => _x('Facility Type', 'taxonomy general name'),
        'singular_name'     => _x('Facility Type', 'taxonomy singular name'),
        'search_items'      => __('Search Facilities'),
        'all_items'         => __('All Facilities'),
        'parent_item'       => __('Parent Facility'),
        'parent_item_colon' => __('Parent Facility:'),
        'edit_item'         => __('Edit Facility'),
        'update_item'       => __('Update Facility'),
        'add_new_item'      => __('Add New Facility'),
        'new_item_name'     => __('New Facility Name'),
        'menu_name'         => __('Facility'),
    ];
    $args = [
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'facility-types'],
    ];
    register_taxonomy('Facility', ['projects'], $args);
}
add_action('init', 'mksounding_register_taxonomy_facility');
