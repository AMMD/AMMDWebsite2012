<?php

/*
 * Squelette : ../plugins/auto/menus/formulaires/inc-nouvelle_entree-2.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Tue, 16 Apr 2013 09:43:04 GMT
 * Boucles :   _parametres
 */ 

function BOUCLE_parametreshtml_b80b8214c0cf4076794cd896ada93d33(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur(table_valeur($Pile["vars"], (string)'infos', null),'parametres'));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_parametres';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/auto/menus/formulaires/inc-nouvelle_entree-2.html','html_b80b8214c0cf4076794cd896ada93d33','_parametres',12,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('menus:formulaire_facultatif');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'parametres'),interdire_scripts($Pile[$SP]['cle']))) .
'<li class="editer_texte' .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
		<label for="' .
interdire_scripts($Pile[$SP]['cle']) .
'">' .
interdire_scripts(table_valeur($Pile[$SP]['valeur'],'label')) .
' ' .
(($t1 = strval(interdire_scripts(((table_valeur($Pile[$SP]['valeur'],'obligatoire')) ?'' :' '))))!=='' ?
		($t1 . (	'&#91;' .
	$l1 .
	'&#93;')) :
		'') .
'</label>
		' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
		<input type="text" class="text' .
(($t1 = strval(interdire_scripts(table_valeur($Pile[$SP]['valeur'],'class'))))!=='' ?
		(' ' . $t1) :
		'') .
'" name="parametres[' .
interdire_scripts($Pile[$SP]['cle']) .
']" value="' .
interdire_scripts(entites_html(((($a = table_valeur(entites_html(table_valeur(@$Pile[0], (string)'parametres', null),true),interdire_scripts($Pile[$SP]['cle']))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true),interdire_scripts($Pile[$SP]['cle'])))))) .
'" />
	</li>
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/menus/formulaires/inc-nouvelle_entree-2.html
// Temps de compilation total: 6.720 ms
//

function html_b80b8214c0cf4076794cd896ada93d33($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][(string)'type_entree'] = interdire_scripts(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true),'type_entree'))) .
vide($Pile['vars'][(string)'infos'] = interdire_scripts(table_valeur(entites_html(table_valeur(@$Pile[0], (string)'erreurs', null),true),(	'infos_' .
		table_valeur($Pile["vars"], (string)'type_entree', null))))) .
'<fieldset>
<legend>
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_menus_entree', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
		' .
	filtrer('image_graver',filtrer('image_reduire',table_valeur(table_valeur($Pile["vars"], (string)'infos', null),'icone'),'24')) .
	'
	')) :
		'') .
'
	' .
(($t1 = strval(table_valeur(table_valeur($Pile["vars"], (string)'infos', null),'nom')))!=='' ?
		('<span style="vertical-align:middle;">' . $t1 . '</span>') :
		'') .
'
</legend>
<div class="explication">' .
table_valeur(table_valeur($Pile["vars"], (string)'infos', null),'description') .
'</div>
' .
(($t1 = BOUCLE_parametreshtml_b80b8214c0cf4076794cd896ada93d33($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<ul>
	' . $t1 . '
</ul>
') :
		'') .
'

<p class=\'boutons\'>
	<span class=\'image_loading\'></span>
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_menu_nouvelle_entree', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		<input type="hidden" name="id_menu_nouvelle_entree" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menu_nouvelle_entree', null),true)) .
	'" />
		<input type="hidden" name="rang" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'rang_suivant', null),true)) .
	'" />
	')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_menus_entree', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		<input type="hidden" name="id_menus_entree" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_menus_entree', null),true)) .
	'" />
	')) :
		'') .
'
	<input type="hidden" name="type_entree" value="' .
table_valeur($Pile["vars"], (string)'type_entree', null) .
'" />
	<input type="submit" class="submit link" value="' .
_T('public|spip|ecrire:bouton_annuler') .
'" />
	<input type="submit" class="submit" name="enregistrer" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'" />
</p>
</fieldset>');

	return analyse_resultat_skel('html_b80b8214c0cf4076794cd896ada93d33', $Cache, $page, '../plugins/auto/menus/formulaires/inc-nouvelle_entree-2.html');
}
?>