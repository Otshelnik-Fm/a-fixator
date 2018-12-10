<?php

if (!defined('ABSPATH')) exit;


function afix_set_setting($content){

    $opt = new Rcl_Options(__FILE__);

    $content .= $opt->options('Настройки Alpha Fixator', array(
            $opt->options_box('<div style="min-width: 300px;">Основные настройки:</div>'
                    . '<style>'
                        . '#rcl-options-form #options-a-fixator .help-option{float:right;}'
                        . '#options-a-fixator .option-block::before{content:"α-Fixator";font-size:20px;color:#ba55d3;border-bottom:1px dashed #e66767;}'
                        . '#options-a-fixator .option-block{background-color:#fff5ee;box-shadow:5px 5px 8px 2px #d5d5d5;border-left: 2px solid #deb887;}'
                    . '</style>',
                array(
                    array(
                        'type' => 'radio',
                        'title'=>'Загружать css для админки:',
                        'slug'=>'afix_adm',
                        'values' => array('yes' => 'Да','no' => 'Нет'),
                        'default' => 'yes',
                        'notice'=> 'По умолчанию: Да<br/><hr>',
                        'help'=> 'Файл a-fixator-admin.css будет загружаться в админке'
                    ),
                    array(
                        'type' => 'radio',
                        'title'=>'Загружать css для фронтенда вверху сайта:',
                        'slug'=>'afix_head',
                        'values' => array('yes' => 'Да','no' => 'Нет'),
                        'default' => 'yes',
                        'notice'=> 'По умолчанию: Да<br/><hr>',
                        'help'=> 'Файл a-fixator-front-header.css будет загружаться в фронтенде (лицевая часть сайта - не админка) в шапке (header) сайта'
                    ),
                    array(
                        'type' => 'radio',
                        'title'=>'Загружать css для фронтенда внизу сайта:',
                        'slug'=>'afix_foot',
                        'values' => array('yes' => 'Да','no' => 'Нет'),
                        'default' => 'yes',
                        'notice'=> 'По умолчанию: Да<br/><hr>',
                        'help'=> 'Файл a-fixator-front-footer.css будет загружаться в фронтенде (лицевая часть сайта - не админка) в подвале (footer) сайта'
                    ),
                    array(
                        'type' => 'radio',
                        'title'=>'Загружать js для фронтенда:',
                        'slug'=>'afix_js',
                        'values' => array('yes' => 'Да','no' => 'Нет'),
                        'default' => 'yes',
                        'notice'=> 'По умолчанию: Да',
                        'help'=> 'Файл a-fixator-front-js.js будет загружаться в фронтенде (лицевая часть сайта - не админка) в подвале (footer) сайта'
                    ),
                )
            ),
        )
    );

    return $content;
}
add_filter('admin_options_wprecall','afix_set_setting');