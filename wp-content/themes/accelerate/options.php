<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

if ( !function_exists( 'optionsframework_option_name' ) ) {
function optionsframework_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	return $themename;
}
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	$options = array();

	// Header Options Area
	$options[] = array(
		'name' => __( 'Header', 'accelerate' ),
		'type' => 'heading'
	);

	// Header Logo upload option
	$options[] = array(
		'name' 	=> __( 'Header Logo', 'accelerate' ),
		'desc' 	=> __( 'Upload logo for your header. Recommended size is 100 X 100 pixels but you can add any size you like.', 'accelerate' ),
		'id' 		=> 'accelerate_header_logo_image',
		'type' 	=> 'upload'
	);

	// Header logo and text display type option
	$header_display_array = array(
		'logo_only' 	=> __( 'Header Logo Only', 'accelerate' ),
		'text_only' 	=> __( 'Header Text Only', 'accelerate' ),
		'both' 			=> __( 'Show Both', 'accelerate' ),
		'none'		 	=> __( 'Disable', 'accelerate' )
	);
	$options[] = array(
		'name' 		=> __( 'Show', 'accelerate' ),
		'desc' 		=> __( 'Choose the option that you want.', 'accelerate' ),
		'id' 			=> 'accelerate_show_header_logo_text',
		'std' 		=> 'text_only',
		'type' 		=> 'radio',
		'options' 	=> $header_display_array
	);

	// Header Image replace postion
	$options[] = array(
		'name' => __( 'Need to add header widgets?', 'accelerate' ),
		'desc' => sprintf( __( '<a href="%1$s">Click Here</a> &nbsp;&nbsp; Just add widgets that you like to the Header Sidebar.', 'accelerate' ), admin_url('widgets.php') ),
		'type' => 'info'
	);

	// Header Image replace postion
	$options[] = array(
		'name' => __( 'Need to replace Header Image?', 'accelerate' ),
		'desc' => sprintf( __( '<a href="%1$s">Click Here</a> &nbsp;&nbsp; You can change the image position with the option below.', 'accelerate' ), admin_url('themes.php?page=custom-header') ),
		'type' => 'info'
	);

	// Header image position option
	$options[] = array(
		'name' 		=> __( 'Header Image Position', 'accelerate' ),
		'desc' 		=> __( 'Choose top header image display position.', 'accelerate' ),
		'id' 			=> 'accelerate_header_image_position',
		'std' 		=> 'position_two',
		'type' 		=> 'radio',
		'options' 	=> array(
							'position_one' => __( 'Position One: Display the Header image just above the site title/text.', 'accelerate' ),
							'position_two' => __( 'Position Two (Default): Display the Header image between site title/text and the main/primary menu.', 'accelerate' ),
							'position_three' => __( 'Position Three: Display the Header image below main/primary menu.', 'accelerate' )
						)

	);

	/*************************************************************************/

	$options[] = array(
		'name' => __( 'Design', 'accelerate' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' 		=> __( 'Site Layout', 'accelerate' ),
		'desc' 		=> __( 'Choose your site layout. The change is reflected in whole site.', 'accelerate' ),
		'id' 			=> 'accelerate_site_layout',
		'std' 		=> 'wide',
		'type' 		=> 'radio',
		'options' 	=> array(
							'box' 	=> __( 'Boxed layout', 'accelerate' ),
							'wide' 	=> __( 'Wide layout', 'accelerate' )
						)
	);

	$options[] = array(
		'name' 		=> __( 'Default layout', 'accelerate' ),
		'desc' 		=> __( 'Select default layout. This layout will be reflected in whole site archives, search etc. The layout for a single post and page can be controlled from below options.', 'accelerate' ),
		'id' 			=> 'accelerate_default_layout',
		'std' 		=> 'right_sidebar',
		'type' 		=> 'images',
		'options' 	=> array(
								'right_sidebar' 	=> ACCELERATE_ADMIN_IMAGES_URL . '/right-sidebar.png',
								'left_sidebar' 		=> ACCELERATE_ADMIN_IMAGES_URL . '/left-sidebar.png',
								'no_sidebar_full_width'				=> ACCELERATE_ADMIN_IMAGES_URL . '/no-sidebar-full-width-layout.png',
								'no_sidebar_content_centered'		=> ACCELERATE_ADMIN_IMAGES_URL . '/no-sidebar-content-centered-layout.png',
							)
	);

	$options[] = array(
		'name' 		=> __( 'Default layout for pages only', 'accelerate' ),
		'desc' 		=> __( 'Select default layout for pages. This layout will be reflected in all pages unless unique layout is set for specific page.', 'accelerate' ),
		'id' 			=> 'accelerate_pages_default_layout',
		'std' 		=> 'right_sidebar',
		'type' 		=> 'images',
		'options' 	=> array(
								'right_sidebar' 	=> ACCELERATE_ADMIN_IMAGES_URL . '/right-sidebar.png',
								'left_sidebar' 		=> ACCELERATE_ADMIN_IMAGES_URL . '/left-sidebar.png',
								'no_sidebar_full_width'				=> ACCELERATE_ADMIN_IMAGES_URL . '/no-sidebar-full-width-layout.png',
								'no_sidebar_content_centered'		=> ACCELERATE_ADMIN_IMAGES_URL . '/no-sidebar-content-centered-layout.png',
							)
	);

	$options[] = array(
		'name' 		=> __( 'Default layout for single posts only', 'accelerate' ),
		'desc' 		=> __( 'Select default layout for single posts. This layout will be reflected in all single posts unless unique layout is set for specific post.', 'accelerate' ),
		'id' 			=> 'accelerate_single_posts_default_layout',
		'std' 		=> 'right_sidebar',
		'type' 		=> 'images',
		'options' 	=> array(
								'right_sidebar' 	=> ACCELERATE_ADMIN_IMAGES_URL . '/right-sidebar.png',
								'left_sidebar' 		=> ACCELERATE_ADMIN_IMAGES_URL . '/left-sidebar.png',
								'no_sidebar_full_width'				=> ACCELERATE_ADMIN_IMAGES_URL . '/no-sidebar-full-width-layout.png',
								'no_sidebar_content_centered'		=> ACCELERATE_ADMIN_IMAGES_URL . '/no-sidebar-content-centered-layout.png',
							)
	);

	$options[] = array(
		'name' 		=> __( 'Posts page listing display type', 'accelerate' ),
		'desc' 		=> __( 'Choose the display type for the latests posts view or posts page view (static front page).', 'accelerate' ),
		'id' 			=> 'accelerate_posts_page_display_type',
		'std' 		=> 'large_image',
		'type' 		=> 'radio',
		'options' 	=> array(
							'large_image' 	=> __( 'Large featured image', 'accelerate' ),
							'small_image' 	=> __( 'Small featured image', 'accelerate' ),
							'small_image_alternate' 	=> __( 'Small featured image with alternating sides', 'accelerate' )
						)
	);

	// Site primary color option
	$options[] = array(
		'name' 		=> __( 'Primary color option', 'accelerate' ),
		'desc' 		=> __( 'This will reflect in links, buttons and many others. Choose a color to match your site and logo.', 'accelerate' ),
		'id' 			=> 'accelerate_primary_color',
		'std' 		=> '#77CC6D',
		'type' 		=> 'color'
	);

	$options[] = array(
		'name' 		=> __( 'Need to replace default background?', 'accelerate' ),
		'desc' 		=> sprintf( __( '<a href="%1$s">Click Here</a>', 'accelerate' ), admin_url('themes.php?page=custom-background') ).'&nbsp;&nbsp;&nbsp;'.__( 'Note: The background will only be seen if you choose any of the boxed layout option in site layout option.', 'accelerate' ),
		'type' 		=> 'info'
	);

	$options[] = array(
		'name' 		=> __( 'Custom CSS', 'accelerate' ),
		'desc' 		=> __( 'Write your custom css.', 'accelerate' ),
		'id' 			=> 'accelerate_custom_css',
		'std' 		=> '',
		'type' 		=> 'textarea'
	);

	/*************************************************************************/

	$options[] = array(
		'name' => __( 'Additional', 'accelerate' ),
		'type' => 'heading'
	);

	// Favicon activate option
	$options[] = array(
		'name' 		=> __( 'Activate favicon', 'accelerate' ),
		'desc' 		=> __( 'Check to activate favicon. Upload fav icon from below option', 'accelerate' ),
		'id' 			=> 'accelerate_activate_favicon',
		'std' 		=> '0',
		'type' 		=> 'checkbox'
	);

	// Fav icon upload option
	$options[] = array(
		'name' 	=> __( 'Upload favicon', 'accelerate' ),
		'desc' 	=> __( 'Upload favicon for your site.', 'accelerate' ),
		'id' 		=> 'accelerate_favicon',
		'type' 	=> 'upload'
	);

	/*************************************************************************/

	$options[] = array(
		'name' => __( 'Slider', 'accelerate' ),
		'type' => 'heading'
	);

	// Slider activate option
	$options[] = array(
		'name' 		=> __( 'Activate slider', 'accelerate' ),
		'desc' 		=> __( 'Check to activate slider.', 'accelerate' ),
		'id' 			=> 'accelerate_activate_slider',
		'std' 		=> '0',
		'type' 		=> 'checkbox'
	);

	$num_of_slides = 4;

	// Slide options
	for( $i=1; $i<=$num_of_slides; $i++) {
		$options[] = array(
			'name' 	=>	sprintf( __( 'Slider #%1$s', 'accelerate' ), $i ),
			'desc' 	=> __( 'Upload image', 'accelerate' ),
			'id' 		=> 'accelerate_slider_image'.$i,
			'type' 	=> 'upload'
		);
		$options[] = array(
			'desc' 	=> __( 'Enter title for this slide', 'accelerate' ),
			'id' 		=> 'accelerate_slider_title'.$i,
			'std' 	=> '',
			'type' 	=> 'text'
		);
		$options[] = array(
			'desc' 	=> __( 'Enter description for this slide', 'accelerate' ),
			'id' 		=> 'accelerate_slider_text'.$i,
			'std' 	=> '',
			'type' 	=> 'textarea'
		);
		$options[] = array(
		'desc' 		=> __( 'Slider text position.', 'accelerate' ),
		'id' 			=> 'accelerate_slide_text_position'.$i,
		'std' 		=> 'right',
		'type' 		=> 'radio',
		'options' 	=> array(
							'right' 	=> __( 'Right side', 'accelerate' ),
							'left' 	=> __( 'Left side', 'accelerate' )
						)
	);
		$options[] = array(
			'desc' 	=> __( 'Enter link to redirect for the slide title', 'accelerate' ),
			'id' 		=> 'accelerate_slider_link'.$i,
			'std' 	=> '',
			'type' 	=> 'text'
		);
	}

	return $options;
}

add_action( 'optionsframework_after','accelerate_options_display_sidebar' );

/**
 * Accelerate admin sidebar
 */
function accelerate_options_display_sidebar() { ?>
	<div id="optionsframework-sidebar">
		<div class="metabox-holder">
	    	<div class="postbox">
	    		<h3><?php esc_attr_e( 'Accelerate', 'accelerate' ); ?></h3>
      			<div class="inside">
      				<div class="option-btn"><a class="btn upgrade" target="_blank" href="<?php echo esc_url( 'http://themegrill.com/themes/accelerate-pro/' ); ?>"><?php esc_attr_e( 'Upgrade to Pro' , 'accelerate' ); ?></a></div>
					<div class="option-btn"><a class="btn support" target="_blank" href="<?php echo esc_url( 'http://themegrill.com/support-forum/' ); ?>"><?php esc_attr_e( 'Support Forum' , 'accelerate' ); ?></a></div>
					<div class="option-btn"><a class="btn doc" target="_blank" href="<?php echo esc_url( 'http://themegrill.com/theme-instruction/accelerate/' ); ?>"><?php esc_attr_e( 'Documentation' , 'accelerate' ); ?></a></div>
					<div class="option-btn"><a class="btn demo" target="_blank" href="<?php echo esc_url( 'http://demo.themegrill.com/accelerate/' ); ?>"><?php esc_attr_e( 'View Demo' , 'accelerate' ); ?></a></div>
					<div class="option-btn"><a class="btn rate" target="_blank" href="<?php echo esc_url( 'http://wordpress.org/themes/accelerate/' ); ?>"><?php esc_attr_e( 'Rate this theme' , 'accelerate' ); ?></a></div>
      			</div><!-- inside -->
	    	</div><!-- .postbox -->
	  	</div><!-- .metabox-holder -->
	</div><!-- #optionsframework-sidebar -->
<?php
}
?>