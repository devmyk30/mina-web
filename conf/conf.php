<?
$lang = "";
$lang_arr = "KO EN DE";

if(!empty($_GET) && !empty($_GET['lang'])) {
	$lang = strtoupper($_GET['lang']);
} else {
	$lang = strtoupper(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2));
}
if (strpos($lang_arr, $lang) === false) {
	$lang = "EN";
}

//set_lang();

function set_lang() {
	if(!isset($_SESSION['user_lang'])) exit;
	session_start();
	$lang = strtoupper(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2));
	$lang_arr = "KO|EN|DE";
	if(strpos($lang_arr, $lang) == false) {
		$lang = "EN";  
	}
	$_SESSION['user_lang'] = $lang;
}
?>