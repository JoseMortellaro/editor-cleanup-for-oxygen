<?php
defined( 'FDP_SOITB_PLUGIN_DIR' ) || exit; //Exit if not called by FDP PRO


add_action( 'admin_notices','eos_dp_soitb_fdp_oxygen_not_active' );

//Warn the user FDP is not active
function eos_dp_soitb_fdp_oxygen_not_active(){
  static $called = false;
  if( $called ) return;
  $called = true;
  ?>
  <div class="notice notice-error" style="display:block !important;padding:20px">
    <?php esc_html_e( 'Editor Cleanup For Oxygen needs that both Oxygen and Freesoul Deactivate Plugins are installed and active!','editor-cleanup-for-oxygen' ); ?>
    <p>
    <?php
    if( file_exists( FDP_SOITB_PLUGINS_DIR.'/oxygen/functions.php' ) ){
      $url = wp_nonce_url(
        add_query_arg(
          array(
            'action' => 'activate',
            'plugin' => 'oxygen/functions.php',
            'plugin_status' => 'all',
            'paged' => '1'
          ),
          admin_url( 'plugins.php' )
        ),
        'activate-plugin_oxygen/functions.php'
      );
      ?>
      <a class="button" href="<?php echo esc_url( $url ); ?>"><?php esc_html_e( 'Activate Oxygen','editor-cleanup-for-oxygen' ); ?></a>
      <?php
    }
    if( file_exists( FDP_SOITB_PLUGINS_DIR.'/freesoul-deactivate-plugins/freesoul-deactivate-plugins.php' ) ){
      $url = wp_nonce_url(
        add_query_arg(
          array(
            'action' => 'activate',
            'plugin' => 'freesoul-deactivate-plugins/freesoul-deactivate-plugins.php',
            'plugin_status' => 'all',
            'paged' => '1'
          ),
          admin_url( 'plugins.php' )
        ),
        'activate-plugin_freesoul-deactivate-plugins/freesoul-deactivate-plugins.php'
      );
      ?>
      <a class="button" href="<?php echo esc_url( $url ); ?>"><?php esc_html_e( 'Activate Freesouol Deactivate Plugins','editor-cleanup-for-oxygen' ); ?></a>
      <?php
    }
    ?>
    </p>
  </div>
  <?php
}
