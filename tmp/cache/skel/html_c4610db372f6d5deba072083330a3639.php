<?php

/*
 * Squelette : squelettes/navigation/dist.html
 * Date :      Wed, 01 May 2013 11:57:29 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/navigation/dist.html
// Temps de compilation total: 1.773 ms
//

function html_c4610db372f6d5deba072083330a3639($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(!((@$Pile[0]['id_secteur'] == '27'))  ?
		(' ' . (	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/rubriques') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/navigation/dist.html\',\'html_c4610db372f6d5deba072083330a3639\',\'\',3,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
(((@$Pile[0]['id_secteur'] == '27'))  ?
		(' ' . (	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/contribs') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'gauge_max\' => ' . argumenter_squelette('37000') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/navigation/dist.html\',\'html_c4610db372f6d5deba072083330a3639\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'

' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('squelettes/navigation/dist.html','html_c4610db372f6d5deba072083330a3639','',5,$GLOBALS['spip_lang'])) .
'
');

	return analyse_resultat_skel('html_c4610db372f6d5deba072083330a3639', $Cache, $page, 'squelettes/navigation/dist.html');
}
?>