<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/inclure/head.html
 * Date :      Sun, 01 Jan 2012 07:00:04 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/inclure/head.html
// Temps de compilation total: 4.277 ms
//

function html_84c94c9e7df72bb7c17b6c21a597a6b6($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

<meta http-equiv="Content-Type" content="text/html; charset=' .
interdire_scripts($GLOBALS['meta']['charset']) .
'" />


<meta name="generator" content="SPIP' .
(($t1 = strval(spip_version()))!=='' ?
		(' ' . $t1) :
		'') .
'" />


' .
(($t1 = strval(interdire_scripts(generer_url_public('backend', ''))))!=='' ?
		((	'<link rel="alternate" type="application/rss+xml" title="' .
	_T('public|spip|ecrire:syndiquer_site') .
	'" href="') . $t1 . '" />') :
		'') .
'


' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('spip_style.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="all" />') :
		'') .
'


' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('spip_formulaires.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="projection, screen, tv" />') :
		'') .
'


' .
pipeline('insert_head_css','<!-- insert_head_css -->') .
'


' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('habillage.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="projection, screen, tv" />') :
		'') .
'


' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('impression.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="print" />') :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((find_in_path('inc-theme-head.html')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	recuperer_fond( 'inc-theme-head' , array_merge($Pile[0],array()), array('compil'=>array('plugins/auto/z/v1.7.21/inclure/head.html','html_84c94c9e7df72bb7c17b6c21a597a6b6','',26,$GLOBALS['spip_lang'])), ''))) :
		'') .
'


' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('perso.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" media="projection, screen, tv" />') :
		'') .
'


' .
pipeline('insert_head','<!-- insert_head -->'). '<?php header("X-Spip-Filtre: '.'insert_head_css_conditionnel' . '"); ?'.'>
');

	return analyse_resultat_skel('html_84c94c9e7df72bb7c17b6c21a597a6b6', $Cache, $page, 'plugins/auto/z/v1.7.21/inclure/head.html');
}
?>