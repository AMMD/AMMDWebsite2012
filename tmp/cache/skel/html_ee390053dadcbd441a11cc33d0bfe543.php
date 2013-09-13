<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/404.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Tue, 16 Apr 2013 09:09:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/404.html
// Temps de compilation total: 5.543 ms
//

function html_ee390053dadcbd441a11cc33d0bfe543($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("' . concat('HTTP/1.0 ',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'code', null), '404 Not Found'),true))) . '"); ?'.'>' .
'<'.'?php header("' . 'Cache-Control: no-store, no-cache, must-revalidate' . '"); ?'.'>' .
'<'.'?php header("' . 'Pragma: no-cache' . '"); ?'.'>' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('structure') . ', array_merge('.var_export($Pile[0],1).',array(\'type\' => ' . argumenter_squelette('page') . ',
	\'composition\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'status', null), '404'),true))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/404.html\',\'html_ee390053dadcbd441a11cc33d0bfe543\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_ee390053dadcbd441a11cc33d0bfe543', $Cache, $page, 'plugins/auto/z/v1.7.21/404.html');
}
?>