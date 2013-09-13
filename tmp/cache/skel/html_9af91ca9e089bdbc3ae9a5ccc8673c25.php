<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/inclure/pied.html
 * Date :      Fri, 25 Mar 2011 12:00:14 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/inclure/pied.html
// Temps de compilation total: 3.373 ms
//

function html_9af91ca9e089bdbc3ae9a5ccc8673c25($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc-footer-content') . ', array(\'id_rubrique\' => ' . argumenter_squelette(@$Pile[0]['id_rubrique']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/squelette_maparaan/v1.0.0/inclure/pied.html\',\'html_9af91ca9e089bdbc3ae9a5ccc8673c25\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>' .
'
		</div>
	</div>
	<div id=\'footer-final\'>
		<div id=\'footer-final-wrapper\'>
			<div id="footer-spip">
				<a href="http://www.spip.net/" title="' .
_T('public|spip|ecrire:site_realise_avec_spip') .
'"><img src="' .
interdire_scripts(find_in_path('spip.png')) .
'" alt="SPIP" width="48" height="16" /></a>' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)) ?' ' :'')))))!=='' ?
		('
				' . $t1 . (	'| <a href="' .
	executer_balise_dynamique('URL_LOGOUT',
	array(),
	array('plugins/auto/squelette_maparaan/v1.0.0/inclure/pied.html','html_9af91ca9e089bdbc3ae9a5ccc8673c25','',8,$GLOBALS['spip_lang'])) .
	'" rel="nofollow">' .
	_T('public|spip|ecrire:icone_deconnecter') .
	'</a>
				')) :
		'') .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)) ?'' :' ')))))!=='' ?
		($t1 . (	'| <a href="' .
	interdire_scripts(parametre_url(generer_url_public('login', ''),'url',self())) .
	'" rel="nofollow" class=\'login_modal\'>' .
	_T('public|spip|ecrire:lien_connecter') .
	'</a>')) :
		'') .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ecrire')?" ":""))))!=='' ?
		('
				' . $t1 . (	'| <a href="' .
	interdire_scripts(eval('return '.'_DIR_RESTREINT_ABS'.';')) .
	'">' .
	_T('public|spip|ecrire:espace_prive') .
	'</a>')) :
		'') .
' |
				<a rel="contents" href="' .
interdire_scripts(generer_url_public('plan', '')) .
'">' .
_T('public|spip|ecrire:plan_site') .
'</a> |
				<a href="' .
interdire_scripts(generer_url_public('backend', '')) .
'" rel="alternate" title="' .
_T('public|spip|ecrire:syndiquer_site') .
'"><img src="' .
interdire_scripts(find_in_path('feed.png')) .
'" alt="' .
_T('public|spip|ecrire:icone_suivi_activite') .
'" width="16" height="16" />&nbsp;RSS&nbsp;2.0</a>
		</div>');

	return analyse_resultat_skel('html_9af91ca9e089bdbc3ae9a5ccc8673c25', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/inclure/pied.html');
}
?>