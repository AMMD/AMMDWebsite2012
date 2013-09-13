<?php

/*
 * Squelette : ../prive/formulaires/dateur/jquery.dateur.js.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:48:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/dateur/jquery.dateur.js.html
// Temps de compilation total: 0.646 ms
//

function html_eaa0e6e4c9374cf27691571179d293b3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
if (!jQuery.fn.datepicker){
' .
(($c = find_in_path('prive/javascript/ui/jquery.ui.core.js')) ? spip_file_get_contents($c) : "") .
(($c = find_in_path('prive/javascript/ui/jquery.ui.widget.js')) ? spip_file_get_contents($c) : "") .
(($c = find_in_path('prive/javascript/ui/jquery.ui.datepicker.js')) ? spip_file_get_contents($c) : "") .
'}
if (!jQuery.fn.timePicker){
' .
(($c = find_in_path('prive/formulaires/dateur/jquery.time_picker.js')) ? spip_file_get_contents($c) : "") .
'}');

	return analyse_resultat_skel('html_eaa0e6e4c9374cf27691571179d293b3', $Cache, $page, '../prive/formulaires/dateur/jquery.dateur.js.html');
}
?>