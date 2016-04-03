<html>
<head>
<script src="/js/jquery-2.2.2.min.js"></script>
<style>
body {
  font-family: sans;
  background-color: #ffa500;
}

table {
  margin: auto;
}

*, *:after, *:before {
  box-sizing: border-box;
}

#switch {
  visibility: hidden;
  clip: rect(0 0 0 0);
  position: absolute;
  left: 9999px;
}

.switch {
  display: block;
  width: 130px;
  height: 60px;
  margin: 70px auto;
  position: relative;
  background: #ced8da;
  /* Old browsers */
  background: -moz-linear-gradient(left, #ced8da 0%, #d8e0e3 29%, #ccd4d7 34%, #d4dcdf 62%, #fff9f4 68%, #e1e9ec 74%, #b7bfc2 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, #ced8da), color-stop(29%, #d8e0e3), color-stop(34%, #ccd4d7), color-stop(62%, #d4dcdf), color-stop(68%, #fff9f4), color-stop(74%, #e1e9ec), color-stop(100%, #b7bfc2));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(left, #ced8da 0%, #d8e0e3 29%, #ccd4d7 34%, #d4dcdf 62%, #fff9f4 68%, #e1e9ec 74%, #b7bfc2 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(left, #ced8da 0%, #d8e0e3 29%, #ccd4d7 34%, #d4dcdf 62%, #fff9f4 68%, #e1e9ec 74%, #b7bfc2 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(left, #ced8da 0%, #d8e0e3 29%, #ccd4d7 34%, #d4dcdf 62%, #fff9f4 68%, #e1e9ec 74%, #b7bfc2 100%);
  /* IE10+ */
  background: linear-gradient(to right, #ced8da 0%, #d8e0e3 29%, #ccd4d7 34%, #d4dcdf 62%, #fff9f4 68%, #e1e9ec 74%, #b7bfc2 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ced8da', endColorstr='#b7bfc2',GradientType=1 );
  /* IE6-9 */
  transition: all 0.2s ease-out;
  cursor: pointer;
  border-radius: 0.35em;
  box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.7), inset 0 2px 0 rgba(255, 255, 255, 0.6), inset 0 -1px 0 1px rgba(0, 0, 0, 0.3), 0 8px 10px rgba(0, 0, 0, 0.15);
}

.switch:before {
  display: block;
  position: absolute;
  left: -35px;
  right: -35px;
  top: -25px;
  bottom: -25px;
  z-index: -2;
  content: "";
  border-radius: 0.4em;
  background: #d5dde0;
  background: linear-gradient(#d7dfe2, #bcc7cd);
  box-shadow: inset 0 2px 0 rgba(255, 255, 255, 0.6), inset 0 -1px 1px 1px rgba(0, 0, 0, 0.3), 0 0 8px 2px rgba(0, 0, 0, 0.2), 0 2px 4px 2px rgba(0, 0, 0, 0.1);
  pointer-events: none;
  transition: all 0.2s ease-out;
}

.switch:after {
  content: "";
  position: absolute;
  right: -25px;
  top: 50%;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #788b91;
  margin-top: -8px;
  z-index: -1;
  box-shadow: inset 0 -1px 8px rgba(0, 0, 0, 0.7), inset 0 -2px 2px rgba(0, 0, 0, 0.2), 0 1px 0 white, 0 -1px 0 rgba(0, 0, 0, 0.5), -47px 32px 15px 13px rgba(0, 0, 0, 0.25);
}

#switch:checked ~ .switch {
  background: #b7bfc2;
  /* Old browsers */
  background: -moz-linear-gradient(left, #b7bfc2 0%, #e1e9ec 26%, #fff9f4 32%, #d4dcdf 38%, #ccd4d7 66%, #d8e0e3 71%, #ced8da 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, #b7bfc2), color-stop(26%, #e1e9ec), color-stop(32%, #fff9f4), color-stop(38%, #d4dcdf), color-stop(66%, #ccd4d7), color-stop(71%, #d8e0e3), color-stop(100%, #ced8da));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(left, #b7bfc2 0%, #e1e9ec 26%, #fff9f4 32%, #d4dcdf 38%, #ccd4d7 66%, #d8e0e3 71%, #ced8da 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(left, #b7bfc2 0%, #e1e9ec 26%, #fff9f4 32%, #d4dcdf 38%, #ccd4d7 66%, #d8e0e3 71%, #ced8da 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(left, #b7bfc2 0%, #e1e9ec 26%, #fff9f4 32%, #d4dcdf 38%, #ccd4d7 66%, #d8e0e3 71%, #ced8da 100%);
  /* IE10+ */
  background: linear-gradient(to right, #b7bfc2 0%, #e1e9ec 26%, #fff9f4 32%, #d4dcdf 38%, #ccd4d7 66%, #d8e0e3 71%, #ced8da 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b7bfc2', endColorstr='#ced8da',GradientType=1 );
  /* IE6-9 */
}

#switch:checked ~ .switch:after {
  background: #b1ffff;
  box-shadow: inset 0 -1px 8px rgba(0, 0, 0, 0.7), inset 0 -2px 2px rgba(0, 0, 0, 0.2), 0 1px 0 white, 0 -1px 0 rgba(0, 0, 0, 0.5), -110px 32px 15px 13px rgba(0, 0, 0, 0.25);
}

#devicetitle {
  color: #fff;
  font-size: 3em;
  font-weight: bold;
  padding-right: 50px;
  text-shadow: 0px 1px 0px #999,
               0px 2px 0px #888,
               0px 3px 0px #777,
               0px 4px 0px #666,
               0px 5px 0px #555,
               0px 6px 0px #444,
               0px 7px 0px #333,
               0px 8px 7px #001135;
}

#content {
  width: 700px;
  margin: auto;
  text-align: center;
}
</style>
</head>
<body>
<div id="content">
<table>
<?php

require('login.inc.php');

$ch = curl_init('http://fritz.box/login_sid.lua');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$login = curl_exec($ch);
$session_status_simplexml = simplexml_load_string($login);
if($session_status_simplexml->SID != '0000000000000000') {
	$SID = $session_status_simplexml->SID;
} else {
	$challenge = $session_status_simplexml->Challenge;
	$response = $challenge . '-' . md5(mb_convert_encoding($challenge.'-'.$fritzbox_password, "UCS-2LE", "UTF-8"));
	curl_setopt($ch, CURLOPT_POSTFIELDS, "username=".$fritzbox_username."&response={$response}&page=/login_sid.lua");
	$sendlogin = curl_exec($ch);
	$session_status_simplexml = simplexml_load_string($sendlogin);
	if($session_status_simplexml->SID != '0000000000000000') {
		$SID = $session_status_simplexml->SID;
	} else {
		echo "ERROR: Login failed";
		return;
	}
}
curl_close($ch);

$devicesXML = simplexml_load_string(file_get_contents('http://fritz.box/webservices/homeautoswitch.lua?switchcmd=getdevicelistinfos&sid='.$SID));

$outputDevicesArray = Array();
foreach($devicesXML->device as $device) {
	$arr = Array();
	$arr['name'] = $device->name->__toString();
	$arr['state'] = $device->switch->state->__toString();
	$arr['identifier'] = str_replace(" ", '', $device[identifier]->__toString());
	if($arr['state']) {
		$arr['switch_state'] = ' checked="checked"';
	} else {
		$arr['switch_state'] = '';
	}
	$outputDevicesArray[] = $arr;
}

$logout = file_get_contents('http://fritz.box/login.lua?page=/home/home.lua&logout=1&sid='.$SID);

foreach($outputDevicesArray as $deviceArray) { ?>
<tr><td><span id="devicetitle"><?php echo $deviceArray['name']?></span></td><td><input type="checkbox" id="switch" name="switch" ain="<?php echo $deviceArray['identifier'] ?>" <?php echo $deviceArray['switch_state']?>><label for="switch" class="switch"></label></td></tr>
<?php } ?>
</table>
</div>
<script>
$("#switch").click( function(){
    var ain = $(this).attr('ain');
	if($(this).is(':checked')){$.get("switchOn.php?ain="+ain)};
	if(!$(this).is(':checked')){$.get("switchOff.php?ain="+ain)};
});
</script>
</body>
</html>
