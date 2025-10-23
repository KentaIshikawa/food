<?php
/*=================
<title>タグを出力する
=================*/
add_theme_support('title-tag');

/*=================
JSとCSSで、type属性を出力しない様にする
=================*/
add_theme_support('html5',['script','style']);

/*=================
<title>の区切り文字を変更する
=================*/
add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

/*=================
アイキャッチ画像を使用可能にする
=================*/
add_theme_support('post-thumbnails');

/*=================
カスタムメニュー機能を使用可能にする
=================*/
add_theme_support('menus');


/*=================
Contact Form 7 の時には整形機能をOFFにする
=================*/
add_filter('wpcf7_autop_or_not','my_wpcf7_autop');
function my_wpcf7_autop(){
    return false;
}