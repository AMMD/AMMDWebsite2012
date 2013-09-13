<?php

/*
 * Squelette : ../prive/squelettes/navigation/dist.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:25:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/dist.html
// Temps de compilation total: 2.333 ms
//

function html_db6ccfe298ca9da0effbe535d359d9f4($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(interdire_scripts(((match(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true),'configurer_')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/configurer') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/navigation/dist.html\',\'html_db6ccfe298ca9da0effbe535d359d9f4\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		'') .
'
' .
vide($Pile['vars'][(string)'objet_exec'] = interdire_scripts(trouver_objet_exec(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)))) .
((table_valeur($Pile["vars"], (string)'objet_exec', null))  ?
		(' ' . (	'
	' .
	vide($Pile['vars'][(string)'f'] = (table_valeur(table_valeur($Pile["vars"], (string)'objet_exec', null),'edition') ? 'objet_edit':'objet')) .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/echafaudage/navigation/' .
		table_valeur($Pile["vars"], (string)'f', null))) . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette(table_valeur(table_valeur($Pile["vars"], (string)'objet_exec', null),'type')) . ',
	\'id_objet\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur(table_valeur($Pile["vars"], (string)'objet_exec', null),'id_table_objet'), null),true))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/navigation/dist.html\',\'html_db6ccfe298ca9da0effbe535d359d9f4\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
')) :
		''));

	return analyse_resultat_skel('html_db6ccfe298ca9da0effbe535d359d9f4', $Cache, $page, '../prive/squelettes/navigation/dist.html');
}
?>