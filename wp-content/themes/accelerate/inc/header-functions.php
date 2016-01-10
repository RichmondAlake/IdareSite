<?php
/**
 * Contains all the fucntions and components related to header part.
 *
 * @package 		ThemeGrill
 * @subpackage 		Accelerate
 * @since 			Accelerate 1.0
 */

/****************************************************************************************/

// Backwards compatibility for older versions
if ( ! function_exists( '_wp_render_title_tag' ) ) :

   add_action( 'wp_head', 'accelerate_render_title' );
   function accelerate_render_title() {
      ?>
      <title>
      <?php
      /**
       * Print the <title> tag based on what is being viewed.
       */
      wp_title( '|', true, 'right' );
      ?>
      </title>
      <?php
   }

   add_filter( 'wp_title', 'accelerate_filter_wp_title' );
   if ( ! function_exists( 'accelerate_filter_wp_title' ) ) :
      /**
       * Modifying the Title
       *
       * Function tied to the wp_title filter hook.
       * @uses filter wp_title
       */
      function accelerate_filter_wp_title( $title ) {
      	global $page, $paged;

      	// Get the Site Name
         $site_name = get_bloginfo( 'name' );

         // Get the Site Description
         $site_description = get_bloginfo( 'description' );

         $filtered_title = '';

      	// For Homepage or Frontpage
         if(  is_home() || is_front_page() ) {
      		$filtered_title .= $site_name;
      		if ( !empty( $site_description ) )  {
              	$filtered_title .= ' &#124; '. $site_description;
      		}
         }
      	elseif( is_feed() ) {
      		$filtered_title = '';
      	}
      	else{
      		$filtered_title = $title . $site_name;
      	}

      	// Add a page number if necessary:
      	if( $paged >= 2 || $page >= 2 ) {
      		$filtered_title .= ' &#124; ' . sprintf( __( 'Page %s', 'accelerate' ), max( $paged, $page ) );
      	}

      	// Return the modified title
         return $filtered_title;
      }
   endif;

endif;

/****************************************************************************************/

if ( ! function_exists( 'accelerate_render_header_image' ) ) :
/**
 * Shows the small info text on top header part
 */
function accelerate_render_header_image() {
	$header_image = get_header_image();
	if( !empty( $header_image ) ) {
	?>
		<div class="header-image-wrap"><div class="inner-wrap"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></div></div>
	<?php
	}
}
endif;

/****************************************************************************************/

if ( ! function_exists( 'accelerate_featured_image_slider' ) ) :
/**
 * display featured post slider
 */
function accelerate_featured_image_slider() {
	global $post;
	?>
		<section id="featured-slider">
			<div class="slider-cycle inner-wrap">
				<div class="slider-rotate">
				<?php
				$num_of_slides = of_get_option( 'accelerate_slider_number', '5' );
				for( $i = 1; $i <= $num_of_slides; $i++ ) {
					$accelerate_slider_title = of_get_option( 'accelerate_slider_title'.$i , '' );
					$accelerate_slider_text = of_get_option( 'accelerate_slider_text'.$i , '' );
					$accelerate_slider_image = of_get_option( 'accelerate_slider_image'.$i , '' );
					$accelerate_slide_text_position = of_get_option( 'accelerate_slide_text_position'.$i , 'right' );
					$accelerate_slider_link = of_get_option( 'accelerate_slider_link'.$i , '#' );
					if( !empty( $accelerate_header_title ) || !empty( $accelerate_slider_text ) || !empty( $accelerate_slider_image ) ) {
						if ( $i == 1 ) { $classes = "slides displayblock"; } else { $classes = "slides displaynone"; }

						if ( $accelerate_slide_text_position == 'left' ) { $classes2 = "entry-container entry-container-left"; }
						else { $classes2 = "entry-container"; }
						?>
						<div class="<?php echo $classes; ?>">
							<figure>
								<img alt="<?php echo esc_attr( $accelerate_slider_title ); ?>" src="<?php echo esc_url( $accelerate_slider_image ); ?>">
							</figure>
							<div class="<?php echo $classes2; ?>">
								<?php if( !empty( $accelerate_slider_title ) || !empty( $accelerate_slider_text ) ) { ?>
									<?php if( !empty( $accelerate_slider_title ) ) { ?>
									<div class="slider-title-head"><h3 class="entry-title"><a href="<?php echo esc_url( $accelerate_slider_link ); ?>" title="<?php echo esc_attr( $accelerate_slider_title ); ?>"><?php echo $accelerate_slider_title; ?></a></h3></div>
									<?php } ?>
									<?php if( !empty( $accelerate_slider_text ) ) { ?>
									<div class="entry-content"><p><?php echo $accelerate_slider_text; ?></p></div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
						<?php
					}
				}
				?>
   			</div>
   			<a class="slide-next" href="#"><i class="fa fa-angle-right"></i></a>
            <a class="slide-prev" href="#"><i class="fa fa-angle-left"></i></a>
			</div>

			<nav id="controllers" class="clearfix"></nav>
		</section>

		<?php
}
endif;

/****************************************************************************************/

?>