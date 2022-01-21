<?php
/**
 * Plugin Name: Tax Calculator for Ecuador
 * Plugin URI: https://github.com/mario-m2/tax-calculator
 * Description: It calculates the income taxes to pay
 * Version: 0.0.1
 * Author: Mario Morocho
 * Author URI: http://www.mariomorocho.com
 */

add_shortcode( 'taxcalculator', 'calculate_tax' );

function calculate_tax($atts, $content = null) {
    return 'Hola Mundo';
}