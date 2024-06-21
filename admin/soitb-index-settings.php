<?php
defined( 'FDP_SOITB_PLUGIN_DIR' ) || exit;

$titles = eos_dp_soitb_titles();
$left = is_rtl() ? 'right' : 'left';
$kses = array( 'a' => array( 'href' => array(),'class' => array() ) );
?>
<style id="fdp-oxygen-index-css">
#dolly{display:none}
#fdp-oxygen-outer-setts-wrp {
  <?php echo esc_attr( $left ); ?>: 3.5%;
  top:50%
}
#fdp-oxygen-inner-setts-wrp,#fdp-oxygen-loading-setts-wrp {
  <?php echo esc_attr( $left ); ?>: 60%;
  -o-transform:translateX(-50%);
  -ms-transform:translateX(-50%);
  -moz-transform:translateX(-50%);
  -webkit-transform:translateX(-50%);
  transform:translateX(-50%);
  top:50%
}
#fdp-oxygen-loading-setts-wrp{
  top:52%;
  top:calc(50% + 64px)
}
#fdp-oxygen-loading-setts-url:after {
  content: "\f111";
  position: absolute;
  top:0;
  <?php echo is_rtl() ? 'right' : 'left'; ?>:50%;
  z-index: 99999999;
  font-family: dashicons;
  margin-left: -20px;
  font-size: 40px
}
</style>
<h2><?php esc_html_e( 'Oxygen editor cleanup.','editor-cleanup-for-oxygen' ); ?></h2>
<section id="fdp-oxygen-index-section" style="position:relative;width:99%;width:calc(100% - 20px);margin:32px auto 0 auto;height:0;padding-bottom:60%;background-repeat:no-repeat;background-image:url(<?php echo FDP_SOITB_PLUGIN_URL; ?>/admin/assets/img/oxygen-editor-screen.png);background-size:contain">
  <?php foreach( $titles as $k => $title ){ ?>
  <div id="fdp-oxygen-<?php echo $k; ?>-setts-wrp" class="fdp-oxygen-setts-wrp" style="background:#fff;position:absolute">
    <a id="fdp-oxygen-<?php echo $k; ?>-setts-url" class="button" href="<?php echo esc_attr( admin_url( 'admin.php?page=eos_dp_soitb_'.$k ) ); ?>"><?php echo esc_html( $title ); ?></a>
  </div>
  <?php } ?>
</section>
<div style="margin-top:64px">
  <p><?php echo wp_kses( sprintf( __( 'Click on %sOuter editor cleanup%s to disable the plugins that are not needed in the outer editor (usually no plugin needed)','editor-cleanup-for-oxygen' ),'<a href="'.admin_url( 'admin.php?page=eos_dp_soitb_outer' ).'" class="button">','</a>' ),$kses ); ?></p>
  <p><?php echo wp_kses( sprintf( __( 'Click on %sInner editor cleanup%s to disable the plugins that are not needed in the inner editor does\'t need (the inner editor is like the page on frontend, but loaded inside the Oxygen editor)','editor-cleanup-for-oxygen' ),'<a href="'.admin_url( 'admin.php?page=eos_dp_soitb_inner' ).'" class="button">','</a>' ),$kses ); ?></p>
  <p><?php echo wp_kses( sprintf( __( 'Click on %sEditor loading cleanup%s to disable the plugins that are called during the loading of the editor (usually no plugin needed, disabling plugins here can solve conflicts with other plugins)','editor-cleanup-for-oxygen' ),'<a href="'.admin_url( 'admin.php?page=eos_dp_soitb_loading' ).'" class="button">','</a>' ),$kses ); ?></p>
</div>
