<?php

/*
 * Squelette : plugins/auto/formidable/v1.3.5/notifications/formulaire_email.html
 * Date :      Sun, 22 Jan 2012 10:00:14 GMT
 * Compile :   Tue, 16 Apr 2013 12:23:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/formidable/v1.3.5/notifications/formulaire_email.html
// Temps de compilation total: 4.965 ms
//

function html_6a0bc9dc5c918cebfe7e6efd55db90c5($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<p>
	' .
vide($Pile['vars'][(string)'date'] = date('d/m/Y')) .
vide($Pile['vars'][(string)'heure'] = date('H:i:s')) .
_T('formidable:traiter_email_horodatage', array('formulaire' => interdire_scripts(table_valeur(@$Pile[0], (string)'titre', null)),
'date' => table_valeur($Pile["vars"], (string)'date', null),
'heure' => table_valeur($Pile["vars"], (string)'heure', null))) .
'
	<br/>
	' .
vide($Pile['vars'][(string)'url'] = url_absolue(self())) .
_T('formidable:traiter_email_page', array('url' => table_valeur($Pile["vars"], (string)'url', null))) .
'
</p>

' .
recuperer_fond( 'inclure/voir_saisies' , array_merge($Pile[0],array('valeurs' => interdire_scripts(table_valeur(@$Pile[0], (string)'valeurs', null)) ,
	'saisies' => interdire_scripts(table_valeur(@$Pile[0], (string)'saisies', null)) )), array('compil'=>array('plugins/auto/formidable/v1.3.5/notifications/formulaire_email.html','html_6a0bc9dc5c918cebfe7e6efd55db90c5','',11,$GLOBALS['spip_lang'])), '') .
'---
<p>' .
_T('public|spip|ecrire:envoi_via_le_site') .
' <a href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'">' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</a></p>
' .
(($t1 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'traitements', null),'enregistrement')) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	vide($Pile['vars'][(string)'url'] = url_absolue(parametre_url(generer_url_ecrire('formulaires_reponses'),'id_formulaire',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_formulaire', null),true))))) .
	'<p>' .
	_T('formidable:traiter_email_url_enregistrement', array('url' => table_valeur($Pile["vars"], (string)'url', null))) .
	'</p>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_6a0bc9dc5c918cebfe7e6efd55db90c5', $Cache, $page, 'plugins/auto/formidable/v1.3.5/notifications/formulaire_email.html');
}
?>