<?php

/*
 * Squelette : ../prive/squelettes/contenu/article_edit.html
 * Date :      Tue, 20 Nov 2012 08:52:41 GMT
 * Compile :   Tue, 16 Apr 2013 09:46:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/article_edit.html
// Temps de compilation total: 0.587 ms
//

function html_32f3bcf6d7db4bf80518b33ae9505499($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/echafaudage/contenu/objet_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette('article') . ',
	\'id_objet\' => ' . argumenter_squelette(@$Pile[0]['id_article']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/contenu/article_edit.html\',\'html_32f3bcf6d7db4bf80518b33ae9505499\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_32f3bcf6d7db4bf80518b33ae9505499', $Cache, $page, '../prive/squelettes/contenu/article_edit.html');
}
?>