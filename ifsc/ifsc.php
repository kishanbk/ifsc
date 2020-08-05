<?php
/*
Plugin Name: Bank Details from IFSC Code
Plugin URI: https://github.com/kishanbk/ifsc/
Description: Use [ifsc_shortcode] shortcode for IFSC Code
Author: Kishan Biswkarma(Learned From Vishal Gupta)
*/

register_activation_hook(__FILE__,'ifsc_install');
register_deactivation_hook(__FILE__,'ifsc_deactivate');

function ifsc_install(){

}

function ifsc_deactivate(){

}

add_shortcode('ifsc_shortcode','ifsc_form');
function ifsc_form(){
	include('ifsc_form.php');
}	
?>