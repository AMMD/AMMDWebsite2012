<?php

/*
 * Squelette : ../prive/squelettes/contenu/rubriques.html
 * Date :      Tue, 20 Nov 2012 08:52:41 GMT
 * Compile :   Tue, 16 Apr 2013 09:45:03 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/rubriques.html
// Temps de compilation total: 1.351 ms
//

function html_0dd221ff08178878b3f18e70d637fe9b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('public|spip|ecrire:info_rubriques') .
'</h1>
<!--affiche_milieu-->
' .
pipeline( 'affiche_enfants' , array('args' => array('exec' => 'rubriques'), 'data' => recuperer_fond( 'prive/objets/contenu/rubrique-enfants' , array_merge($Pile[0],array('id_rubrique' => '0' )), array('compil'=>array('../prive/squelettes/contenu/rubriques.html','html_0dd221ff08178878b3f18e70d637fe9b','',0,$GLOBALS['spip_lang'])), '')) ) .
'

' .
pipeline( 'afficher_complement_objet' , array('args' => array('type' => 'rubrique', 'id' => '0'), 'data' => '<div class="nettoyeur"></div>') ));

	return analyse_resultat_skel('html_0dd221ff08178878b3f18e70d637fe9b', $Cache, $page, '../prive/squelettes/contenu/rubriques.html');
}
?>