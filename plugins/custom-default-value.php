<?php
/**
 * Plugin Name: WP Simple Pay - Custom Default Value
 * Plugin URI: https://wpsimplepay.com
 * Author: Sandhills Development, LLC
 * Author URI: https://sandhillsdev.com
 * Description: Use a value from the URL to set a field's default.
 * Version: 1.0
 */
 
/**
 * Changes the default value of Field 123 in Form 157.
 *
 * Replace 157 with the ID of your form.
 * Replace 123 with the ID of your field.
 *
 * @param string $default Default
 * @return string
 */
function custom_default_value_157_123( $default ) {
    // Set the default value to the current page title.
    $value = get_the_title();
    
    return $value;
};
add_filter( 'simpay_form_157_field_123_default_value', __NAMESPACE__ . '\\custom_default_value_157_123' );
