<?php
/*
  Plugin Name: oxygen editor speedup [oes]
  Description: mu-plugin automatically installed by Oxygen Editor Speedup
  Version: 0.0.6
  Plugin URI: https://freesoul-deactivate-plugins.com/
  Author: Jose Mortellaro
  Author URI: https://josemortellaro.com/
  License: GPLv2
*/

defined( 'ABSPATH' ) || exit; // Exit if accessed directly
define( 'FDP_SOITB_MU_VERSION','0.0.6' );

if( isset( $_GET['ct_builder'] ) && 'true' === $_GET['ct_builder'] && !isset( $_GET['oxygen_iframe'] ) ){
  add_filter( 'fdp_frontend_plugins',function( $plugins ){
    return eos_dp_soitb_plugins( $plugins,'outer' );
  } );
}
elseif( isset( $_GET['ct_builder'] ) && 'true' === $_GET['ct_builder'] && isset( $_GET['oxygen_iframe'] ) && 'true' === $_GET['oxygen_iframe'] ){
  add_filter( 'fdp_frontend_plugins',function( $plugins ){
    return eos_dp_soitb_plugins( $plugins,'inner' );
  } );
}

add_filter( 'fdp_ajax_plugins',function( $plugins ){
  $oxygen_actions = array(
    'set_oxygen_edit_post_lock_transient',
    'ct_new_style_api_call',
    'ct_get_svg_icon_sets',
    'ct_get_components_tree',
    'oxy_load_elements_presets',
    'oxy_get_components_templates',
    'oxy_render_nav_menu'
  );
  if( isset( $_REQUEST['action'] ) && in_array( sanitize_text_field( $_REQUEST['action'] ),$oxygen_actions ) ){
    return eos_dp_soitb_plugins( $plugins,'loading' );
  }
  return $plugins;
} );

add_filter( 'fdp_ajax_plugins',function( $plugins ){
  if( isset( $_REQUEST['action'] ) && in_array( sanitize_text_field( $_REQUEST['action'] ),array( 'eos_dp_save_oxygen_outer_settings','eos_dp_save_oxygen_inner_settings','eos_dp_save_oxygen_loading_settings' ) ) ){
    return array_merge( array( 'oxygen/functions.php' ),fdp_soitb_plugins( $plugins ) );
  }
  return $plugins;
} );

function eos_dp_soitb_plugins( $plugins,$page ){
  $opts = eos_dp_get_option( 'fdp_oxygen' );
  $oxygen_plugins = isset( $opts[$page] ) ? $opts[$page] : array();
  $fdp_plugins = fdp_soitb_plugins( $plugins );
  $oxygen_plugins = $oxygen_plugins && is_array( $oxygen_plugins ) ? array_merge( $oxygen_plugins,$fdp_plugins ) : $fdp_plugins;
  foreach( $oxygen_plugins as $plugin ){
    if( in_array( $plugin,$plugins ) || in_array( $plugin,$fdp_plugins ) ){
      unset( $plugins[array_search( $plugin,$plugins )] );
    }
  }
  return array_values( $plugins );
}

function fdp_soitb_plugins( $plugins ){
  $arr = array(
    'freesoul-deactivate-plugins/freesoul-deactivate-plugins.php',
    'editor-cleanup-for-oxygen/editor-cleanup-for-oxygen.php'
  );
  if( in_array( 'freesoul-deactivate-plugins-pro/freesoul-deactivate-plugins-pro.php',$plugins ) ){
    $arr[] = 'freesoul-deactivate-plugins-pro/freesoul-deactivate-plugins-pro.php';
  }
  return $arr;
}
