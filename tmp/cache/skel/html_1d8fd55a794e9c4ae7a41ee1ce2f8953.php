<?php

/*
 * Squelette : plugins/auto/videos/v0.10.2/modeles/video.html
 * Date :      Fri, 22 Mar 2013 10:00:18 GMT
 * Compile :   Tue, 16 Apr 2013 09:56:30 GMT
 * Boucles :   _LaVideo
 */ 

function BOUCLE_LaVideohtml_1d8fd55a794e9c4ae7a41ee1ce2f8953(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_LaVideo';
		$command['from'] = array('documents' => 'spip_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.largeur",
		"documents.hauteur",
		"documents.fichier",
		"documents.id_document",
		"documents.extension",
		"documents.titre",
		"documents.descriptif");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.id_document', sql_quote(table_valeur($Pile["vars"], (string)'document', null),'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/videos/v0.10.2/modeles/video.html','html_1d8fd55a794e9c4ae7a41ee1ce2f8953','_LaVideo',29,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'

' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['largeur'] > '0')) ?' ' :''))))!=='' ?
		($t1 . (	' ' .
	vide($Pile['vars'][(string)'larg'] = interdire_scripts($Pile[$SP]['largeur'])))) :
		'') .
'
' .
vide($Pile['vars'][(string)'largeur'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'largeur', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'width', null), sinon(table_valeur($Pile["vars"], (string)'larg', null), interdire_scripts((include_spip('inc/config')?lire_config('videos/largeur','560',false):'')))),true))),true))) .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['hauteur'] > '0')) ?' ' :''))))!=='' ?
		($t1 . (	' ' .
	vide($Pile['vars'][(string)'haut'] = interdire_scripts($Pile[$SP]['hauteur'])))) :
		'') .
'
' .
vide($Pile['vars'][(string)'hauteur'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'hauteur', null), interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'height', null), sinon(table_valeur($Pile["vars"], (string)'haut', null), interdire_scripts((include_spip('inc/config')?lire_config('videos/hauteur','315',false):'')))),true))),true))) .
vide($Pile['vars'][(string)'fichier'] = interdire_scripts($Pile[$SP]['fichier'])) .
'
' .
(((table_valeur($Pile["vars"], (string)'liste_definition', null) == 'oui'))  ?
		(' ' . (	'
<dl class=\'spip_document_' .
	$Pile[$SP]['id_document'] .
	' spip_documents' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'align', null),true))))!=='' ?
			(' spip_documents_' . $t2) :
			'') .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true))))!=='' ?
			(' ' . $t2) :
			'') .
	' spip_lien_ok\'' .
	(($t2 = strval(interdire_scripts(match(entites_html(table_valeur(@$Pile[0], (string)'align', null),true),'left|right'))))!=='' ?
			(' style=\'float:' . $t2 . ';\'') :
			'') .
	'>
<dt class=\'spip_doc_titre\'>
')) :
		'') .
'


	' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['extension'] == 'dist_daily')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars'][(string)'videosLiees'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'videosLiees', null), interdire_scripts((include_spip('inc/config')?lire_config('videos/videosLiees','0',false):''))),true))) .
	(((table_valeur($Pile["vars"], (string)'responsive', null) == 'oui'))  ?
			(' ' . '<div class="capsule-video"><div class="mini_capsule-video">') :
			'') .
	'
			<iframe frameborder="0" width="' .
	table_valeur($Pile["vars"], (string)'largeur', null) .
	'" height="' .
	table_valeur($Pile["vars"], (string)'hauteur', null) .
	'" src="http://www.dailymotion.com/embed/video/' .
	table_valeur($Pile["vars"], (string)'fichier', null) .
	'?width=' .
	table_valeur($Pile["vars"], (string)'largeur', null) .
	'&amp;theme=none&amp;foreground=%23F7FFFD&amp;highlight=%23FFC300&amp;background=%23171D1B&amp;start=' .
	(($t2 = strval(interdire_scripts(urlencode(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))))!=='' ?
			('&amp;animatedTitle=' . $t2) :
			'') .
	'&amp;iframe=1&amp;additionalInfos=0&amp;autoPlay=0&amp;hideInfos=0&amp;wmode=' .
	table_valeur($Pile["vars"], (string)'wmode', null) .
	'"></iframe>
		' .
	(((table_valeur($Pile["vars"], (string)'responsive', null) == 'oui'))  ?
			(' ' . '</div></div> <!-- .capsule-video .mini_capsule-video -->') :
			'') .
	'
	')) :
		'') .
'

	' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['extension'] == 'dist_vimeo')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	(((table_valeur($Pile["vars"], (string)'responsive', null) == 'oui'))  ?
			(' ' . '<div class="capsule-video"><div class="mini_capsule-video">') :
			'') .
	'
			<iframe src="http://player.vimeo.com/video/' .
	table_valeur($Pile["vars"], (string)'fichier', null) .
	'?byline=0" width="' .
	table_valeur($Pile["vars"], (string)'largeur', null) .
	'" height="' .
	table_valeur($Pile["vars"], (string)'hauteur', null) .
	'" frameborder="0"></iframe>
		' .
	(((table_valeur($Pile["vars"], (string)'responsive', null) == 'oui'))  ?
			(' ' . '</div></div> <!-- .capsule-video .mini_capsule-video -->') :
			'') .
	'
	')) :
		'') .
'
	


	' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['extension'] == 'dist_youtu')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	(((table_valeur($Pile["vars"], (string)'responsive', null) == 'oui'))  ?
			(' ' . '<div class="capsule-video"><div class="mini_capsule-video">') :
			'') .
	'
			<iframe width="' .
	table_valeur($Pile["vars"], (string)'largeur', null) .
	'" height="' .
	table_valeur($Pile["vars"], (string)'hauteur', null) .
	'" src="http://www.youtube.com/embed/' .
	table_valeur($Pile["vars"], (string)'fichier', null) .
	'?hd=1&amp;wmode=' .
	table_valeur($Pile["vars"], (string)'wmode', null) .
	'" frameborder="0" allowfullscreen class="youtube-player"></iframe>
		' .
	(((table_valeur($Pile["vars"], (string)'responsive', null) == 'oui'))  ?
			(' ' . '</div></div> <!-- .capsule-video .mini_capsule-video -->') :
			'') .
	'
	')) :
		'') .
'



	' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['extension'],table_valeur($Pile["vars"], (string)'lesExtensionsHtml5', null))) ?' ' :''))))!=='' ?
		($t1 . (	'
	<div class="playerVideo">
		<section>
		<figure>
			' .
	vide($Pile['vars'][(string)'nomVideo'] = interdire_scripts(replace(basename(get_spip_doc($Pile[$SP]['fichier'])),(	'\\.' .
			interdire_scripts($Pile[$SP]['extension'])),''))) .
	'
			' .
	(($t2 = strval(interdire_scripts(((table_valeur(pathinfo(basename(get_spip_doc($Pile[$SP]['fichier']))),'filename')) ?' ' :''))))!=='' ?
			($t2 . (	' ' .
		vide($Pile['vars'][(string)'nomVideo'] = interdire_scripts(table_valeur(pathinfo(basename(get_spip_doc($Pile[$SP]['fichier']))),'filename'))) .
		' ')) :
			'') .
	'
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('noisettes/balise_video_html5') . ', array_merge('.var_export($Pile[0],1).',array(\'nomVideo\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'nomVideo', null)) . ',
	\'largeur\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'largeur', null)) . ',
	\'hauteur\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'hauteur', null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/videos/v0.10.2/modeles/video.html\',\'html_1d8fd55a794e9c4ae7a41ee1ce2f8953\',\'\',56,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
	(((table_valeur($Pile["vars"], (string)'titre_descriptif', null) == 'oui'))  ?
			(' ' . (	'
			<figcaption>
				<p><strong>' .
		interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
		'</strong></p> 
				' .
		interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])) .
		'
			</figcaption>
			')) :
			'') .
	'
		</figure>
		</section>
	</div> <!-- Fermeture de ID : playerVideo -->
	')) :
		'') .
'
	
	

	' .
(($t1 = strval(interdire_scripts(((in_array($Pile[$SP]['extension'],table_valeur($Pile["vars"], (string)'lesExtensionsHtml5', null))) ?'' :' '))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(((match($Pile[$SP]['extension'],'dist_')) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		recuperer_fond( 'medias/modeles/video' , array_merge($Pile[0],array('id' => table_valeur($Pile["vars"], (string)'document', null) ,
	'emb' => ' ' )), array('compil'=>array('plugins/auto/videos/v0.10.2/modeles/video.html','html_1d8fd55a794e9c4ae7a41ee1ce2f8953','_LaVideo',72,$GLOBALS['spip_lang'])), '') .
		'
	')) :
			''))) :
		'') .
'


' .
(((table_valeur($Pile["vars"], (string)'liste_definition', null) == 'oui'))  ?
		(' ' . (	'
	' .
	(((table_valeur($Pile["vars"], (string)'titre_descriptif', null) == 'oui'))  ?
			(' ' . (	'
	' .
		(($t3 = strval(interdire_scripts(((in_array($Pile[$SP]['extension'],table_valeur($Pile["vars"], (string)'lesExtensionsHtml5', null))) ?'' :' '))))!=='' ?
				($t3 . (	'
	' .
			(($t4 = strval(interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))!=='' ?
					('<br /><strong>' . $t4 . '</strong>') :
					'') .
			'
	')) :
				''))) :
			'') .
	'
</dt>
	' .
	(((table_valeur($Pile["vars"], (string)'titre_descriptif', null) == 'oui'))  ?
			(' ' . (	'
	' .
		(($t3 = strval(interdire_scripts(((in_array($Pile[$SP]['extension'],table_valeur($Pile["vars"], (string)'lesExtensionsHtml5', null))) ?'' :' '))))!=='' ?
				($t3 . (	'
	' .
			(($t4 = strval(interdire_scripts(PtoBR(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
					((	'<dd class=\'spip_doc_descriptif\'' .
				(($t5 = strval(table_valeur($Pile["vars"], (string)'largeur', null)))!=='' ?
						(' style=\'width:' . $t5 . '\'') :
						'') .
				'>') . $t4 . '</dd>') :
					'') .
			'
	')) :
				''))) :
			'') .
	'
</dl>
')) :
		'') .
'
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/videos/v0.10.2/modeles/video.html
// Temps de compilation total: 27.217 ms
//

function html_1d8fd55a794e9c4ae7a41ee1ce2f8953($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][(string)'document'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'document', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(@$Pile[0]['id'])))) .
vide($Pile['vars'][(string)'titre_descriptif'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titre_descriptif', null), interdire_scripts((include_spip('inc/config')?lire_config('videos/titre_descriptif','non',false):''))),true))) .
vide($Pile['vars'][(string)'wmode'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'wmode', null), interdire_scripts((include_spip('inc/config')?lire_config('videos/wmode','opaque',false):''))),true))) .
vide($Pile['vars'][(string)'responsive'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'responsive', null), interdire_scripts((include_spip('inc/config')?lire_config('videos/responsive','oui',false):''))),true))) .
vide($Pile['vars'][(string)'liste_definition'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'liste_definition', null), interdire_scripts((include_spip('inc/config')?lire_config('videos/liste_definition','non',false):''))),true))) .
'
' .
vide($Pile['vars'][(string)'lesExtensions'] = array('1' => 'dist_daily', '2' => 'dist_youtu', '3' => 'dist_vimeo
	')) .
'
' .
vide($Pile['vars'][(string)'lesExtensionsHtml5'] = array('1' => 'm4v', '2' => 'mp4', '3' => 'webm', '4' => 'ogv', '5' => 'mkv
	')) .
'
' .
BOUCLE_LaVideohtml_1d8fd55a794e9c4ae7a41ee1ce2f8953($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_1d8fd55a794e9c4ae7a41ee1ce2f8953', $Cache, $page, 'plugins/auto/videos/v0.10.2/modeles/video.html');
}
?>