<?php
defined( 'ABSPATH' ) || exit; // Exit if accessed directly

if( file_exists( WPMU_PLUGIN_DIR.'/fdp-mu-oxygen.php' ) ){
  unlink( WPMU_PLUGIN_DIR.'/fdp-mu-oxygen.php' );
}
eos_dp_soitb_write_file( FDP_SOITB_PLUGIN_DIR.'/mu-plugins/fdp-mu-oxygen.php',WPMU_PLUGIN_DIR,WPMU_PLUGIN_DIR.'/fdp-mu-oxygen.php',true );
