<?php
defined( 'ABSPATH' ) || exit;

foreach( array( 'outer','inner','loading' ) as $page ){
	add_action( 'wp_ajax_eos_dp_save_oxygen_'.$page.'_settings','eos_dp_save_oxygen_'.$page.'_settings' );
}
//Saves activation/deactivation settings for oxygen outer editor
function eos_dp_save_oxygen_outer_settings(){
	eos_dp_save_oxygen_settings( 'outer' );
}
//Saves activation/deactivation settings for oxygen inner editor
function eos_dp_save_oxygen_inner_settings(){
	eos_dp_save_oxygen_settings( 'inner' );
}
//Saves activation/deactivation settings for oxygen loading editor
function eos_dp_save_oxygen_loading_settings(){
	eos_dp_save_oxygen_settings( 'loading' );
}
//Callback for saving Oxygen editor settings
function eos_dp_save_oxygen_settings( $page ){
	eos_dp_check_intentions_and_rights( 'eos_dp_oxygen_'.$page.'_setts' );
	if( isset( $_POST['eos_dp_oxygen_data'] ) && !empty( $_POST['eos_dp_oxygen_data'] ) && isset( $_POST['page'] ) && !empty( $_POST['page'] ) ){
		$opts = eos_dp_get_option( 'fdp_oxygen' );
		$opts[sanitize_key( $_POST['page'] )] = array_filter( explode( ',',sanitize_text_field( $_POST['eos_dp_oxygen_data'] ) ) );
		eos_dp_update_option( 'fdp_oxygen',$opts,false );
		echo 1;
		die();
	}
	echo 0;
	die();
}
