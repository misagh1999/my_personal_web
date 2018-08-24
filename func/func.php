<?php
//include("../admin/config.php");
//session_start();
function post_content($text){
  $text=substr($text,0,750);
  $text=substr($text,0,strrpos($text," "));
  $text=$text."...";
  return $text;
}

function send_message($type){
//  $_SESSION['msg']=$message;
  $_SESSION['type_msg']=$type;
  $message;
  switch ($type) {
    case 'ok_del':
      $message='اطلاعات شما با موفقیت حذف گردید';
      break;
    case 'no_del':
      $message='متاسفانه اطلاعات شما حذف نشد';
      break;
    case 'ok_send':
      $message='اطلاعات شمابا موفقیت ارسال شد';
      break;
    case 'no_send':
      $message='متاسفانه اطلاعات شما ارسال نشد';
      break;
    case 'ok_up':
      $message='اطلاعات شما با موفقیت بروزرسانی شد';
      break;
    case 'no_up':
      $message='متاسفانه اطلاعات شما بروزرسانی نشد';
      break;
    case 'ok_exit':
      $message='شما با موفقیت خارج شدید';
      break;
    case 'empty':
      $message='تمامی فیلدها باید تکمیل شوند';
      break;
    case 'false':
      $message='اطلاعات وارد شده شما صحیح نمی باشد';
      break;

    default:
      // code...
      break;
  }
  $_SESSION['msg']=$message;
}

function show_message(){
  $type=$_SESSION['type_msg'];
  $message=$_SESSION['msg'];
  $color;
  switch ($type) {
    case 'ok_del':
      $color='success';
      break;
    case 'no_del':
      $color='danger';
      break;
    case 'ok_send':
      $color='success';
      break;
    case 'no_send':
      $color='danger';
      break;
    case 'ok_up':
      $color='success';
      break;
    case 'no_up':
      $color='danger';
      break;
    case 'ok_exit':
      $color='success';
      break;
    case 'empty':
      $color='warning';
      break;
    case 'false':
      $color='danger';
      break;

    default:
      // code...
      break;
  }
  echo "<div class='alert alert-".$color." text-center' role='alert'>".$message."</div>";
  $_SESSION['type_msg']='';
  unset($_SESSION['msg']);
  //$_SESSION['msg']='';
}
 ?>
