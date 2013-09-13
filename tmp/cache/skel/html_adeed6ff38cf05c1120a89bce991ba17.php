<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/login.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Tue, 16 Apr 2013 12:32:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/login.html
// Temps de compilation total: 0.576 ms
//

function html_adeed6ff38cf05c1120a89bce991ba17($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('structure') . ', array_merge('.var_export($Pile[0],1).',array(\'type\' => ' . argumenter_squelette('page') . ',
	\'composition\' => ' . argumenter_squelette('login') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/login.html\',\'html_adeed6ff38cf05c1120a89bce991ba17\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>


');

	return analyse_resultat_skel('html_adeed6ff38cf05c1120a89bce991ba17', $Cache, $page, 'plugins/auto/z/v1.7.21/login.html');
}
?>