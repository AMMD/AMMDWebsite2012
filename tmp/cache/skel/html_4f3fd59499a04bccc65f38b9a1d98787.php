<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html
 * Date :      Tue, 17 May 2011 11:00:04 GMT
 * Compile :   Thu, 18 Apr 2013 10:46:00 GMT
 * Boucles :   _ariane, _contenu_article
 */ 

function BOUCLE_arianehtml_4f3fd59499a04bccc65f38b9a1d98787(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval($Pile[$SP]['id_rubrique'])))
		return '';
	$hierarchie = ",$id_rubrique";
	while ($id_rubrique = sql_getfetsel("id_parent","spip_rubriques","id_rubrique=" . $id_rubrique,"","","", "", $connect)) { 
		$hierarchie = ",$id_rubrique$hierarchie";
	}
	if (!$hierarchie) return "";
	$hierarchie = substr($hierarchie,1);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_ariane';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie)");
	$command['where'] = 
			array(
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html','html_4f3fd59499a04bccc65f38b9a1d98787','_ariane',4,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' &gt; <a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'">' .
interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80')) .
'</a>');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_contenu_articlehtml_4f3fd59499a04bccc65f38b9a1d98787(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_contenu_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.id_article",
		"articles.surtitre",
		"articles.date",
		"articles.soustitre",
		"articles.chapo",
		"articles.texte",
		"articles.url_site",
		"articles.nom_site",
		"articles.ps",
		"articles.lang",
		"articles.id_rubrique");
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
		array('plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html','html_4f3fd59499a04bccc65f38b9a1d98787','_contenu_article',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'


<p id="hierarchie"><a href="' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a>' .
BOUCLE_arianehtml_4f3fd59499a04bccc65f38b9a1d98787($Cache, $Pile, $doublons, $Numrows, $SP) .
(($t1 = strval(interdire_scripts(couper(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),'80'))))!=='' ?
		(' &gt; <strong class="on">' . $t1 . '</strong>') :
		'') .
'</p>


<div class="padd-post-item padd-post-item-single" id="post-' .
$Pile[$SP]['id_article'] .
'">
	<div class="padd-post-item-title cartouche">
		' .
vide($Pile['vars'][(string)'largeur'] = largeur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'hauteur'] = hauteur(
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')))) .
vide($Pile['vars'][(string)'taille'] = '80') .
vide($Pile['vars'][(string)'ratio_x'] = div(table_valeur($Pile["vars"], (string)'largeur', null),table_valeur($Pile["vars"], (string)'taille', null))) .
vide($Pile['vars'][(string)'ratio_y'] = div(table_valeur($Pile["vars"], (string)'hauteur', null),table_valeur($Pile["vars"], (string)'taille', null))) .
vide($Pile['vars'][(string)'ratio'] = ((table_valeur($Pile["vars"], (string)'ratio_x', null) <= table_valeur($Pile["vars"], (string)'ratio_y', null)) ? table_valeur($Pile["vars"], (string)'ratio_x', null):table_valeur($Pile["vars"], (string)'ratio_y', null))) .
'<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'" rel="bookmark" title="' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'">' .
filtrer('image_graver',filtrer('image_recadre',filtrer('image_reduire_par',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),table_valeur($Pile["vars"], (string)'ratio', null)),table_valeur($Pile["vars"], (string)'taille', null),table_valeur($Pile["vars"], (string)'taille', null))) .
'</a>	
		
		' .
(($t1 = strval(interdire_scripts(typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'<p class="surtitre">') . $t1 . '</p>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(affdate(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		((	'<div class="info-publi info-publi-article" title="' .
	interdire_scripts(affdate_heure(normaliser_date($Pile[$SP]['date']))) .
	'">') . $t1 . (	'<br />' .
	recuperer_fond('modeles/lesauteurs', array('id_article' => $Pile[$SP]['id_article']), array('trim'=>true, 'compil'=>array('plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html','html_4f3fd59499a04bccc65f38b9a1d98787','_contenu_article',18,$GLOBALS['spip_lang'])), '') .
	'</div>')) :
		'') .
'
		<h2><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))) .
'" rel="bookmark" title="' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h2>
		' .
(($t1 = strval(interdire_scripts(typo($Pile[$SP]['soustitre'], "TYPO", $connect, $Pile[0]))))!=='' ?
		((	'<p class="soustitre">') . $t1 . '</p>') :
		'') .
'
	</div>
	' .
(($t1 = strval(
	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/article_traductions', array('lang' => $GLOBALS["spip_lang"] ,'id_article'=>$Pile[$SP]['id_article'],'id'=>$Pile[$SP]['id_article'],'recurs'=>(++$recurs)), array('compil'=>array('plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html','html_4f3fd59499a04bccc65f38b9a1d98787','_contenu_article',0,$GLOBALS['spip_lang']), 'trim'=>true), ''))
))!=='' ?
		((	'<div class=\'padd-traductions\'>
		
		') . $t1 . '
	</div>') :
		'') .
'
	<div class="padd-post-item-entry">
		' .
(($t1 = strval(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['chapo'], $connect, $Pile[0]),'500','0')))))!=='' ?
		((	'<div class="chapo">') . $t1 . '</div>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['texte'], $connect, $Pile[0]),'500','0')))))!=='' ?
		((	'<div class="texte">') . $t1 . '</div>') :
		'') .
'
	</div>		
	' .
(($t1 = strval(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))!=='' ?
		((	'<p class="hyperlien">' .
	_T('public|spip|ecrire:voir_en_ligne') .
	' : <a href="') . $t1 . (	'" class="spip_out">' .
	interdire_scripts(((($a = typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : couper(calculer_url($Pile[$SP]['url_site'],'','url', $connect),'80','...'))) .
	'</a></p>')) :
		'') .
'

	' .
(($t1 = strval(interdire_scripts(filtrer('image_graver',filtrer('image_reduire',propre($Pile[$SP]['ps'], $connect, $Pile[0]),'500','0')))))!=='' ?
		((	'<div class="ps">
		<div class="padd-post-box titre-sans-icone">
			<h3>' .
	_T('public|spip|ecrire:info_ps') .
	'</h3>
		</div>
		<div class="surlignable">') . $t1 . '</div>
	</div>') :
		'') .
'
	
	
	' .
recuperer_fond( 'inclure/documents' , array('id_article' => $Pile[$SP]['id_article'] ), array('compil'=>array('plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html','html_4f3fd59499a04bccc65f38b9a1d98787','_contenu_article',23,$GLOBALS['spip_lang'])), '') .
'
	
	
	' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		((	'<div>
		<div class="padd-post-box titre-sans-icone surlignable">
			<h3>' .
	_T('public|spip|ecrire:info_notes') .
	'</h3>
		</div>
		<div class="surlignable">') . $t1 . '</div>
	</div>
	<div class="nettoyeur"></div>
	') :
		'') .
'
	
	' .
((quete_petitions($Pile[$SP]['id_article'],'articles','_contenu_article','', $Cache))  ?
		((	'
	<div class="padd-post-box padd-post-box-signature">
		<div class="padd-post-box-title">
			<h3>' .
	_T('maparaan:petition') .
	'</h3>
		</div>
		<div class="padd-post-box-interior">
			') . ' ' . (	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/petition') . ', array_merge('.var_export($Pile[0],1).',array(\'id_article\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html\',\'html_4f3fd59499a04bccc65f38b9a1d98787\',\'\',37,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
		</div>
	</div>
	')) :
		'') .
'
	
	
	' .
(($t1 = strval(interdire_scripts(((filtre_info_plugin_dist("socialtags", "est_actif")) ?' ' :''))))!=='' ?
		((	'<div class="padd-post-box padd-post-box-sb">
		<div class="padd-post-box-title">
			<h3>' .
	_T('maparaan:partager') .
	'</h3>
		</div>
		') . $t1 . (	' ' .
	recuperer_fond( 'noisettes/socialtags' , array('id_article' => $Pile[$SP]['id_article'] ), array('compil'=>array('plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html','html_4f3fd59499a04bccc65f38b9a1d98787','_contenu_article',44,$GLOBALS['spip_lang'])), '') .
	'
	</div>
	')) :
		'') .
'
	
	
	' .
(($t1 = strval(filtre_url_reponse_forum(htmlspecialchars(
		// refus des forums ?
		(quete_accepter_forum($Pile[$SP]['id_article'])=="non" OR
		($GLOBALS["meta"]["forums_publics"] == "non"
		AND quete_accepter_forum($Pile[$SP]['id_article']) == ""))
		? "" : // sinon:
		(lang_parametres_forum(calcul_parametres_forum($Pile[0],null,articles,$Pile[$SP]['id_article']),$Pile[$SP]['lang']).
	(($lien = (_request("retour") ? _request("retour") : str_replace("&amp;", "&", ''))) ? "&retour=".rawurlencode($lien) : ""))))))!=='' ?
		((	'<div class="padd-post-box padd-post-box-replies padd-post-box-comments">
		<div class="padd-post-box-title">
			<h3>' .
	_T('maparaan:commentaires') .
	'</h3>
		</div>
		<a href="#forum" name="forum" id="forum"></a>
		' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/forum') . ', array(\'id_article\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html\',\'html_4f3fd59499a04bccc65f38b9a1d98787\',\'\',48,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		<p class="repondre repondre-article"><a href="') . $t1 . (	'" rel="noindex nofollow">' .
	_T('public|spip|ecrire:repondre_article') .
	'</a></p>
	</div>')) :
		'') .
'
	
</div>

');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html
// Temps de compilation total: 18.196 ms
//

function html_4f3fd59499a04bccc65f38b9a1d98787($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_contenu_articlehtml_4f3fd59499a04bccc65f38b9a1d98787($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_4f3fd59499a04bccc65f38b9a1d98787', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/contenu/article.html');
}
?>