<?php

/*
 * Squelette : ../prive/squelettes/hierarchie/auteur_edit.html
 * Date :      Tue, 20 Nov 2012 08:52:41 GMT
 * Compile :   Tue, 16 Apr 2013 13:10:25 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/hierarchie/auteur_edit.html
// Temps de compilation total: 0.347 ms
//

function html_b70eb53a0f468bf7fbba153f76d97ab0($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/hierarchie/auteur') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/hierarchie/auteur_edit.html\',\'html_b70eb53a0f468bf7fbba153f76d97ab0\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_b70eb53a0f468bf7fbba153f76d97ab0', $Cache, $page, '../prive/squelettes/hierarchie/auteur_edit.html');
}
?>