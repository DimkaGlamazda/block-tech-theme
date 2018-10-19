<?php
class News
{
  private static $labels =
  [
    'labels' => [
	    'name' => 'News',
	    'singular_name' => 'News',
	    'add_new' => 'New News',
	    'all_items' => 'All News',
	    'add_new_item' => 'New News',
	    'edit_item' => 'Edit News',
        'new_item' => 'New News',
	    'view_item' => 'View News',
	    'search_item' => 'Search News',
	    'not_found' => 'No News Found',
	    'not_found_in_trash' => 'No News found in trash',
	    'parent_item_column' => 'Parent Item'
    ]
  ];

  private static $args =
  [
	  'public' => true,
      'has_archive' => true,
	  'publicly_queryable' => true,
	  'query_var' => true,
	  'rewrite' => true,
	  'capability_type' => 'post',
	  'menu_icon' => 'dashicons-format-aside',
	  'supports' => [ 'title', 'editor', 'thumbnail' ],
	  'menu_position' => 6,
	  'exclude_from_search' => true
  ];

  public static function init()
  {
	  add_theme_support('post-thumbnails');
	  add_post_type_support( 'news', 'thumbnail');
	  register_post_type('news', array_merge(self::$labels, self::$args));
  }

  public static function load()
  {
	  add_action('init', 'News::init');
  }

  public static function getNews($limit, $offset = 0)
  {
	  $args = [
		  'post_type' => 'news',
		  'posts_per_page' => $limit,
		  'offset' => $offset,
	  ];

	  $result = [];

	  $news = new WP_Query($args);

	  while ($news->have_posts()) : $news->the_post();
		  $result[] = [
		  	'title' => get_the_title(),
			'date'  => get_the_date( 'Y/m/d' ),
			'img_src' => get_the_post_thumbnail_url(),
			'link' => get_permalink()
		  ];
	  endwhile;

	  return $result;
  }
}