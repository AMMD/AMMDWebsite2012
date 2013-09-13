<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/rubrique.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Wed, 01 May 2013 21:35:30 GMT
 * Boucles :   _principale_rubrique
 */ 

function BOUCLE_principale_rubriquehtml_c1d9c1ca41105c8a1a2fc94c88eba766(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_principale_rubrique';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_secteur",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/z/v1.7.21/rubrique.html','html_c1d9c1ca41105c8a1a2fc94c88eba766','_principale_rubrique',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('structure') . ', array_merge('.var_export($Pile[0],1).',array(\'id_secteur\' => ' . argumenter_squelette($Pile[$SP]['id_secteur']) . ',
	\'type\' => ' . argumenter_squelette('rubrique') . ',
	\'composition\' => ' . argumenter_squelette(interdire_scripts(@$Pile[0]['composition'])) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/rubrique.html\',\'html_c1d9c1ca41105c8a1a2fc94c88eba766\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/z/v1.7.21/rubrique.html
// Temps de compilation total: 3.619 ms
//

function html_c1d9c1ca41105c8a1a2fc94c88eba766($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_principale_rubriquehtml_c1d9c1ca41105c8a1a2fc94c88eba766($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_c1d9c1ca41105c8a1a2fc94c88eba766', $Cache, $page, 'plugins/auto/z/v1.7.21/rubrique.html');
}
?>