<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaires.html
 * Date :      Thu, 06 Sep 2012 18:00:20 GMT
 * Compile :   Wed, 01 May 2013 13:01:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaires.html
// Temps de compilation total: 2.837 ms
//

function html_4bea55e8b86ac488dea02eb7a2531e9d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
boite_ouvrir((	'<h1>' .
	_T('formidable:bouton_formulaires') .
	'</h1>
	<p>' .
	_T('formidable:formulaires_introduction') .
	'</p>
'), 'simple') .
'
' .
boite_fermer() .
'

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/formulaires') . ', array(\'titre\' => ' . argumenter_squelette(_T('formulaire:titre_formulaires')) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaires.html\',\'html_4bea55e8b86ac488dea02eb7a2531e9d\',\'\',4,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	filtre_icone_verticale_dist(parametre_url(generer_url_ecrire('formulaire_edit'),'nouveau','oui'),_T('formulaire:icone_creer_formulaire'),'formulaire','formulaire-nouveau-48','center') .
	'
')) :
		'') .
'
');

	return analyse_resultat_skel('html_4bea55e8b86ac488dea02eb7a2531e9d', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/squelettes/contenu/formulaires.html');
}
?>