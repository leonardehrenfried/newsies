<?php
$content_width = 580; // Width of div#main, for embedding media

// Prevent use of unsupported widgets
add_action('widgets_init','my_unregister_widgets');
function my_unregister_widgets() {
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Tag_Cloud');
}

// Set up widgets
if ( function_exists('register_sidebar') )
	register_sidebar();

// Custom search widget
function widget_opy_search() {
?>
<h2><label for="s">Search</label></h2>
<?php get_search_form()?>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_opy_search');

// See http://www.ericmmartin.com/conditional-pagepost-navigation-links-in-wordpress-redux/
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

?>