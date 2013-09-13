<?php

/*
 * Squelette : ../prive/objets/contenu/rubrique.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:45:07 GMT
 * Boucles :   _afficher_contenu
 */ 

function BOUCLE_afficher_contenuhtml_afd5d0be7d1ae28e66c0b31782783cae(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_afficher_contenu';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.lang",
		"rubriques.descriptif",
		"rubriques.texte");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'rubriques.id_rubrique', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)),'','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('rubriques.statut',sql_quote($in)) : 
			array('=', 'rubriques.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/contenu/rubrique.html','html_afd5d0be7d1ae28e66c0b31782783cae','_afficher_contenu',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
<div class="champ contenu_titre' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['titre']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
_T('public|spip|ecrire:info_titre') .
'</div>
<div dir=\'' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'\' class=\'' .
'titre\'>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</div>
</div>
<div class="champ contenu_descriptif' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['descriptif']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
_T('public|spip|ecrire:info_descriptif') .
'</div>
<div dir=\'' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'\' class=\'' .
'descriptif\'>' .
interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['descriptif'], $connect, $Pile[0]),'500','0'))) .
'</div>
</div>
<div class="champ contenu_texte' .
(($t1 = strval(interdire_scripts((strlen($Pile[$SP]['texte']) ? '':'vide'))))!=='' ?
		(' ' . $t1) :
		'') .
'">
<div class=\'label\'>' .
_T('public|spip|ecrire:info_texte') .
'</div>
<div dir=\'' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'\' class=\'' .
'texte\'>' .
interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['texte'], $connect, $Pile[0]),'500','0'))) .
'</div>
</div>
' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		((	'<div class="champ contenu_notes">
<div class=\'label\'>' .
	_T('public|spip|ecrire:info_notes') .
	'</div>
<div dir=\'' .
	lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
	'\' class=\'' .
	'notes\'>') . $t1 . '</div>
</div>') :
		'') .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/contenu/rubrique.html
// Temps de compilation total: 4.092 ms
//

function html_afd5d0be7d1ae28e66c0b31782783cae($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = BOUCLE_afficher_contenuhtml_afd5d0be7d1ae28e66c0b31782783cae($Cache, $Pile, $doublons, $Numrows, $SP);

	return analyse_resultat_skel('html_afd5d0be7d1ae28e66c0b31782783cae', $Cache, $page, '../prive/objets/contenu/rubrique.html');
}
?>