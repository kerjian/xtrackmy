<?php
  $get_url = trim($_GET['url']);
  $get_param = trim($_GET['param']);
  
  $get_url = 'http://www.xiaomayibuy.com/track.php?n=350000165622';
  
  $h = curl_init();
  curl_setopt($h, CURLOPT_URL, $get_url); 
  curl_setopt($h, CURLOPT_POST, true);
  curl_setopt($h, CURLOPT_HEADER, false);
  curl_setopt($h, CURLOPT_RETURNTRANSFER, 1);

  $result = curl_exec($h);
  curl_reset($h);
  
  echo $result;
?>
