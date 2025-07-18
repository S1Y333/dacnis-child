<?php

use ColibriWP\Theme\Defaults;

function dacnis_theme_print_footer_copyright() {
	?>
	<div class="h-global-transition-all">
		<p>
			&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'blogname' ); ?>.
			<?php
			printf(
				__( 'Powered by %s', 'dacnis' ),
				'<a target="_blank" rel="noreferrer" href="https://Magnetnetwork.ca/">Magnet</a>'
			);
			?>
		</p>
	</div>
	<?php
}

function dacnis_theme_print_menu_footer_copyright() {
	?>
	<div class="h-global-transition-all">
		&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'blogname' ); ?>
	</div>
	<?php
}

function dacnis_print_color_scheme() {
	$colors = Defaults::get( 'colors' );

	$color_vars = array();
	foreach ( $colors as $color => $value ) {
		list( $r, $g, $b ) = $value;
		$color_vars[]      = "--{$color}: {$r},{$g},{$b}";
	}

	?>
	<style id="<?php esc_attr( get_template() ); ?>-<?php esc_attr( get_stylesheet() ); ?>-color-scheme">
		:root {
		<?php echo implode( ';', $color_vars ); ?>
		}
	</style>
	<?php
}


function dacnis_print_page_title() {
	$title = '';
	if ( is_404() ) {
		$title = __( 'Page not found', 'dacnis' );
	} elseif ( is_search() ) {
		$title = sprintf( __( 'Search Results for &#8220;%s&#8221;', 'dacnis' ), get_search_query() );
	} elseif ( is_home() ) {
		if ( is_front_page() ) {
			$title = get_bloginfo( 'name' );
		} else {
			$title = single_post_title( '', false );
		}
	} elseif ( is_archive() ) {
		if ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );
		} else {
			$title = get_the_archive_title();
		}
	} elseif ( is_single() ) {
		$title = get_bloginfo( 'name' );

		global $post;
		if ( $post ) {
			// apply core filter
			$title = apply_filters( 'single_post_title', $post->post_title, $post );
		}
	} else {
		$title = get_the_title();
	}

	echo $title;
}

function dacnis_post_comments_template( $form = '' ) {
	return get_template_directory() . '/template-parts/blog/comments.php';
}

function dacnis_post_comments( $attrs = array() ) {

	ob_start();

	if ( comments_open( get_the_ID() ) ) {
		dacnis_theme()->setState( 'comments_template_data', $attrs );
		add_filter( 'comments_template', 'dacnis_post_comments_template' );
		comments_template();
		remove_filter( 'comments_template', 'dacnis_post_comments_template' );
	} else {
		echo $attrs['disabled'];
	}
	$content = ob_get_clean();

	echo $content;
}

function dacnis_post_excerpt_length( $length ) {
	$length = dacnis_theme()->getState( 'post_excerpt_length', $length );
	dacnis_theme()->deleteState( 'post_excerpt_length' );

	return $length;
}

function dacnis_post_excerpt( $attrs = array() ) {

	if ( isset( $attrs['max_length'] ) ) {
		dacnis_theme()->setState( 'post_excerpt_length', $attrs['max_length'] );

	}
	add_filter( 'excerpt_length', 'dacnis_post_excerpt_length' );

	echo get_the_excerpt();

	dacnis_theme()->deleteState( 'post_excerpt_length' );

	remove_filter( 'excerpt_length', 'dacnis_post_excerpt_length' );
}

function dacnis_post_missing_featured_image_class() {
	if ( has_post_thumbnail() ) {
		echo '';

	} else {
		echo 'kubio-post-featured-image--image-missing';
	}

}

function dacnis_get_navigation_button_link( $prev = false ) {

	if ( is_single() ) {
		dacnis_get_single_post_nav_button_link( $prev );
	}

	dacnis_get_archive_post_nav_button_link( $prev );

}

function dacnis_get_single_post_nav_button_link( $prev = false ) {

	$post = get_adjacent_post( false, '', $prev, 'category' );
	echo esc_url( get_permalink( $post ) );
}

function dacnis_get_archive_post_nav_button_link( $prev = false ) {

	if ( $prev ) {
		echo get_previous_posts_page_link();
	} else {
		echo get_next_posts_page_link();
	}

}

function dacnis_has_pagination() {

	if ( is_single() ) {
		$prev_post = get_adjacent_post();
		$next_post = get_adjacent_post( false, ',true' );

		return ( $prev_post instanceof WP_Post || $next_post instanceof WP_Post );
	}

	global $wp_query;
	$total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;

	return ( $total > 1 );
}

function dacnis_has_pagination_button( $prev = false ) {
	if ( is_single() ) {
		$post = get_adjacent_post( false, '', $prev, 'category' );

		return ( $post instanceof WP_Post );
	}
	global $wp_query;
	$total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
	$current = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;

	if ( $prev ) {
		return ( $current > 1 );
	} else {
		return ( intval( $current ) < intval( $total ) );
	}
}

function dacnis_pagination_numbers() {
	echo paginate_links(
		array(
			'prev_next' => false,
			'show_all'  => false,
		)
	);
}

function dacnis_tags_list( $placeholder = '' ) {
	$post_tags = get_the_tags();

	if ( ! empty( $post_tags ) ) {
		$output = '<div>';

		foreach ( $post_tags as $tag ) {
			$output .= '<a href="' . esc_url( get_category_link( $tag->term_id ) ) . '">' . $tag->name . '</a>';
		}

		$output  = trim( $output );
		$output .= '</div>';

		echo $output;
	} else {
		echo $placeholder;
	}

}

function dacnis_categories_list( $placeholder = '' ) {
	$categories = get_the_category();

	if ( ! empty( $categories ) ) {
		$output = '<div>';

		foreach ( $categories as $category ) {
			$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . $category->name . '</a>';
		}

		$output  = trim( $output );
		$output .= '</div>';

		echo $output;
	} else {
		echo $placeholder;
	}
}

function dacnis_print_archive_entry_class( $class = '' ) {

	$classes = array( 'post-list-item', 'h-col-xs-12', 'space-bottom' );
	$classes = array_merge( $classes, explode( ' ', $class ) );
	$classes = get_post_class( $classes );

	$default     = get_theme_mod( 'blog_posts_per_row', Defaults::get( 'blog_posts_per_row' ) );
	$postsPerRow = max( 1, apply_filters( 'colibriwp_posts_per_row', $default ) );

	$classes[] = 'h-col-sm-12 h-col-md-' . ( 12 / intval( $postsPerRow ) );

	$classes = apply_filters( 'colibriwp_archive_entry_class', $classes );

	$classesText = implode( ' ', $classes );

	echo esc_attr( $classesText );
}
