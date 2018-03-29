<?php

/*

  ╔═╗╔╦╗╔═╗╔╦╗
  ║ ║ ║ ╠╣ ║║║ https://otshelnik-fm.ru
  ╚═╝ ╩ ╚  ╩ ╩

 */


require_once 'inc/settings.php'; // подключаем настройки


// подключаем файл функций
$my_functions = RCL_TAKEPATH.'templates/a-fixator-functions.php';
if (file_exists($my_functions)) {
    require_once($my_functions);
}



// грузим стиль в шапке и раньше всех
function af_connect_front_head_style(){
    if(is_admin()) return false;

    if( rcl_get_option('afix_head', 'yes') == 'no' )  return false;

    $my_front_head_style = RCL_TAKEPATH.'templates/a-fixator-front-header.css';
    if (file_exists($my_front_head_style)) {
        rcl_enqueue_style('af_front_head_style',content_url('wp-recall/templates/a-fixator-front-header.css')); // грузить в шапке
    }
}
add_action('rcl_enqueue_scripts','af_connect_front_head_style', 5);



// грузим стиль в подвале и позже всех
function af_connect_front_footer_style(){
    if(is_admin()) return false;

    if( rcl_get_option('afix_foot', 'yes') == 'no' )  return false;

    $my_front_footer_style = RCL_TAKEPATH.'templates/a-fixator-front-footer.css';
    if (file_exists($my_front_footer_style)) {
        rcl_enqueue_style('af_front_footer_style',content_url('wp-recall/templates/a-fixator-front-footer.css'), true); // 3 аргумент - грузить в подвале
    }
}
add_action('rcl_enqueue_scripts','af_connect_front_footer_style', 500);



// подключаем стили для админки
function af_connect_admin_style(){
    if( rcl_get_option('afix_adm', 'yes') == 'no' )  return false;

    $my_admin_style = RCL_TAKEPATH.'templates/a-fixator-admin.css';
    if (file_exists($my_admin_style)) {
        wp_enqueue_style('af_admin_style',content_url('wp-recall/templates/a-fixator-admin.css'));
    }
}
add_action('admin_footer','af_connect_admin_style',100);



// грузим скрипт в подвале максимально низко
function af_connect_front_js(){
    if(is_admin()) return false;

    if( rcl_get_option('afix_js', 'yes') == 'no' )  return false;

    $my_front_js = RCL_TAKEPATH.'templates/a-fixator-front-js.js';
    if (file_exists($my_front_js)) {
        rcl_enqueue_script('af_front_script',content_url('wp-recall/templates/a-fixator-front-js.js'), false, true); // в футере
    }
}
add_action('rcl_enqueue_scripts','af_connect_front_js', 999);
