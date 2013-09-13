<?php

/*
 * Squelette : ../prive/squelettes/navigation/configurer.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 10:35:26 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/configurer.html
// Temps de compilation total: 1.427 ms
//

function html_3a923a9e0a2c94879effdcb8fbba2067($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'nav'] = recuperer_fond( 'prive/squelettes/inclure/menu-navigation' , array_merge($Pile[0],array('menu' => 'menu_configuration' ,
	'bloc' => 'navigation' )), array('compil'=>array('../prive/squelettes/navigation/configurer.html','html_3a923a9e0a2c94879effdcb8fbba2067','',0,$GLOBALS['spip_lang'])), '')) .
((match(table_valeur($Pile["vars"], (string)'nav', null),'execfound'))  ?
		(' ' . (	'
' .
	table_valeur($Pile["vars"], (string)'nav', null) .
	boite_ouvrir(wrap(_T('avis_attention'),'<h4>'), 'info') .
	'
<p>' .
	_T('public|spip|ecrire:texte_inc_config') .
	'</p>
' .
	boite_fermer() .
	'
')) :
		''));

	return analyse_resultat_skel('html_3a923a9e0a2c94879effdcb8fbba2067', $Cache, $page, '../prive/squelettes/navigation/configurer.html');
}
?>