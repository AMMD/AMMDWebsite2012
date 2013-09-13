<?php

/*
 * Squelette : plugins/auto/saisies/v1.27.0/saisies-vues/fieldset.html
 * Date :      Sat, 18 Sep 2010 22:00:14 GMT
 * Compile :   Tue, 16 Apr 2013 12:23:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/saisies/v1.27.0/saisies-vues/fieldset.html
// Temps de compilation total: 0.952 ms
//

function html_34ba9857de2d37cbe4f524c5a9fe73e3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'label', null),true))))!=='' ?
		('<h3 class="legend">' . $t1 . '</h3>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts(((is_array(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	recuperer_fond( 'inclure/voir_saisies' , array_merge($Pile[0],array('from_fieldset' => 'on' )), array('compil'=>array('plugins/auto/saisies/v1.27.0/saisies-vues/fieldset.html','html_34ba9857de2d37cbe4f524c5a9fe73e3','',4,$GLOBALS['spip_lang'])), ''))) :
		'') .
'
');

	return analyse_resultat_skel('html_34ba9857de2d37cbe4f524c5a9fe73e3', $Cache, $page, 'plugins/auto/saisies/v1.27.0/saisies-vues/fieldset.html');
}
?>