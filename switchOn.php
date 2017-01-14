<?php 

if(isset($_GET['ain'])) {
  require 'login.inc.php';

  $ch = curl_init('http://fritz.box/login_sid.lua');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $login = curl_exec($ch);
  $session_status_simplexml = simplexml_load_string($login);

  $challenge = $session_status_simplexml->Challenge;
  $response = $challenge . '-' . md5(mb_convert_encoding($challenge.'-'.$fritzbox_password, "UCS-2LE", "UTF-8"));
  curl_setopt($ch, CURLOPT_POSTFIELDS, "username=".$fritzbox_username."&response={$response}&page=/login_sid.lua");
  $sendlogin = curl_exec($ch);
  $session_status_simplexml = simplexml_load_string($sendlogin);
  if($session_status_simplexml->SID != '0000000000000000') {
    $SID = $session_status_simplexml->SID;
  } else {
    echo "ERROR: Login failed";
    exit;
  }
  curl_close($ch);

  $switchOn = file_get_contents('http://fritz.box/webservices/homeautoswitch.lua?switchcmd=setswitchon&sid='.$SID.'&ain='.$_GET['ain']);

  $logout = file_get_contents('http://fritz.box/login.lua?page=/home/home.lua&logout=1&sid='.$SID);
}

?>
