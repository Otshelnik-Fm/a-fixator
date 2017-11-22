<?php

// подключаем файл функций
$my_functions = RCL_TAKEPATH.'templates/a-fixator-functions.php';
if (file_exists($my_functions)) {
    require_once($my_functions);
}


// подключаем стили фронтенда (и реколл минимизация стилей поддерживается)
function af_connect_front_style(){
    if(!is_admin()){
        $my_front_style = RCL_TAKEPATH.'templates/a-fixator-front.css';
        if (file_exists($my_front_style)) {
            rcl_enqueue_style('af_front_style',content_url('wp-recall/templates/a-fixator-front.css'), true); // 3 аргумент - грузить в подвале
        }
    }
}
add_action('rcl_enqueue_scripts','af_connect_front_style',50);


// подключаем стили для админки
function af_connect_admin_style(){
    $my_admin_style = RCL_TAKEPATH.'templates/a-fixator-admin.css';
    if (file_exists($my_admin_style)) {
        wp_enqueue_style('af_admin_style',content_url('wp-recall/templates/a-fixator-admin.css'));
    }
}
add_action('admin_footer','af_connect_admin_style',100);
