<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/navigation/page.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/navigation/page.html
// Temps de compilation total: 1.278 ms
//

function html_e2d58a499e4f80449da515f1e6a0f604($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'composition'] = interdire_scripts((find_in_path((	'navigation/page-' .
		interdire_scripts(concat(entites_html(table_valeur(@$Pile[0], (string)'composition', null),true),'.html')))) ? (	'page-' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'composition', null),true))):'dist'))) .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'navigation/' .
	table_valeur($Pile["vars"], (string)'composition', null))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/navigation/page.html\',\'html_e2d58a499e4f80449da515f1e6a0f604\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_e2d58a499e4f80449da515f1e6a0f604', $Cache, $page, 'plugins/auto/z/v1.7.21/navigation/page.html');
}
?>