<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/inclure/documents.html
 * Date :      Wed, 23 Mar 2011 09:00:28 GMT
 * Compile :   Wed, 01 May 2013 21:35:30 GMT
 * Boucles :   _documents_portfolio, _documents_joints
 */ 

function BOUCLE_documents_portfoliohtml_7d62152e1c27e076fa246cf6dd1a5131(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	$in2[]= 'png';
	$in2[]= 'jpg';
	$in2[]= 'gif';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents_portfolio';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_documents_liens','L3' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("0+documents.titre AS num",
		"documents.date",
		"documents.id_document",
		"documents.largeur",
		"documents.hauteur",
		"L3.mime_type",
		"documents.titre",
		"documents.fichier");
		$command['orderby'] = array('num', 'documents.date');
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','id_document'), 'L3' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('L1.id_objet',sql_quote($in)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : 
			array('=', 'L1.objet', sql_quote('article'))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L2.id_objet',sql_quote($in1)) : 
			array('=', 'L2.id_objet', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : 
			array('=', 'L2.objet', sql_quote('rubrique'))), 
			array('=', 'documents.mode', "'document'"), sql_in('documents.extension',sql_quote($in2)), 
			array('=', 'L1.vu', "'non'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/documents.html','html_7d62152e1c27e076fa246cf6dd1a5131','_documents_portfolio',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))))!=='' ?
		((	'
	
	' .
	vide($Pile['vars'][(string)'taille'] = '100') .
	vide($Pile['vars'][(string)'ratio_x'] = interdire_scripts(div($Pile[$SP]['largeur'],table_valeur($Pile["vars"], (string)'taille', null)))) .
	vide($Pile['vars'][(string)'ratio_y'] = interdire_scripts(div($Pile[$SP]['hauteur'],table_valeur($Pile["vars"], (string)'taille', null)))) .
	vide($Pile['vars'][(string)'ratio'] = ((table_valeur($Pile["vars"], (string)'ratio_x', null) <= table_valeur($Pile["vars"], (string)'ratio_y', null)) ? table_valeur($Pile["vars"], (string)'ratio_x', null):table_valeur($Pile["vars"], (string)'ratio_y', null))) .
	'<a href="') . $t1 . (	'"
		 type="' .
	interdire_scripts($Pile[$SP]['mime_type']) .
	'"
		 rel="documents_portfolio' .
	(($t2 = strval(@$Pile[0]['id_article']))!=='' ?
			('-a' . $t2) :
			'') .
	(($t2 = strval(@$Pile[0]['id_rubrique']))!=='' ?
			('-r' . $t2) :
			'') .
	'"
	' .
	(($t2 = strval(interdire_scripts(couper(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])),'80'))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>
		' .
	interdire_scripts(inserer_attribut(inserer_attribut(filtrer('image_graver', filtrer('image_recadre',filtrer('image_reduire_par',get_spip_doc($Pile[$SP]['fichier']),table_valeur($Pile["vars"], (string)'ratio', null)),table_valeur($Pile["vars"], (string)'taille', null),table_valeur($Pile["vars"], (string)'taille', null),'center')),'class','spip_logos'),'alt',interdire_scripts(couper(attribut_html(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])),'80')))) .
	'</a>
	')) :
		'');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_documents_jointshtml_7d62152e1c27e076fa246cf6dd1a5131(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	$in2[]= 'gif';
	$in2[]= 'jpg';
	$in2[]= 'png';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents_joints';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_documents_liens','L3' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("0+documents.titre AS num",
		"documents.date",
		"documents.id_document",
		"L3.mime_type",
		"documents.titre",
		"L3.titre AS type_document",
		"documents.taille",
		"documents.descriptif");
		$command['orderby'] = array('num', 'documents.date');
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','id_document'), 'L3' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('L1.id_objet',sql_quote($in)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : 
			array('=', 'L1.objet', sql_quote('article'))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L2.id_objet',sql_quote($in1)) : 
			array('=', 'L2.id_objet', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : 
			array('=', 'L2.objet', sql_quote('rubrique'))), sql_in('documents.extension',sql_quote($in2),'NOT'), 
			array('=', 'L1.vu', "'non'"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/documents.html','html_7d62152e1c27e076fa246cf6dd1a5131','_documents_joints',31,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:bouton_telecharger');
	$l2 = _T('public|spip|ecrire:info_document');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))))!=='' ?
		('
		<li class="item">
			<strong><a href="' . $t1 . (	'" title="' .
	$l1 .
	'" type="' .
	interdire_scripts($Pile[$SP]['mime_type']) .
	'">' .
	interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : $l2)) .
	'</a></strong>
			<span class="small">(<span>' .
	interdire_scripts($Pile[$SP]['type_document']) .
	(($t2 = strval(interdire_scripts(taille_en_octets($Pile[$SP]['taille']))))!=='' ?
			(' &ndash; ' . $t2) :
			'') .
	'</span>)</span>
			' .
	interdire_scripts(propre($Pile[$SP]['descriptif'], $connect, $Pile[0])) .
	'
		')) :
		'') .
'</li>
		');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/inclure/documents.html
// Temps de compilation total: 31.788 ms
//

function html_7d62152e1c27e076fa246cf6dd1a5131($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = BOUCLE_documents_portfoliohtml_7d62152e1c27e076fa246cf6dd1a5131($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="documents documents_portfolio">
	<div class="padd-post-box titre-sans-icone">
		<h3>' .
		_T('public|spip|ecrire:info_portfolio') .
		'</h3>
	</div>
	') . $t1 . '
</div>
') :
		'') .
'



' .
(($t1 = BOUCLE_documents_jointshtml_7d62152e1c27e076fa246cf6dd1a5131($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="liste documents documents_joints">
	<h2 class="h2">' .
		_T('public|spip|ecrire:titre_documents_joints') .
		'</h2>
	<ul class="liste-items">
		') . $t1 . '
	</ul>
	</div>
') :
		'') .
'
');

	return analyse_resultat_skel('html_7d62152e1c27e076fa246cf6dd1a5131', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/inclure/documents.html');
}
?>