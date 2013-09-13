<?php

/*
 * Squelette : plugins/auto/theme_maparaan/v1.0.1/inc-theme-copyleft.html
 * Date :      Wed, 08 Jun 2011 16:01:50 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/theme_maparaan/v1.0.1/inc-theme-copyleft.html
// Temps de compilation total: 0.241 ms
//

function html_2545b4b711eb864a725e046c83881ee2($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="copyleft">
' .
_T('zpip:conception_graphique_par') .
' <a href="http://www.paddsolutions.com/wordpress-theme-maparaan/" >Maparaan</a> 
/ <a href=\'http://www.paddsolutions.com/\'>Padd Solutions</a> ' .
_T('zpip:sous_licence') .
' <a href=\'http://www.gnu.org/licenses/gpl.html\'>GNU General Public License</a>
</div>
');

	return analyse_resultat_skel('html_2545b4b711eb864a725e046c83881ee2', $Cache, $page, 'plugins/auto/theme_maparaan/v1.0.1/inc-theme-copyleft.html');
}
?>