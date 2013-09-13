<?php

/*
 * Squelette : squelettes/inc-theme-head.html
 * Date :      Tue, 26 Mar 2013 14:22:05 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc-theme-head.html
// Temps de compilation total: 0.980 ms
//

function html_9ef750ea1608749572715226fae399f2($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(find_in_path('css/slidernav.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="projection, screen, tv" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/style_maparaan.css')))))!=='' ?
		('<link rel="stylesheet"
       href="' . $t1 . '"
       type="text/css" media="projection, screen, tv" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/counterparts.css')))))!=='' ?
		('<link rel="stylesheet"
       href="' . $t1 . '"
       type="text/css" media="projection, screen, tv" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/main.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="projection, screen, tv" />') :
		'') .
'
');

	return analyse_resultat_skel('html_9ef750ea1608749572715226fae399f2', $Cache, $page, 'squelettes/inc-theme-head.html');
}
?>