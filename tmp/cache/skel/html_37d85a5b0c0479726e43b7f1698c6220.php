<?php

/*
 * Squelette : plugins/auto/menus/inclure/barre-nav.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/menus/inclure/barre-nav.html
// Temps de compilation total: 0.499 ms
//

function html_37d85a5b0c0479726e43b7f1698c6220($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="menu-conteneur">
' .
recuperer_fond( 'inclure/menu' , array_merge($Pile[0],array('identifiant' => 'barrenav' )), array('compil'=>array('plugins/auto/menus/inclure/barre-nav.html','html_37d85a5b0c0479726e43b7f1698c6220','',2,$GLOBALS['spip_lang'])), '') .
'</div>
');

	return analyse_resultat_skel('html_37d85a5b0c0479726e43b7f1698c6220', $Cache, $page, 'plugins/auto/menus/inclure/barre-nav.html');
}
?>