<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/structure.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/structure.html
// Temps de compilation total: 3.022 ms
//

function html_478d8f0e0a337060d2bd94562bc2631b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((eval('return '._request('var_zajax').';')) ?'' :' '))))!=='' ?
		((	'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
	htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
	'" lang="' .
	htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
	'" dir="' .
	lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
	'">
<head>
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'head/' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type', null),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/structure.html\',\'html_478d8f0e0a337060d2bd94562bc2631b\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/z/v1.7.21/structure.html\',\'html_478d8f0e0a337060d2bd94562bc2631b\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</head>
<body class="page_' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'type', null), 'page'),true)) .
	(($t2 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'composition', null), ''),true))))!=='' ?
			((	' ' .
		interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'type', null), 'page'),true)) .
		'_') . $t2) :
			'') .
	'">
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('body') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/structure.html\',\'html_478d8f0e0a337060d2bd94562bc2631b\',\'\',8,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .
	interdire_scripts(@$Pile[0]['spip_cron']) .
	'
</body>
</html>
') . $t1) :
		'') .
(($t1 = strval(interdire_scripts(((eval('return '._request('var_zajax').';')) ?' ' :''))))!=='' ?
		((	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette(concat(_request('var_zajax'),'/',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type', null),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/structure.html\',\'html_478d8f0e0a337060d2bd94562bc2631b\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
') . $t1) :
		'') .
'
');

	return analyse_resultat_skel('html_478d8f0e0a337060d2bd94562bc2631b', $Cache, $page, 'plugins/auto/z/v1.7.21/structure.html');
}
?>