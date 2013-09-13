<?php

/*
 * Squelette : prive/formulaires/menu_lang.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/menu_lang.html
// Temps de compilation total: 1.357 ms
//

function html_5cd8dadca9d6b209c8f80cd4f560a0fd($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(recuperer_fond( 'formulaires/inc-options-langues' , array('name' => interdire_scripts(table_valeur(@$Pile[0], (string)'name', null)) ,
	'default' => interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'default', null), '')) ), array('compil'=>array('prive/formulaires/menu_lang.html','html_5cd8dadca9d6b209c8f80cd4f560a0fd','',0,$GLOBALS['spip_lang'])), '')))!=='' ?
		((	'<div class="formulaire_spip formulaire_menu_lang" id="formulaire_menu_lang">
<form method="post" action="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'url', null),true)) .
	'"><div>
	' .
	interdire_scripts(form_hidden(entites_html(table_valeur(@$Pile[0], (string)'url', null),true))) .
	'
	<label for="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'">' .
	_T('public|spip|ecrire:info_langues') .
	'</label>
	<select name="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'" id="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true)) .
	'" onchange="this.parentNode.parentNode.submit()">
		') . $t1 . '
	</select>
	<noscript><p class="boutons"><input type="submit" class="submit" value="&gt;&gt;" /></p></noscript>
</div></form>
</div>') :
		'');

	return analyse_resultat_skel('html_5cd8dadca9d6b209c8f80cd4f560a0fd', $Cache, $page, 'prive/formulaires/menu_lang.html');
}
?>