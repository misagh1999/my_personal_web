<?php
//include("../admin/config.php");

function post_content($text){
  $text=substr($text,0,750);
  $text=substr($text,0,strrpos($text," "));
  $text=$text."...";
  return $text;
}

function login($username,$password,$database){

}
 ?>
