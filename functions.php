<?php
if (!defined('ABSPATH')) die();

function ds_ct_enqueue_parent() { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); }

function ds_ct_loadjs() {

	// if owl carousel need
	wp_enqueue_script( 'owl-js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js',
        array( 'jquery' )
    );


	wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/js/scripts.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );

add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );

//Year

function func_year( $atts ) {
 return date("Y");
}
add_shortcode( 'year','func_year' );


/**
 * If owl carousel shortcode
 */

// function shortcode_callback_func_shortcode_name( $atts = array(), $content = '' ) {

// 	$args = array( 'post_type' => 'shop_category', 'posts_per_page' =>-1 );
//     $loop = new WP_Query( $args );
//     @$s_content .= '<div class="shop-category-item-area"><div id="shopCategory" class="owl-carousel owl-theme">';
//     while ( $loop->have_posts() ) : $loop->the_post(); 

//     	$s_content .= '<a href="'.get_field('category_link').'">';
// 	    	$s_content .= '<div class="single-shop-category-item">';
// 	    		$s_content .= '<div class="shop-category-content">';

// 	    			$s_content .= '<div class="shop-category-img-area">';
// 		    			$s_content .= '<div class="shop-category-img">';
// 		    				$s_content .= '<img src="'.get_field('image').'" alt="'.get_the_title().'">';
// 						$s_content .= "</div>";
// 					$s_content .= "</div>";

// 	    			$s_content .= '<div class="shop-category-text">';
// 						$s_content .='<h4>'.get_the_title().'</h4>';
// 					$s_content .='</div>';
					
// 				$s_content .='</div>';
// 			$s_content .='</div>';
// 		$s_content .='</a>';

// 	endwhile; 

// 	wp_reset_query(); 
// 	$s_content .= '</div></div>'; 


// 	return $s_content;
// }
// add_shortcode( 'shortcode_id', 'shortcode_callback_func_shortcode_name' );
