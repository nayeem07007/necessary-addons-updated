<?php 

if(!function_exists('core_assets_loader')){
    function core_assets_loader() {
        wp_register_style('core_tabs', TH_PLUGIN_PATH.'/assets/css/tabs.css', [], PLUGIN_VERSION, 'all');
        wp_register_style('bootstrap-utilities', TH_PLUGIN_PATH.'/assets/css/bootstrap-utilities.min.css', [], PLUGIN_VERSION, 'all');
        wp_enqueue_script('elemenor-frontend-loader-asd', TH_PLUGIN_PATH.'/frontend.js', ['jqury']);
    }
  add_action( 'wp_enqueue_scripts', 'core_assets_loader' );
}