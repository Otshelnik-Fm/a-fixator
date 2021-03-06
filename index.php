<?php

/*

  ╔═╗╔╦╗╔═╗╔╦╗
  ║ ║ ║ ╠╣ ║║║ https://otshelnik-fm.ru
  ╚═╝ ╩ ╚  ╩ ╩

 */


if (!defined('ABSPATH')) exit;


require_once 'admin/settings.php';


// подключаем файл функций
$my_functions = RCL_TAKEPATH.'templates/a-fixator-functions.php';
if ( file_exists($my_functions) ) {
    require_once($my_functions);
}



// грузим стиль в шапке и раньше всех
function af_connect_front_head_style(){
    if( is_admin() ) return;

    if( rcl_get_option('afix_head', 'yes') == 'no' )  return;

    $my_front_head_style = RCL_TAKEPATH.'templates/a-fixator-front-header.css';
    if ( file_exists($my_front_head_style) ) {
        rcl_enqueue_style('af_front_head_style', content_url('wp-recall/templates/a-fixator-front-header.css') ); // грузить в шапке
    }
}
add_action('rcl_enqueue_scripts', 'af_connect_front_head_style', 5);



// грузим стиль в подвале и позже всех
function af_connect_front_footer_style(){
    if( is_admin() ) return;

    if( rcl_get_option('afix_foot', 'yes') == 'no' )  return;

    $my_front_footer_style = RCL_TAKEPATH.'templates/a-fixator-front-footer.css';
    if ( file_exists($my_front_footer_style) ) {
        rcl_enqueue_style('af_front_footer_style', content_url('wp-recall/templates/a-fixator-front-footer.css'), true); // 3 аргумент - грузить в подвале
    }
}
add_action('rcl_enqueue_scripts', 'af_connect_front_footer_style', 500);


function afch_add_settings(){
    $chr_page = get_current_screen();

    if($chr_page->base != 'wp-recall_page_rcl-options') return;
    if( isset($_COOKIE['otfmi_1']) && isset($_COOKIE['otfmi_2']) && isset($_COOKIE['otfmi_3']) )  return;

    require_once 'admin/for-settings.php';
}
add_action('admin_footer', 'afch_add_settings');


// подключаем стили для админки
function af_connect_admin_style(){
    if( rcl_get_option('afix_adm', 'yes') == 'no' )  return;

    $my_admin_style = RCL_TAKEPATH.'templates/a-fixator-admin.css';
    if ( file_exists($my_admin_style) ) {
        wp_enqueue_style('af_admin_style', content_url('wp-recall/templates/a-fixator-admin.css') );
    }
}
add_action('admin_footer', 'af_connect_admin_style', 100);



// грузим скрипт в подвале максимально низко
function af_connect_front_js(){
    if( is_admin() ) return;

    if( rcl_get_option('afix_js', 'yes') == 'no' )  return;

    $my_front_js = RCL_TAKEPATH.'templates/a-fixator-front-js.js';
    if ( file_exists($my_front_js) ) {
        rcl_enqueue_script('af_front_script', content_url('wp-recall/templates/a-fixator-front-js.js'), false, true); // в футере
    }
}
add_action('rcl_enqueue_scripts', 'af_connect_front_js', 999);
