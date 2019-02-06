<?php
/**
 * Created by PhpStorm.
 * User: Saara
 * Date: 06.02.2019
 * Time: 21:44
 */

require_once 'Text.php';

$hello1 = new Text('Hello World!');

echo '<pre>';
print_r($hello1);
echo '</pre>';

$hello1->showText();

$hello1->setText('Now it works!');

$hello1->showText();

$hello2 = new Text('Buy!');
echo '<pre>';
print_r($hello2);
echo '</pre>';
$hello2->showText();