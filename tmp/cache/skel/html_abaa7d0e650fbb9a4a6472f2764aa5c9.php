<?php

/*
 * Squelette : ../plugins/auto/menus/prive/squelettes/contenu/menus_tous.html
 * Date :      Fri, 02 Dec 2011 16:00:20 GMT
 * Compile :   Tue, 16 Apr 2013 09:25:03 GMT
 * Boucles :   _menus_principaux
 */ 

function BOUCLE_menus_principauxhtml_abaa7d0e650fbb9a4a6472f2764aa5c9(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'menus';
		$command['id'] = '_menus_principaux';
		$command['from'] = array('menus' => 'spip_menus');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("menus.titre",
		"menus.id_menu",
		"menus.identifiant");
		$command['orderby'] = array('menus.titre');
		$command['where'] = 
			array(
			array('=', 'menus.id_menus_entree', 0));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/menus/prive/squelettes/contenu/menus_tous.html','html_abaa7d0e650fbb9a4a6472f2764aa5c9','_menus_principaux',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('menus:editer_menus_editer');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<li class="item">' .
vide($Pile['vars'][(string)'auth'] = invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'menu', invalideur_session($Cache, $Pile[$SP]['id_menu']))?" ":""))) .
((table_valeur($Pile["vars"], (string)'auth', null))  ?
		(' ' . (	'<a href="' .
	generer_url_ecrire('menus_editer',(	'id_menu=' .
		$Pile[$SP]['id_menu'])) .
	'">')) :
		'') .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
' (' .
interdire_scripts($Pile[$SP]['identifiant']) .
')' .
((table_valeur($Pile["vars"], (string)'auth', null))  ?
		(' ' . '</a>') :
		'') .
'
		<p class=\'actions\'>
			' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'menu', invalideur_session($Cache, $Pile[$SP]['id_menu']))?" ":""))))!=='' ?
		($t1 . (	'	<span class=\'lien_modifier\'>&#91;<a href=\'' .
	generer_url_ecrire('menus_editer',(	'id_menu=' .
		$Pile[$SP]['id_menu'])) .
	'\'>' .
	$l1 .
	'</a>&#93;</span>')) :
		'') .
'
		</p>
	</li>
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/menus/prive/squelettes/contenu/menus_tous.html
// Temps de compilation total: 5.548 ms
//

function html_abaa7d0e650fbb9a4a6472f2764aa5c9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<h1 class="grostitre">' .
_T('menus:editer_menus_titre') .
'</h1>
<p>' .
_T('menus:editer_menus_explication') .
'</p>

' .
(($t1 = BOUCLE_menus_principauxhtml_abaa7d0e650fbb9a4a6472f2764aa5c9($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<ul class="liste_items">
	' . $t1 . '
</ul>
') :
		'') .
'

' .
filtre_icone_verticale_dist(parametre_url(generer_url_ecrire('menus_editer'),'nouveau','oui'),_T('menus:editer_menus_nouveau'),'menus-24.png','new','right') .
'

<div class="nettoyeur"></div>
');

	return analyse_resultat_skel('html_abaa7d0e650fbb9a4a6472f2764aa5c9', $Cache, $page, '../plugins/auto/menus/prive/squelettes/contenu/menus_tous.html');
}
?>