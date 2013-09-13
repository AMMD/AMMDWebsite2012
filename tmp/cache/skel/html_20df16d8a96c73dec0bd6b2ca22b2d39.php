<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/sommaire.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/z/v1.7.21/sommaire.html
// Temps de compilation total: 0.623 ms
//

function html_20df16d8a96c73dec0bd6b2ca22b2d39($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('structure') . ', array_merge('.var_export($Pile[0],1).',array(\'type\' => ' . argumenter_squelette('page') . ',
	\'composition\' => ' . argumenter_squelette('sommaire') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/sommaire.html\',\'html_20df16d8a96c73dec0bd6b2ca22b2d39\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>


');

	return analyse_resultat_skel('html_20df16d8a96c73dec0bd6b2ca22b2d39', $Cache, $page, 'plugins/auto/z/v1.7.21/sommaire.html');
}
?>