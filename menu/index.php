<?php
//  require_once 'lib/fnk.php';
//  require_once 'menus/menu.php';
// lehe sisu
// päis - header ja muud vajalikud osad
//  pais();
// menüü elemendid - menu funktsioon kasutab menu_element funktsiooni sisu loomiseks
//  menu(array(
   // 'praed' => $praed,
   // 'supid' => $supid,
    //  'magus' => $magusad,
   //   'joogid' => $joogid
//  ));
// jalus - kõik JS asjad
//jalus();


require_once 'conf.php';
// loome vajalikud vaade objektid
$mainTmpl = new Template ('main');
$contentTmpl = new Template('content');
$cardTmpl = new Template('card');
$cardHeaderTmpl = new Template('header');
$cardDataTmpl = new Template('data');

$mainTmpl->set('title', 'Menu App');

$cardTmpl-> set('card_header', $cardHeaderTmpl->parse());
$cardTmpl-> set('card_data', $cardDataTmpl->parse());

$contentTmpl->add ('cards', $cardTmpl->parse());
$contentTmpl->add ('cards', $cardTmpl->parse());
$contentTmpl->add ('cards', $cardTmpl->parse());
$contentTmpl->add ('cards', $cardTmpl->parse());

$mainTmpl->set ('content', $contentTmpl->parse());


echo $mainTmpl->parse();

//  echo '<pre>';
//  print_r($mainTmpl);
//  echo '</pre>';

?>