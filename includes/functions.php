<?php

add_action( 'admin_menu', 'postless_remove_menus' );

/**
 * Remove admin menu items.
 *
 * @return void
 */
function postless_remove_menus() {

	remove_menu_page( 'edit.php' );

}

add_action( 'admin_bar_menu', 'postless_remove_nodes', 999 );

/**
 * Remove admin toolbar nodes.
 *
 * @return void
 */
function postless_remove_nodes() {

	global $wp_admin_bar;

	$wp_admin_bar->remove_node( 'new-post' );

}

add_action( 'admin_init', 'postless_remove_dashboard_widgets' );

/**
 * Remove dashboard widgets.
 *
 * @return void
 */
function postless_remove_dashboard_widgets() {

	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'normal' );

}

add_action( 'admin_head', 'postless_hide_related_elements' );

/**
 * Hide related elements.
 *
 * @return string
 */
function postless_hide_related_elements() {

	?>
	<style type="text/css">
	.welcome-panel-column li:first-child,
	#dashboard_right_now .main ul li.post-count,
	.postbox #published-posts {
		display: none;
	}
	</style>
	<?php

}

/* End of file functions.php */