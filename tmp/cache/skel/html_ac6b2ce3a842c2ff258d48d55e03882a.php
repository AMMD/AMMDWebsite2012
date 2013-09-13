<?php

/*
 * Squelette : plugins/auto/z/v1.7.21/article.html
 * Date :      Wed, 08 Jun 2011 15:00:26 GMT
 * Compile :   Thu, 18 Apr 2013 10:45:59 GMT
 * Boucles :   _principale_article
 */ 

function BOUCLE_principale_articlehtml_ac6b2ce3a842c2ff258d48d55e03882a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_principale_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_rubrique",
		"articles.id_secteur",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa','publie',''), 
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/z/v1.7.21/article.html','html_ac6b2ce3a842c2ff258d48d55e03882a','_principale_article',1,$GLOBALS['spip_lang'])
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

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('structure') . ', array_merge('.var_export($Pile[0],1).',array(\'id_rubrique\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_rubrique', null), $Pile[$SP]['id_rubrique']),true))) . ',
	\'id_secteur\' => ' . argumenter_squelette($Pile[$SP]['id_secteur']) . ',
	\'type\' => ' . argumenter_squelette('article') . ',
	\'composition\' => ' . argumenter_squelette(interdire_scripts(@$Pile[0]['composition'])) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/z/v1.7.21/article.html\',\'html_ac6b2ce3a842c2ff258d48d55e03882a\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/z/v1.7.21/article.html
// Temps de compilation total: 4.238 ms
//

function html_ac6b2ce3a842c2ff258d48d55e03882a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_principale_articlehtml_ac6b2ce3a842c2ff258d48d55e03882a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_ac6b2ce3a842c2ff258d48d55e03882a', $Cache, $page, 'plugins/auto/z/v1.7.21/article.html');
}
?>