<?php

/*
 * Squelette : ../prive/objets/liste/articles-trad.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 12:25:44 GMT
 * Boucles :   _liste_art
 */ 

function BOUCLE_liste_arthtml_5fb23cfe9f29d1f4cbf935640b5ff121(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "articles", "?","",array (
  'criteres' => 
  array (
    'id_trad' => true,
    'statut' => true,
  ),
),"id_article");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_liste_art']) ? $Pile[0]['debut_liste_art'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_liste_art';
		$command['from'] = array('articles' => 'spip_articles','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array('resultats' => array('articles','id','id_article'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("articles.id_article",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"articles.statut",
		"articles.id_rubrique",
		"articles.lang",
		"articles.titre AS titre_rang",
		"articles.titre");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array(
			array('=', 'articles.id_trad', sql_quote(@$Pile[0]['id_trad'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('REGEXP', 'articles.statut', "'.*'"), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), $rech_where?$rech_where:'');
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/liste/articles-trad.html','html_5fb23cfe9f29d1f4cbf935640b5ff121','_liste_art',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_art']['compteur_boucle'] = 0;
	$Numrows['_liste_art']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_liste_art']) ? $Pile[0]['debut_liste_art'] : _request('debut_liste_art');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_liste_art'] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_art']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_liste_art']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_liste_art']['total'] - 1);
	$Numrows['_liste_art']['grand_total'] = $Numrows['_liste_art']['total'];
	$Numrows['_liste_art']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_art']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_art']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l2 = _T('public|spip|ecrire:trad_reference');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_art']['compteur_boucle']++;
		if ($Numrows['_liste_art']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_art']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		<tr class="' .
alterner($Numrows['_liste_art']['compteur_boucle'],'row_odd','row_even') .
'">
			<td class=\'statut\'>' .
interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'article',$Pile[$SP]['id_article'],$Pile[$SP]['id_rubrique'])) .
'</td>
			<td class="trad">' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'id_trad', null),true) == $Pile[$SP]['id_article'])) ?' ' :''))))!=='' ?
		($t1 . interdire_scripts(filtre_balise_img_dist(chemin_image('langue-16.png')))) :
		'') .
'
				' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'editable', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'id_trad', null),true) == $Pile[$SP]['id_article'])) ?'' :' '))))!=='' ?
			($t2 . (	'<button type=\'submit\' name=\'changer_reference_trad&#91;' .
		$Pile[$SP]['id_article'] .
		'&#93;\' value=\'' .
		$Pile[$SP]['id_article'] .
		'\'>' .
		interdire_scripts(filtre_balise_img_dist(chemin_image('langues-off-12.gif'))) .
		'</button>')) :
			'') .
	'
				')) :
		'') .
'
			</td>
			<td class=\'titre principale\'><span
							' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'id_trad', null),true) == $Pile[$SP]['id_article'])) ?' ' :''))))!=='' ?
		($t1 . 'class="on"') :
		'') .
'
							dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'"
							lang="' .
htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'"><a
							href="' .
generer_url_entite($Pile[$SP]['id_article'],'article') .
'"
							title="' .
attribut_html($l1) .
' ' .
$Pile[$SP]['id_article'] .
'">' .
(($t1 = strval(recuperer_numero($Pile[$SP]['titre_rang'])))!=='' ?
		($t1 . '. ') :
		'') .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></span>
				' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'id_trad', null),true) == $Pile[$SP]['id_article'])) ?' ' :''))))!=='' ?
		($t1 . $l2) :
		'') .
'
			</td>
			<td class=\'langue\'>' .
traduire_nom_langue(htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) .
'</td>
			<td class=\'id\'>' .
invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', invalideur_session($Cache, $Pile[$SP]['id_article']))?" ":"") ? (	'<a href="' .
	invalideur_session($Cache, generer_url_ecrire('article_edit',(	'id_article=' .
		invalideur_session($Cache, $Pile[$SP]['id_article'])))) .
	'">' .
	invalideur_session($Cache, $Pile[$SP]['id_article']) .
	'</a>'):(	invalideur_session($Cache, $Pile[$SP]['id_article']) .
	'
			'))) .
'</td>
		</tr>
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/liste/articles-trad.html
// Temps de compilation total: 14.140 ms
//

function html_5fb23cfe9f29d1f4cbf935640b5ff121($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][(string)'defaut_tri'] = array('id_article' => '1
	date', interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '-1'),true)) => 'titre', '1' => 'points'))))!=='' ?
		($t1 . '
') :
		'') .
(($t1 = BOUCLE_liste_arthtml_5fb23cfe9f29d1f4cbf935640b5ff121($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_liste_art"]["grand_total"],
 		'_liste_art',
		isset($Pile[0]['debut_liste_art'])?$Pile[0]['debut_liste_art']:intval(_request('debut_liste_art')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets articles traductions">
<table class=\'spip liste\'>
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), singulier_ou_pluriel((isset($Numrows['_liste_art']['grand_total'])
			? $Numrows['_liste_art']['grand_total'] : $Numrows['_liste_art']['total']),'info_1_article','info_nb_articles')))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_art',$s?(strpos('< >','statut')-1):'statut'),(	'<span title="' .
			attribut_html(_T('public|spip|ecrire:lien_trier_statut')) .
			'">#</span>'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','statut')-1)):((($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='statut'),'ajax') .
		'</th>
			<th class=\'trad\' scope=\'col\'>&nbsp;</th>
			<th class=\'titre principale\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('titre',array('>','<')))?'sens':'tri').'_liste_art',$s?(strpos('< >','titre')-1):'titre'),_T('public|spip|ecrire:info_titre'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','titre')-1)):((($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='titre'),'ajax') .
		'</th>
			<th class=\'langue\' scope=\'col\'>' .
		_T('public|spip|ecrire:langue') .
		'</th>
			<th class=\'id\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('id_article',array('>','<')))?'sens':'tri').'_liste_art',$s?(strpos('< >','id_article')-1):'id_article'),_T('public|spip|ecrire:info_numero_abbreviation'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','id_article')-1)):((($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='id_article'),'ajax') .
		'</th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_liste_art"]["grand_total"],
 		'_liste_art',
		isset($Pile[0]['debut_liste_art'])?$Pile[0]['debut_liste_art']:intval(_request('debut_liste_art')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), ''))))!=='' ?
			('
<div class="liste-objets articles caption-wrap"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_5fb23cfe9f29d1f4cbf935640b5ff121', $Cache, $page, '../prive/objets/liste/articles-trad.html');
}
?>