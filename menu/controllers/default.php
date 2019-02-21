<?php
// loome vajalikud vaade objektid
$mainTmpl = new Template('main');
$contentTmpl = new Template('content');
require_once 'menus/menu.php';
$mainTmpl->set('title', 'Menu App');
foreach ($categories as $category){
    $cardTmpl = new Template('card');
    $cardHeaderTmpl = new Template('header');
    $cardDataTmpl = new Template('data');
    $cardHeaderTmpl->set('category', $category['name']);
    $cardHeaderTmpl->set('icon', $category['icon']);
    $cardTmpl->set('card_header', $cardHeaderTmpl->parse());
    $cardDataTmpl->set('category', $category['name']);
    $listTmpl = new Template('list');
    foreach ($category['data'] as $dish){
        foreach ($dish as $name=>$value){
            $listTmpl->set($name, $value);
        }
        $cardDataTmpl->add('dish_list', $listTmpl->parse());
    }
    $cardTmpl->set('card_data', $cardDataTmpl->parse());
    $contentTmpl->add('cards', $cardTmpl->parse());
}
$mainTmpl->set('content', $contentTmpl->parse());
echo $mainTmpl->parse();
//echo '<pre>';
//print_r($mainTmpl);
//echo '</pre>';