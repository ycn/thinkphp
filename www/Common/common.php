<?php

function getBrowser ($userAgent = '') {
	if (empty($userAgent))
		$userAgent = $_SERVER['HTTP_USER_AGENT'];
	
	$browser = '';
	$version= '';
	$platform = '';

	//First get the platform
	if (preg_match('/linux/i', $userAgent)) {
		$platform = 'linux';
	}
	elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
		$platform = 'mac';
	}
	elseif (preg_match('/windows|win32/i', $userAgent)) {
		$platform = 'windows';
	}
	 
	// Next get the name of the useragent yes seperately and for good reason
	if (preg_match('/bot|spider/i', $userAgent)) {
		$browser = 'Bot';
	}
	if (preg_match('/MSIE/i', $userAgent) && !preg_match('/Opera/i', $userAgent)) {
		$browser = 'MSIE';
	}
	elseif (preg_match('/Firefox/i', $userAgent)) {
		$browser = 'Firefox';
	}
	elseif (preg_match('/Chrome/i', $userAgent)) {
		$browser = 'Chrome';
	}
	elseif (preg_match('/Safari/i', $userAgent)) {
		$browser = 'Safari';
	}
	elseif (preg_match('/Opera/i', $userAgent)) {
		$browser = 'Opera';
	}
	elseif(preg_match('/Netscape/i', $userAgent)) {
		$browser = 'Netscape';
	}
	 
	// finally get the correct version number
	$known = array('Version', $browser, 'other');
	$pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#i';
	if (!preg_match_all($pattern, $userAgent, $matches)) {
		// we have no matching number just continue
	}
	 
	// see how many we have
	$i = count($matches['browser']);
	if ($i != 1) {
		//we will have two since we are not using 'other' argument yet
		//see if version is before or after the name
		if (strripos($userAgent,"Version") < strripos($userAgent,$ub)){
			$version= $matches['version'][0];
		}
		else {
			$version= $matches['version'][1];
		}
	}
	else {
		$version= $matches['version'][0];
	}
	 
	// check if we have a number
	if (empty($version)) $version = '';
	 
	return array(
        'userAgent' => $userAgent,
        'browser'   => $browser,
        'version'   => $version,
        'platform'  => $platform,
	);
}

function GetRealIP () {
	$ip = '';
	if (getenv('HTTP_CLIENT_IP')) {
		$ip = getenv('HTTP_CLIENT_IP');
	}
	elseif (getenv('HTTP_X_FORWARDED_FOR')) {
		list($ip) = explode(',', getenv('HTTP_X_FORWARDED_FOR'));
	}
	elseif (getenv('REMOTE_ADDR')) {
		$ip = getenv('REMOTE_ADDR');
	}
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function GetCurPageURL () {
	$url = 'http';
	if ($_SERVER["HTTPS"] == "on") {
		$url .= 's';
	}
	$url .= '://';
	if ($_SERVER["SERVER_PORT"] != "80") {
		$url .= $_SERVER['HTTP_HOST'] . ':' . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
	}
	else {
		$url .= $_SERVER['HTTP_HOST']. $_SERVER["REQUEST_URI"];
	}
	return $url;
}

function GetCurPageName () {
	return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") + 1);
}

/*
 * type = array(
 * 0 => 'default',
 * 1 => 'exception',
 * );
 */
function DBLog ($msg, $type=0, $level='DEBUG') {
	if (!empty($msg)) {
		$uid = C('uid');
		$uid = empty($uid) ? 0 : $uid;

		$Log = M('SysLog');
		$data['level'] = $level;
		$data['type'] = $type;
		$data['uid'] = $uid;
		$data['cdate'] = time();
		$data['msg'] = $msg;
		$data['pageurl'] = GetCurPageURL();
		$browser = getBrowser();
		$data['browser'] = $browser['browser'] . $browser['version'];
		$data['method'] = $_SERVER['REQUEST_METHOD'];
		$data['ip'] = GetRealIP();
		$Log->add($data);
	}
}

?>