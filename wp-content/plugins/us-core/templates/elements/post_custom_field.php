<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Post Custom Field element
 *
 * @var $classes string
 * @var $id string
 */

$value = $_field_label = '';
$acf_format = TRUE;

// Set the field type for specific meta keys
$image_fields = array( 'us_tile_additional_image' );
$repeater_fields = array();
if ( function_exists( 'us_acf_get_fields_keys' ) ) {
	$image_fields = array_merge( $image_fields, (array) us_acf_get_fields_keys( /* type */'image' ) );
	$repeater_fields = (array) us_acf_get_fields_keys( /* types */array( 'repeater', 'flexible_content' ) );
}

if ( in_array( $key, $image_fields ) ) {
	$type = 'image';

	// Disable the ACF "Return Format" for image types (will return the ID)
	$acf_format = FALSE;

} elseif ( in_array( $key, $repeater_fields ) ) {
	$type = 'repeater';
} elseif ( in_array( $key, array( 'us_tile_icon', 'us_testimonial_rating' ) ) ) {
	$type = 'icon';
} else {
	$type = 'text';
}

// Use the custom field name if set
if ( $key == 'custom' ) {
	$_field_label = __( 'Custom Field', 'us' );
	$key = $custom_key;

	// Disable the ACF "Return Format" for custom values to exclude extra checks of ACF functions
	$acf_format = FALSE;
}

// First use the dummy data, if this element is shown in the Edit Template preview
if ( usb_is_preview_page_for_template() AND $us_elm_context == 'shortcode' ) {

	// For image type always show a placeholder
	if ( $type === 'image' ) {
		$value = us_get_img_placeholder();

		// If dummy data exists, show it
	} elseif ( $dummy_value = us_config( 'elements/post_custom_field.usb_preview_dummy_data.' . $key, '' ) ) {
		$value = $dummy_value;

		// In other cases show the field title and name itself
	} else {

		// Get the Field Name from the config
		if ( empty( $_field_label ) ) {
			$_field_options = us_config( 'elements/post_custom_field.params.key.options', array() );
			foreach ( $_field_options as $_field_group ) {
				if ( is_array( $_field_group ) AND isset( $_field_group[ $key ] ) ) {
					$_field_label = $_field_group[ $key ];
					break;
				}
			}
		}

		$value = $_field_label . ' <small>(' . $key . ')</small>';
	}

	// In case it's not Edit Template preview, just get the value on provided custom field name
} else {
	$value = us_get_custom_field( $key, $acf_format );
}

// Add <p> and <br> if the text value has 'End Of Line' symbols
if (
	$type === 'text'
	AND $tag === 'div' // excludes non-valid HTML code like <p> inside <p>
	AND is_string( $value )
	AND strpos( $value, PHP_EOL ) !== FALSE
) {
	$value = wpautop( $value );
}

// At this point the $value can contain an array, so we need to transform it to a string
if ( is_array( $value ) ) {

	// For ACF Repeater field generate the relevant HTML value
	if ( $type === 'repeater' ) {
		$_value_html = '<div class="repeater">';

		foreach ( $value as $_repeater_fields ) {
			$_value_html .= '<div class="repeater-row">';

			foreach ( (array) $_repeater_fields as $_repeater_field_name => $_repeater_field_value ) {
				// Skip flex_content layout name
				if ( $_repeater_field_name === 'acf_fc_layout' ) {
					continue;
				}

				$_value_html .= '<div class="repeater-field ' . esc_attr( $_repeater_field_name ) . '">';

				// Get the string and numeric values only
				if ( is_string( $_repeater_field_value ) OR is_numeric( $_repeater_field_value ) ) {
					$_value_html .= $_repeater_field_value;

					// Get the image from the ID
				} elseif ( $_img_id = us_arr_path( $_repeater_field_value, 'ID' ) ) {
					$_value_html .= wp_get_attachment_image( $_img_id, $thumbnail_size );
				}

				$_value_html .= '</div> ';
			}

			$_value_html .= '</div>';
		}

		$_value_html .= '</div>';
		$value = $_value_html;

		// In other cases try to get a string value
	} else {

		// If array contain arrays or objects inside, output specified notification
		if ( array_filter( $value, 'is_array' ) OR array_filter( $value, 'is_object' ) ) {
			$value = 'Unsupported format';

			// in other cases separate values by comma
		} else {
			$value = implode( ', ', $value );
		}
	}
}

// In case the value is an object output specified notification
if ( is_object( $value ) ) {
	$value = 'Unsupported format';
}

// Don't output the element, when its value is empty
if (
	! usb_is_preview_page()
	AND $hide_empty
	AND (
		$value === ''
		OR $value === FALSE
		OR $value === NULL
	)
) {
	return;
}

// CSS classes & ID
$_atts['class'] = 'w-post-elm post_custom_field';
$_atts['class'] .= isset( $classes ) ? $classes : '';
$_atts['class'] .= ' type_' . $type;
$_atts['class'] .= ' ' . $key;
if ( $link != 'none' AND $color_link ) {
	$_atts['class'] .= ' color_link_inherit';
}
if ( $display_type ) {
	$_atts['class'] .= ' display_table';
}

// When some values are set in Design Options, add the specific class
if ( us_design_options_has_property( $css, 'border-radius' ) ) {
	$_atts['class'] .= ' has_border_radius';
}
if ( us_design_options_has_property( $css, array( 'height', 'max-height' ) ) ) {
	$_atts['class'] .= ' has_height';
}
if ( ! empty( $el_id ) AND $us_elm_context == 'shortcode' ) {
	$_atts['id'] = $el_id;
}

// Generate icon specific HTML
if ( $type == 'icon' ) {

	// Generate specific HTML for the Testimonial Rating
	if ( $key == 'us_testimonial_rating' ) {
		$rating_value = (int) strip_tags( $value );

		if ( $rating_value === 0 ) {
			return;

		} else {
			$value = '<div class="w-testimonial-rating">';
			for ( $i = 1; $i <= $rating_value; $i ++ ) {
				$value .= '<i></i>';
			}
			$value .= '</div>';
		}

	} else {
		$value = us_prepare_icon_tag( $value );
	}
}

// Generate specific Image HTML
$ratio_helper_html = '';
if ( $type === 'image' ) {
	global $us_grid_img_size;
	if ( ! empty( $us_grid_img_size ) AND $us_grid_img_size != 'default' ) {
		$thumbnail_size = $us_grid_img_size;
	}

	// Remember image ID for further conditions
	$value_image_ID = $value;

	// Get image by ID
	$img_loading_attr = array();
	if ( $disable_lazy_loading ) {
		$img_loading_attr['loading'] = FALSE;
	}
	$value = wp_get_attachment_image( $value_image_ID, $thumbnail_size, FALSE, $img_loading_attr );

	// If there is no image, display the placeholder
	if ( empty( $value ) ) {
		$value = us_get_img_placeholder( $thumbnail_size );
	}

	// Set Aspect Ratio values
	if ( $has_ratio ) {
		$ratio_array = us_get_aspect_ratio_values( $ratio, $ratio_width, $ratio_height );
		$ratio_helper_html = '<div style="padding-bottom:' . round( $ratio_array[1] / $ratio_array[0] * 100, 4 ) . '%"></div>';
		$_atts['class'] .= ' has_ratio';
	} elseif ( $stretch ) {
		$_atts['class'] .= ' stretched';
	}
}

// Text before/after values
$text_before = trim( strip_tags( $text_before, '<br><sup><sub>' ) );
$text_after = trim( strip_tags( $text_after, '<br><sup><sub>' ) );

if ( $text_before !== '' ) {
	$text_before_html = sprintf( '<%s class="w-post-elm-before">%s </%s>', $text_before_tag, $text_before, $text_before_tag );
} else {
	$text_before_html = '';
}
if ( $text_after !== '' ) {
	$text_after_html = sprintf( '<%s class="w-post-elm-after"> %s</%s>', $text_after_tag, $text_after, $text_after_tag );
} else {
	$text_after_html = '';
}

// Exclude link options for Repeater type of field
if ( $type === 'repeater' ) {
	$link = 'none'; 
}

// Link
if ( $link === 'none' ) {
	$link_atts = array();

} elseif ( $link === 'post' ) {

	global $us_grid_item_type, $us_grid_term;

	if ( $us_grid_item_type == 'term' AND $us_grid_term instanceof WP_Term ) {
		$link_atts['href'] = get_term_link( $us_grid_term );
	} else {
		$link_atts['href'] = apply_filters( 'the_permalink', get_permalink() );
		if ( get_post_format() == 'link' ) {
			$link_atts['target'] = '_blank';
			$link_atts['rel'] = 'noopener';
		}
	}

} elseif ( $link === 'popup_post_image' AND $type === 'image' ) {
	$full_image_url = wp_get_attachment_image_url( $value_image_ID, 'full' );
	if ( empty( $full_image_url ) ) {
		$full_image_url = us_get_img_placeholder( 'full', TRUE );
	}
	$link_atts = array(
		'href' => $full_image_url,
		'ref' => us_amp() ? '' : 'magnificPopup',
	);

} elseif ( $link === 'elm_value' AND ! empty( $value ) ) {
	if ( is_email( $value ) ) {
		$link_atts['href'] = 'mailto:' . $value;
	} elseif ( strpos( $value, '.' ) === FALSE ) {
		$link_atts['href'] = 'tel:' . $value;
	} else {
		$link_atts['href'] = esc_url( $value );
	}

} elseif ( $link === 'onclick' ) {
	$onclick_code = ! empty( $onclick_code ) ? $onclick_code : 'return false';
	$link_atts['href'] = '#';
	$link_atts['onclick'] = esc_js( trim( $onclick_code ) );

} elseif ( $link === 'custom' ) {
	$link_atts = us_generate_link_atts( $custom_link );

} else {
	$link_atts = us_generate_link_atts( 'url:{{' . $link . '}}|||' );
}

// Force "Open in a new tab" attributes
if ( ! empty( $link_atts['href'] ) AND empty( $link_atts['target'] ) AND $link_new_tab ) {
	$link_atts['target'] = '_blank';
	$link_atts['rel'] = 'noopener nofollow';
}

// Output the element
$output = '<' . $tag . us_implode_atts( $_atts ) . '>';
if ( ! empty( $icon ) ) {
	$output .= us_prepare_icon_tag( $icon );
}
$output .= $text_before_html;

if ( ! empty( $link_atts['href'] ) ) {
	$output .= '<a' . us_implode_atts( $link_atts ) . '>';
}

$output .= $ratio_helper_html;

// Wrap the value into additional <span>, if it doesn't have a <div> or <p>
if (
	$type === 'text'
	AND	strpos( $value, '<div' ) === FALSE
	AND strpos( $value, '<p' ) === FALSE
) {
	$output .= '<span class="w-post-elm-value">' . $value . '</span>';
} else {
	$output .= $value;
}

if ( ! empty( $link_atts['href'] ) ) {
	$output .= '</a>';
}
$output .= $text_after_html;
$output .= '</' . $tag . '>';

echo $output;
