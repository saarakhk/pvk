<?php
/**
 * Created by PhpStorm.
 * User: Saara
 * Date: 06.02.2019
 * Time: 21:34
 */

class Text
{
 var $str = '';

 public function __construct($s)
 {
     $this->setText($s);
 }

 function setText($s) {
     $this->str = $s;
 }

 function showText(){
     echo '<b>'.$this->str.'</b><br>';
 }
}