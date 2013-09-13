<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html
 * Date :      Wed, 23 Mar 2011 09:00:28 GMT
 * Compile :   Thu, 18 Apr 2013 10:46:00 GMT
 * Boucles :   _decompte, _doc, _doc2, _forums_boucle, _forums_fils, _forums
 */ 

function BOUCLE_decomptehtml_bbda144b53f8ea16cc60cbca4868cdad(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_breve']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_syndic']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'forum';
		$command['id'] = '_decompte';
		$command['from'] = array('forum' => 'spip_forum');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("count(*)");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('forum.statut','publie,prop','publie',''), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('forum.id_objet',sql_quote($in)) : 
			array('=', 'forum.id_objet', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : 
			array('=', 'forum.objet', sql_quote('rubrique'))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('forum.id_objet',sql_quote($in1)) : 
			array('=', 'forum.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : 
			array('=', 'forum.objet', sql_quote('article'))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : ((is_array(@$Pile[0]['id_breve'])) ? sql_in('forum.id_objet',sql_quote($in2)) : 
			array('=', 'forum.id_objet', sql_quote(@$Pile[0]['id_breve'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : 
			array('=', 'forum.objet', sql_quote('breve'))), (!(is_array(@$Pile[0]['id_syndic'])?count(@$Pile[0]['id_syndic']):strlen(@$Pile[0]['id_syndic'])) ? '' : ((is_array(@$Pile[0]['id_syndic'])) ? sql_in('forum.id_objet',sql_quote($in3)) : 
			array('=', 'forum.id_objet', sql_quote(@$Pile[0]['id_syndic'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_syndic'])?count(@$Pile[0]['id_syndic']):strlen(@$Pile[0]['id_syndic'])) ? '' : 
			array('=', 'forum.objet', sql_quote('site'))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html','html_bbda144b53f8ea16cc60cbca4868cdad','_decompte',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_decompte']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	return $t0;
}


function BOUCLE_dochtml_bbda144b53f8ea16cc60cbca4868cdad(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_doc';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.extension",
		"documents.id_document");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_forum'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('forum')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html','html_bbda144b53f8ea16cc60cbca4868cdad','_doc',39,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
									' .
interdire_scripts((match($Pile[$SP]['extension'],'^(gif|jpg|png)$') ? (	filtrer('image_graver',filtrer('image_reduire',
	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/emb', array('lang' => $GLOBALS["spip_lang"] ,'id_document'=>$Pile[$SP]['id_document'],'id'=>$Pile[$SP]['id_document'],'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html','html_bbda144b53f8ea16cc60cbca4868cdad','_doc',41,$GLOBALS['spip_lang']), 'trim'=>true), ''))
,'300')) .
	'
									'):(	quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))), '', '', 0, 0, '') .
	'
									'))) .
'
									');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_doc2html_bbda144b53f8ea16cc60cbca4868cdad(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_doc2';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.extension",
		"documents.id_document");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_forum'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('forum')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html','html_bbda144b53f8ea16cc60cbca4868cdad','_doc2',80,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
											' .
interdire_scripts((match($Pile[$SP]['extension'],'^(gif|jpg|png)$') ? (	filtrer('image_graver',filtrer('image_reduire',
	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/emb', array('lang' => $GLOBALS["spip_lang"] ,'id_document'=>$Pile[$SP]['id_document'],'id'=>$Pile[$SP]['id_document'],'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html','html_bbda144b53f8ea16cc60cbca4868cdad','_doc2',82,$GLOBALS['spip_lang']), 'trim'=>true), ''))
,'300')) .
	'
											'):(	quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))), '', '', 0, 0, '') .
	'
											'))) .
'
											');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_forums_bouclehtml_bbda144b53f8ea16cc60cbca4868cdad(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_forums_fils']) ? $Numrows['_forums_fils'] : array());
	$t0 = (($t1 = BOUCLE_forums_filshtml_bbda144b53f8ea16cc60cbca4868cdad($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				<ul class=\'sous-forum\'>
					' . $t1 . '
				</ul>
				') :
		'');
	$Numrows['_forums_fils'] = ($save_numrows);
	return $t0;
}


function BOUCLE_forums_filshtml_bbda144b53f8ea16cc60cbca4868cdad(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'forum';
		$command['id'] = '_forums_fils';
		$command['from'] = array('forum' => 'spip_forum');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("forum.id_forum",
		"forum.date_heure",
		"forum.titre",
		"forum.id_auteur",
		"forum.auteur AS nom",
		"forum.date_heure AS date",
		"forum.texte",
		"forum.url_site",
		"forum.nom_site");
		$command['orderby'] = array('forum.date_heure');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('forum.statut','publie,prop','publie',''), 
			array('=', 'forum.id_parent', sql_quote($Pile[$SP]['id_forum'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html','html_bbda144b53f8ea16cc60cbca4868cdad','_forums_fils',55,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_forums_fils']['compteur_boucle'] = 0;
	
	$l1 = _T('public|spip|ecrire:voir_en_ligne');
	$l2 = _T('public|spip|ecrire:repondre_message');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_forums_fils']['compteur_boucle']++;
		$t0 .= (
'
					<li class="comment even thread-even depth-1 forum-fil comment' .
(($t1 = strval(alterner($Numrows['_forums_fils']['compteur_boucle'],'odd','even')))!=='' ?
		(' ' . $t1) :
		'') .
((($Numrows['_forums_fils']['compteur_boucle'] == '1'))  ?
		(' ' . ' ' . 'first') :
		'') .
(calcul_exposer($Pile[$SP]['id_forum'], 'id_forum', $Pile[0], 0, 'id_forum', '')  ?
		(' ' . 'on') :
		'') .
'">
						<div class="padd-comment">
							<div class="padd-comment-details">
								<strong class="forum-titre"><a href="#forum' .
$Pile[$SP]['id_forum'] .
'" name="forum' .
$Pile[$SP]['id_forum'] .
'" id="forum' .
$Pile[$SP]['id_forum'] .
'" class="ancre permalink comment-number">' .
interdire_scripts(safehtml(typo(interdit_html($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a></strong>
								<div class="padd-comment-author">
									<div class="padd-comment-avatar">
										' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'80')) .
'
									</div>
									' .
(($t1 = strval(interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'<span class="padd-author ">') . $t1 . '</span>') :
		'') .
'
									' .
(($t1 = strval(interdire_scripts(((normaliser_date($Pile[$SP]['date'])) ?' ' :''))))!=='' ?
		($t1 . (	'<span class="padd-time">
										' .
	interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))) .
	'
										' .
	(($t2 = strval(interdire_scripts(heures(normaliser_date($Pile[$SP]['date'])))))!=='' ?
			('<br />' . $t2) :
			'') .
	(($t2 = strval(interdire_scripts(minutes(normaliser_date($Pile[$SP]['date'])))))!=='' ?
			(':' . $t2) :
			'') .
	'
										</span>
									')) :
		'') .
'
								</div>
								<div class="padd-comment-details-interior-sous-forum">
									<div class="padd-comment-details-interior-wrapper">
										<div class="cadre-msg-sous-forum">
											<div class="cadre-msg-sous-forum-bg"></div>
											' .
(($t1 = strval(interdire_scripts(lignes_longues(safehtml(propre(interdit_html($Pile[$SP]['texte']), $connect, $Pile[0]))))))!=='' ?
		((	'<div class="comment-texte">') . $t1 . '</div>') :
		'') .
'
											' .
(($t1 = strval(interdire_scripts(lignes_longues(safehtml(safehtml(propre(interdit_html(calculer_notes()), $connect, $Pile[0])))))))!=='' ?
		('<div class="comment-notes">' . $t1 . '</div>') :
		'') .
'
											' .
(($t1 = strval(safehtml(vider_url(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))))!=='' ?
		((	'<p class="comment-external-link hyperlien">' .
	$l1 .
	' : <a href="') . $t1 . (	'" class="spip_out">' .
	interdire_scripts(((($a = safehtml(typo(interdit_html(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false))), "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : couper(safehtml(vider_url(calculer_url($Pile[$SP]['url_site'],'','url', $connect))),'80','...'))) .
	'</a></p>')) :
		'') .
'
											' .
BOUCLE_doc2html_bbda144b53f8ea16cc60cbca4868cdad($Cache, $Pile, $doublons, $Numrows, $SP) .
'
										</div>
									</div>
								</div>
								' .
(($t1 = strval(filtre_url_reponse_forum(htmlspecialchars(
		// refus des forums ?
		(quete_accepter_forum(@$Pile[0]['id_article'])=="non" OR
		($GLOBALS["meta"]["forums_publics"] == "non"
		AND quete_accepter_forum(@$Pile[0]['id_article']) == ""))
		? "" : // sinon:
		(lang_parametres_forum(calcul_parametres_forum($Pile[0],$Pile[$SP]['id_forum'],forums,$Pile[$SP]['id_forum']),@$Pile[0]['lang']).
	(($lien = (_request("retour") ? _request("retour") : str_replace("&amp;", "&", ''))) ? "&retour=".rawurlencode($lien) : ""))))))!=='' ?
		('<p class="comment-reply repondre"><a href="' . $t1 . (	'" rel="noindex nofollow">' .
	$l2 .
	'</a></p>')) :
		'') .
'
								<div class="padd-clear"></div>
							</div>
						</div>

						' .
BOUCLE_forums_bouclehtml_bbda144b53f8ea16cc60cbca4868cdad($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					</li>
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_forumshtml_bbda144b53f8ea16cc60cbca4868cdad(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_breve']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_syndic']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'forum';
		$command['id'] = '_forums';
		$command['from'] = array('forum' => 'spip_forum');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("forum.id_forum",
		"forum.date_heure",
		"forum.titre",
		"forum.id_auteur",
		"forum.auteur AS nom",
		"forum.date_heure AS date",
		"forum.texte",
		"forum.url_site",
		"forum.nom_site");
		$command['orderby'] = array('forum.date_heure');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('forum.statut','publie,prop','publie',''), 
			array('=', 'forum.id_parent', 0), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('forum.id_objet',sql_quote($in)) : 
			array('=', 'forum.id_objet', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : 
			array('=', 'forum.objet', sql_quote('rubrique'))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('forum.id_objet',sql_quote($in1)) : 
			array('=', 'forum.id_objet', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : 
			array('=', 'forum.objet', sql_quote('article'))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : ((is_array(@$Pile[0]['id_breve'])) ? sql_in('forum.id_objet',sql_quote($in2)) : 
			array('=', 'forum.id_objet', sql_quote(@$Pile[0]['id_breve'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : 
			array('=', 'forum.objet', sql_quote('breve'))), (!(is_array(@$Pile[0]['id_syndic'])?count(@$Pile[0]['id_syndic']):strlen(@$Pile[0]['id_syndic'])) ? '' : ((is_array(@$Pile[0]['id_syndic'])) ? sql_in('forum.id_objet',sql_quote($in3)) : 
			array('=', 'forum.id_objet', sql_quote(@$Pile[0]['id_syndic'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_syndic'])?count(@$Pile[0]['id_syndic']):strlen(@$Pile[0]['id_syndic'])) ? '' : 
			array('=', 'forum.objet', sql_quote('site'))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html','html_bbda144b53f8ea16cc60cbca4868cdad','_forums',12,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_forums']['compteur_boucle'] = 0;
	
	$l1 = _T('public|spip|ecrire:voir_en_ligne');
	$l2 = _T('public|spip|ecrire:repondre_message');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_forums']['compteur_boucle']++;
		$t0 .= (
'			
			<li class="comment even thread-even depth-1 forum-fil comment' .
(($t1 = strval(alterner($Numrows['_forums']['compteur_boucle'],'odd','even')))!=='' ?
		(' ' . $t1) :
		'') .
((($Numrows['_forums']['compteur_boucle'] == '1'))  ?
		(' ' . ' ' . 'first') :
		'') .
(calcul_exposer($Pile[$SP]['id_forum'], 'id_forum', $Pile[0], 0, 'id_forum', '')  ?
		(' ' . 'on') :
		'') .
'">
				<div class="padd-comment">
					<div class="padd-comment-details">
						<strong class="forum-titre"><a href="#forum' .
$Pile[$SP]['id_forum'] .
'" name="forum' .
$Pile[$SP]['id_forum'] .
'" id="forum' .
$Pile[$SP]['id_forum'] .
'" class="ancre permalink comment-number">' .
interdire_scripts(safehtml(typo(interdit_html($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'</a></strong>
						<div class="padd-comment-author">
							<div class="padd-comment-avatar">
								' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_auteur', 'ON', $Pile[$SP]['id_auteur'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'80')) .
'
							</div>
							' .
(($t1 = strval(interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'<span class="padd-author ">') . $t1 . '</span>') :
		'') .
'
							' .
(($t1 = strval(interdire_scripts(((normaliser_date($Pile[$SP]['date'])) ?' ' :''))))!=='' ?
		($t1 . (	'<span class="padd-time">
								' .
	interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))) .
	'
								' .
	(($t2 = strval(interdire_scripts(heures(normaliser_date($Pile[$SP]['date'])))))!=='' ?
			('<br />' . $t2) :
			'') .
	(($t2 = strval(interdire_scripts(minutes(normaliser_date($Pile[$SP]['date'])))))!=='' ?
			(':' . $t2) :
			'') .
	'
								</span>
							')) :
		'') .
'
						</div>
						<div class="padd-comment-details-interior">
							<div class="padd-tb"></div>
							<div class="padd-comment-details-interior-wrapper">
								<div class="cadre-msg-sous-forum">
									<div class="cadre-msg-sous-forum-bg"></div>
									' .
(($t1 = strval(interdire_scripts(lignes_longues(safehtml(propre(interdit_html($Pile[$SP]['texte']), $connect, $Pile[0]))))))!=='' ?
		((	'<div class="comment-texte">') . $t1 . '</div>') :
		'') .
'
									' .
(($t1 = strval(interdire_scripts(lignes_longues(safehtml(safehtml(propre(interdit_html(calculer_notes()), $connect, $Pile[0])))))))!=='' ?
		('<div class="comment-notes">' . $t1 . '</div>') :
		'') .
'
									' .
(($t1 = strval(safehtml(vider_url(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))))!=='' ?
		((	'<p class="comment-external-link hyperlien">' .
	$l1 .
	' : <a href="') . $t1 . (	'" class="spip_out">' .
	interdire_scripts(((($a = safehtml(typo(interdit_html(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false))), "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : couper(safehtml(vider_url(calculer_url($Pile[$SP]['url_site'],'','url', $connect))),'80','...'))) .
	'</a></p>')) :
		'') .
'
									' .
BOUCLE_dochtml_bbda144b53f8ea16cc60cbca4868cdad($Cache, $Pile, $doublons, $Numrows, $SP) .
'
								</div>
							</div>
							<div class="padd-tb"></div>
						</div>
						' .
(($t1 = strval(filtre_url_reponse_forum(htmlspecialchars(
		// refus des forums ?
		(quete_accepter_forum(@$Pile[0]['id_article'])=="non" OR
		($GLOBALS["meta"]["forums_publics"] == "non"
		AND quete_accepter_forum(@$Pile[0]['id_article']) == ""))
		? "" : // sinon:
		(lang_parametres_forum(calcul_parametres_forum($Pile[0],$Pile[$SP]['id_forum'],forums,$Pile[$SP]['id_forum']),@$Pile[0]['lang']).
	(($lien = (_request("retour") ? _request("retour") : str_replace("&amp;", "&", ''))) ? "&retour=".rawurlencode($lien) : ""))))))!=='' ?
		('<p class="comment-reply repondre"><a href="' . $t1 . (	'" rel="noindex nofollow">' .
	$l2 .
	'</a></p>')) :
		'') .
'
						<div class="padd-clear"></div>
					</div>
				</div>
				
				' .
(($t1 = BOUCLE_forums_filshtml_bbda144b53f8ea16cc60cbca4868cdad($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				<ul class=\'sous-forum\'>
					' . $t1 . '
				</ul>
				') :
		'') .
'
				
			</li>
			');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html
// Temps de compilation total: 34.212 ms
//

function html_bbda144b53f8ea16cc60cbca4868cdad($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(htmlspecialchars(
		// refus des forums ?
		(quete_accepter_forum(@$Pile[0]['id_article'])=="non" OR
		($GLOBALS["meta"]["forums_publics"] == "non"
		AND quete_accepter_forum(@$Pile[0]['id_article']) == ""))
		? "" : // sinon:
		(lang_parametres_forum(calcul_parametres_forum($Pile[0],null,null,null),@$Pile[0]['lang']).
	(($lien = (_request("retour") ? _request("retour") : str_replace("&amp;", "&", ''))) ? "&retour=".rawurlencode($lien) : ""))) ? '':'') .
'

<div class="comments" id="comments">
	<div class="padd-interior padd-post-box-comments-interior">
		
		' .
BOUCLE_decomptehtml_bbda144b53f8ea16cc60cbca4868cdad($Cache, $Pile, $doublons, $Numrows, $SP)
. (($t2 = strval((($Numrows['_decompte']['total'] > '0') ? $Numrows['_decompte']['total']:'')))!=='' ?
			('<h4 class="no-border">' . $t2 . (	'
		' .
		(($Numrows['_decompte']['total'] == '1') ? _T('public|spip|ecrire:message'):_T('public|spip|ecrire:messages_forum')) .
		'</h4>')) :
			'') .
'
		
		
		' .
(($t1 = BOUCLE_forumshtml_bbda144b53f8ea16cc60cbca4868cdad($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
		<ul class="padd-comments-list">
		
			' . $t1 . '

		</ul>
		') :
		'') .
'
	</div>
</div>');

	return analyse_resultat_skel('html_bbda144b53f8ea16cc60cbca4868cdad', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/inclure/forum.html');
}
?>