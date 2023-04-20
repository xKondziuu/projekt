<?php 

// Copyright Konrad Koronowski 2023
// unified fullscreen website layout


session_start();

$hostname = $_SERVER['HTTP_HOST'];
$pathname = $_GET['path'];
$_SESSION['path'] = $pathname;
if ($pathname == '') {
$pathname = 'home'; } 





// L A N G U A G E   S E L E C T O R //


if (!$_GET['locale']) {

	$_SESSION['locale_userSett'] = false;

	if (!$_COOKIE['locale']) {

		$_SESSION['locale_cookieSett'] = false;
		$locale = explode('-', explode(',', explode(';', $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0])[0])[0]; if ($locale == 'uk') {$locale = 'ua';}
		if (0 < count(array_intersect(array_map('strtolower', explode(' ', $locale)), array('pl','en','de','ru','ua')))) {
			setcookie('locale', $locale, 4102398000, "/", "", false, true);
			$_SESSION['locale'] = $locale;
		} else {
			setcookie('locale', 'en', 4102398000, "/", "", false, true);
			$_SESSION['locale'] = 'en';
			$locale = 'en';
		}
		$lang = file_get_contents('lang/'.$locale.'.json');
		$_SESSION['lang'] = json_decode($lang, true);
		
	} else {
		
		$_SESSION['locale_cookieSett'] = true;
		$locale = $_COOKIE['locale'];
		if (!$_SESSION['locale']) {
			$lang = file_get_contents('lang/'.$locale.'.json');
			$_SESSION['lang'] = json_decode($lang, true);
		} else {
			$locale = $_SESSION['locale'];
		}

	}

} else {

	$_SESSION['locale_userSett'] = true;

	$locale = $_GET['locale']; if ($locale == 'uk') {$locale = 'ua';}
	if (0 < count(array_intersect(array_map('strtolower', explode(' ', $locale)), array('pl','en','de','ru','ua')))) {
		setcookie('locale', $locale, 4102398000, "/", "", false, true);
		$_SESSION['locale'] = $locale;
	} else {
		setcookie('locale', 'en', 4102398000, "/", "", false, true);
		$_SESSION['locale'] = 'en';
		$locale = 'en';
	}
	$lang = file_get_contents('lang/'.$locale.'.json');
	$_SESSION['lang'] = json_decode($lang, true);

}









// D O C U M E N T   B U I L D E R //


if (!file_exists('page/'.$pathname.'.php')) {
	$pathname = 'etc/error';
	$errorcode = '404';
}

$txt = $_SESSION['lang'][$pathname.'.php'];

ob_start(); ?>

<!DOCTYPE html>
<html lang="<?=$locale?>" <?php if($errorcode !== null){echo 'class="error"';} ?>>
<head>
	<meta charset="UTF-8">
	<title>Przykładowa strona</title>
	<meta name="description" content="Szablon witryny" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Konrad Struczak" />
	<!----> <meta name="robots" content="noindex nofollow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://<?=$hostname?>/scss/css/style.css">
	<?php if($_GET['locale']){echo '<script type="text/javascript">history.replaceState({}, document.title, window.location.href.split("?")[0])</script>';} ?>
	<link rel="icon" type="image/x-icon" href="https://<?= $hostname ?>/img/favicon.ico" />
	<script type="text/javascript" src="https://<?= $hostname ?>/js/jquery.min.js"></script>
</head>
<body dir="ltr" id="content">
	<?php include 'page/'.$pathname.'.php'; ?>
	<script type="text/javascript" src="https://<?= $hostname ?>/js/butter.js"></script>
	<script type="text/javascript">butter.init({wrapperDamper: 0.07, cancelOnTouch: true, wrapperId: 'content'});</script>
	<div id="info" style="display: block; border: 3px solid #f00; height: 200px; width: 330px; padding: 5px; background: rgba(0, 0, 0, 0.25); color: #fff; position: fixed; top: 0; z-index: 999999;">
		<span>Wzór strony internetowej</span><a href="javascript:void(0)" onclick="this.parentNode.style.display='none'" style="color: #fff; font-weight: bold; float: right;">Ukryj</a>
		<br/> <br/>
		<div style="line-height: 16px;">Wspiera wiele języków, przycisk do ich przełączania można dodać. </div><div style="margin-top: 8px; line-height: 16px;"> Wymaga niewielkiego dopracowania dla <br/> lepszej obsługi urządzeń mobilnych oraz <hr/> dla urządzeń o mniejszych monitorach. </div><div style="margin-top: 8px; line-height: 16px;"> Można wyłączyć wygładzanie scrollowania.</div>
		<br/><span>© Konrad Koronowski 2023&nbsp;&nbsp;(<a href="mailto:xkondziuu4@gmail.com" style="color: #fff">kontakt</a>)</span>
	</div>
</body>
</html>

<?php $OUTPUT = ob_get_contents(); ob_clean();
	
function sanitize_output($buffer) {
	$search = array(
			'/\>[^\S ]+/s',     // wycina puste obszary za tagami, zostawiając spacje
			'/[^\S ]+\</s',     // wycina puste obszary przed tagami, zostawiając spacje
			'/(\s)+/s',         // skraca wielokrotne spacje do pojedyńczych
			'/<!--(.|\s)*?-->/' // usuwa wszystkie komentarze HTML
	);
	$replace = array(
			'>',
			'<',
			'\\1',
			''
	);
	$buffer = preg_replace($search, $replace, $buffer);
	return $buffer;
}


echo sanitize_output($OUTPUT);	

?>
