<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/head/page.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Tue, 16 Apr 2013 12:32:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/head/page.html
// Temps de compilation total: 1.090 ms
//

function html_ab6141bc727f5819849b6c7aa0fd2b12($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'composition'] = interdire_scripts((find_in_path((	'head/page-' .
		interdire_scripts(concat(entites_html(table_valeur(@$Pile[0], (string)'composition', null),true),'.html')))) ? (	'page-' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'composition', null),true))):'dist'))) .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'head/' .
	table_valeur($Pile["vars"], (string)'composition', null))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/head/page.html\',\'html_ab6141bc727f5819849b6c7aa0fd2b12\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_ab6141bc727f5819849b6c7aa0fd2b12', $Cache, $page, 'plugins/auto/z/v1.7.21/head/page.html');
}
?>