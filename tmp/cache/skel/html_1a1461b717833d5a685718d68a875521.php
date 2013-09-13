<?php

/*
 * Squelette : ../plugins/auto/formidable/v1.3.5/prive/objets/liste/formulaires.html
 * Date :      Thu, 06 Sep 2012 18:00:26 GMT
 * Compile :   Wed, 01 May 2013 13:01:48 GMT
 * Boucles :   _formulaires
 */ 

function BOUCLE_formulaireshtml_1a1461b717833d5a685718d68a875521(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_formulaires']))?$Pile[0]['tri'.'_formulaires']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'titre'),true)))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_formulaires']))?$Pile[0]['sens'.'_formulaires']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_formulaires']))?$Pile[0]['tri'.'_formulaires']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'titre'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_formulaires']) ? $Pile[0]['debut_formulaires'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'formulaires';
		$command['id'] = '_formulaires';
		$command['from'] = array('formulaires' => 'spip_formulaires');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("".tri_champ_select($tri)."",
		"formulaires.id_formulaire",
		"formulaires.titre",
		"formulaires.identifiant");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array((!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('formulaires.statut',sql_quote($in)) : 
			array('=', 'formulaires.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/formidable/v1.3.5/prive/objets/liste/formulaires.html','html_1a1461b717833d5a685718d68a875521','_formulaires',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_formulaires']['compteur_boucle'] = 0;
	$Numrows['_formulaires']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_formulaires']) ? $Pile[0]['debut_formulaires'] : _request('debut_formulaires');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_formulaires'] = quete_debut_pagination('id_formulaire',$Pile[0]['@id_formulaire'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_formulaires']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_formulaires']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_formulaires']['total'] - 1);
	$Numrows['_formulaires']['grand_total'] = $Numrows['_formulaires']['total'];
	$Numrows['_formulaires']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_formulaires']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_formulaires']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l2 = _T('formidable:formulaires_dupliquer');
	$l3 = _T('formidable:formulaires_supprimer');
	$l4 = _T('formidable:formulaires_supprimer_confirmation');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_formulaires']['compteur_boucle']++;
		if ($Numrows['_formulaires']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_formulaires']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		<tr class="' .
alterner($Numrows['_formulaires']['compteur_boucle'],'row_odd','row_even') .
(($t1 = strval(unique((calcul_exposer($Pile[$SP]['id_formulaire'], 'id_formulaire', $Pile[0], '', 'id_formulaire', '') ? 'on' : ''))))!=='' ?
		(' ' . $t1) :
		'') .
'">
			<td class="id_formulaire">' .
$l1 .
$Pile[$SP]['id_formulaire'] .
'</td>
			<td class="titre"><a href="' .
generer_url_entite($Pile[$SP]['id_formulaire'],'formulaire') .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></td>
			<td class="identifiant">' .
interdire_scripts($Pile[$SP]['identifiant']) .
'</td>
			<td class="action">
				' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	bouton_action(interdire_scripts(filtre_balise_img_dist(chemin_image('formulaire-dupliquer-24.png'),$l2)),invalideur_session($Cache, generer_action_auteur('dupliquer_formulaire',invalideur_session($Cache, $Pile[$SP]['id_formulaire']))),'link') .
	'
				')) :
		'') .
'
				' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('editer', 'formulaire', invalideur_session($Cache, $Pile[$SP]['id_formulaire']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
					' .
	bouton_action(interdire_scripts(filtre_balise_img_dist(chemin_image('formulaire-supprimer-24.png'),$l3)),invalideur_session($Cache, generer_action_auteur('supprimer_formulaire',invalideur_session($Cache, $Pile[$SP]['id_formulaire']))),'link',$l4) .
	'
				')) :
		'') .
'
			</td>
		</tr>
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/formidable/v1.3.5/prive/objets/liste/formulaires.html
// Temps de compilation total: 18.245 ms
//

function html_1a1461b717833d5a685718d68a875521($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][(string)'defaut_tri'] = array('date' => '-1', 'titre' => '1', 'id_formulaire' => '1
'))))!=='' ?
		($t1 . '
') :
		'') .
(($t1 = BOUCLE_formulaireshtml_1a1461b717833d5a685718d68a875521($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_formulaires"]["grand_total"],
 		'_formulaires',
		isset($Pile[0]['debut_formulaires'])?$Pile[0]['debut_formulaires']:intval(_request('debut_formulaires')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets formulaires">
<table class="spip liste">
' .
		(($t3 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'titre', null))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class="first_row">
			<th class="id_formulaire id" scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('id_formulaire',array('>','<')))?'sens':'tri').'_formulaires',$s?(strpos('< >','id_formulaire')-1):'id_formulaire'),'<span>#</span>',$s?(((intval($t=(isset($Pile[0]['sens'.'_formulaires']))?$Pile[0]['sens'.'_formulaires']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_formulaires']))?$Pile[0]['tri'.'_formulaires']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'titre'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','id_formulaire')-1)):((($t=(isset($Pile[0]['tri'.'_formulaires']))?$Pile[0]['tri'.'_formulaires']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'titre'),true)))?tri_protege_champ($t):'')=='id_formulaire'),'ajax') .
		'</th>
			<th class="titre" scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('titre',array('>','<')))?'sens':'tri').'_formulaires',$s?(strpos('< >','titre')-1):'titre'),_T('formidable:editer_titre'),$s?(((intval($t=(isset($Pile[0]['sens'.'_formulaires']))?$Pile[0]['sens'.'_formulaires']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_formulaires']))?$Pile[0]['tri'.'_formulaires']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'titre'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','titre')-1)):((($t=(isset($Pile[0]['tri'.'_formulaires']))?$Pile[0]['tri'.'_formulaires']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'titre'),true)))?tri_protege_champ($t):'')=='titre'),'ajax') .
		'</th>
			<th class="identifiant" scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('identifiant',array('>','<')))?'sens':'tri').'_formulaires',$s?(strpos('< >','identifiant')-1):'identifiant'),_T('formidable:editer_identifiant'),$s?(((intval($t=(isset($Pile[0]['sens'.'_formulaires']))?$Pile[0]['sens'.'_formulaires']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_formulaires']))?$Pile[0]['tri'.'_formulaires']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'titre'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','identifiant')-1)):((($t=(isset($Pile[0]['tri'.'_formulaires']))?$Pile[0]['tri'.'_formulaires']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'titre'),true)))?tri_protege_champ($t):'')=='identifiant'),'ajax') .
		'</th>
			<th class="action" scope=\'col\'></th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_formulaires"]["grand_total"],
 		'_formulaires',
		isset($Pile[0]['debut_formulaires'])?$Pile[0]['debut_formulaires']:intval(_request('debut_formulaires')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), _T('formidable:formulaires_aucun')))))!=='' ?
			('
<div class="liste-objets formulaires"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_1a1461b717833d5a685718d68a875521', $Cache, $page, '../plugins/auto/formidable/v1.3.5/prive/objets/liste/formulaires.html');
}
?>