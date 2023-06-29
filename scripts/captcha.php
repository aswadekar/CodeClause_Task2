<?php
  session_start();

  $random_num    = md5(random_bytes(64));
  $captcha_code  = substr($random_num, 0, 6);

  $_SESSION['CAPTCHA_CODE'] = $captcha_code;

  $layer = imagecreatetruecolor(198, 37);
  $captcha_bg = imagecolorallocate($layer, 198, 220, 251); 
  imagefill($layer, 0, 0, $captcha_bg);
  $captcha_text_color = imagecolorallocate($layer, 0, 0, 0);
  imagestring($layer, 5, 55, 10, $captcha_code, $captcha_text_color);
  header("Content-type: image/jpeg");
  imagejpeg($layer);

?>