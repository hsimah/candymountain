<?php

/**
 * Plugin Name: Candy Mountain Dashboard
 * Plugin URI: https://hsimah.com
 * Description: Home dashboard plugin
 * Author: hsimah
 * Version: 0.1.0-alpha
 * Text Domain: candymountain
 * License: GPL-3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package  CandyMountain
 * @author   hsimah
 * @version  0.0.1
 */


if (!defined('ABSPATH')) exit;

final class CandyMountain
{

  public static function init()
  {
    self::register_types();
    self::register_fields();
  }

  private static function register_types()
  {
    register_post_type('task', [
      'label' => esc_html__('Tasks', 'candymountain'),
      'labels' => [
        'menu_name' => esc_html__('Tasks', 'candymountain'),
        'name_admin_bar' => esc_html__('Task', 'candymountain'),
        'add_new' => esc_html__('Add new', 'candymountain'),
        'add_new_item' => esc_html__('Add new Task', 'candymountain'),
        'new_item' => esc_html__('New Task', 'candymountain'),
        'edit_item' => esc_html__('Edit Task', 'candymountain'),
        'view_item' => esc_html__('View Task', 'candymountain'),
        'update_item' => esc_html__('Update Task', 'candymountain'),
        'all_items' => esc_html__('All Tasks', 'candymountain'),
        'search_items' => esc_html__('Search Tasks', 'candymountain'),
        'parent_item_colon' => esc_html__('Parent Task', 'candymountain'),
        'not_found' => esc_html__('No Tasks found', 'candymountain'),
        'not_found_in_trash' => esc_html__('No Tasks found in Trash', 'candymountain'),
        'name' => esc_html__('Tasks', 'candymountain'),
        'singular_name' => esc_html__('Task', 'candymountain'),
      ],
      'public' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
      'show_in_rest' => false,
      'capability_type' => 'post',
      'hierarchical' => false,
      'has_archive' => true,
      'query_var' => true,
      'can_export' => true,
      'rewrite_no_front' => false,
      'show_in_graphql' => true,
      'graphql_single_name' => 'Task',
      'graphql_plural_name' => 'Tasks',
      'supports' => [
        'title',
        'editor',
        'author',
        'thumbnail',
      ],
      'rewrite' => true,
    ]);
  }

  private static function register_fields()
  {
    add_filter('rwmb_meta_boxes', function ($meta_boxes) {
      return $meta_boxes;
    }, 10, 1);
  }
}

add_filter('init', ['CandyMountain', 'init'], 10);
