<?php

/*
 * Squelette : ../prive/squelettes/navigation/auteurs.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 13:10:22 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/auteurs.html
// Temps de compilation total: 4.595 ms
//

function html_9b62ef9d8cbed11c2a772af1c1a76849($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
boite_ouvrir('', 'info') .
'<p>' .
_T('public|spip|ecrire:info_gauche_auteurs') .
'</p>
' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, (((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo')) ?' ' :'')))))!=='' ?
		($t1 . (	'
<p>' .
	_T('public|spip|ecrire:info_gauche_auteurs_exterieurs') .
	'</p>
')) :
		'') .
'
' .
boite_fermer() .
'

' .
boite_ouvrir('', 'raccourcis') .
'
	' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', 'auteur')?" ":""))))!=='' ?
		($t1 . (	'
		' .
	filtre_icone_horizontale_dist(generer_url_ecrire('auteur_edit','new=oui'),_T('public|spip|ecrire:icone_creer_nouvel_auteur'),'auteur','new') .
	'
	')) :
		'') .
'
	' .
filtre_icone_horizontale_dist(generer_url_ecrire('infos_perso'),_T('public|spip|ecrire:icone_informations_personnelles'),'fiche-perso') .
'

	' .
((avoir_visiteurs('1'))  ?
		(' ' . (	'
	' .
	filtre_icone_horizontale_dist(generer_url_ecrire(interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'is_visiteur', null), ''),true) ? 'auteurs':'visiteurs'))),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'is_visiteur', null), ''),true) ? _T('public|spip|ecrire:icone_afficher_auteurs'):_T('public|spip|ecrire:icone_afficher_visiteurs'))),'auteur-6forum') .
	'
	')) :
		'') .
'
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_9b62ef9d8cbed11c2a772af1c1a76849', $Cache, $page, '../prive/squelettes/navigation/auteurs.html');
}
?>