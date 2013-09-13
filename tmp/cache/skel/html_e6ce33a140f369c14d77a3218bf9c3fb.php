<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/objets/liste/messages-recus.html
 * Date :      Tue, 20 Nov 2012 08:52:49 GMT
 * Compile :   Tue, 16 Apr 2013 11:51:44 GMT
 * Boucles :   _compte_non_lus, _mess_rec
 */ 

function BOUCLE_compte_non_lushtml_e6ce33a140f369c14d77a3218bf9c3fb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_auteur']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['type']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "messages", "?","",array (
  'criteres' => 
  array (
    'id_auteur' => true,
    'type' => true,
    'statut' => true,
  ),
),"id_message");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'messages';
		$command['id'] = '_compte_non_lus';
		$command['from'] = array('messages' => 'spip_messages','auteurs_liens' => 'spip_auteurs_liens','resultats' => 'spip_resultats','L1' => 'spip_auteurs');
		$command['type'] = array('auteurs_liens' => 'LEFT');
		$command['groupby'] = array();
		$command['orderby'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("messages.id_message",
		"$rech_select",
		"L1.nom");
	$command['where'] = 
			array((strlen(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'destinataire', null),true))) ? 
			array('OR', 
			array('AND', 
			array('=', 'auteurs_liens.id_auteur', intval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'destinataire', null),true)))), 
			array('!=', 'auteurs_liens.vu', '\'poub\'')), 
			array('OR', 
			array('=', 'messages.type', sql_quote('affich')), 
			array('AND', 
			array('=', 'messages.type', sql_quote('pb')), 
			array('=', 'messages.id_auteur', intval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'destinataire', null),true))))))) : '1=1'), (!(is_array(@$Pile[0]['id_auteur'])?count(@$Pile[0]['id_auteur']):strlen(@$Pile[0]['id_auteur'])) ? '' : ((is_array(@$Pile[0]['id_auteur'])) ? sql_in('messages.id_auteur',sql_quote($in)) : 
			array('=', 'messages.id_auteur', sql_quote(@$Pile[0]['id_auteur'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), 
			array('NOT', 
			array('=', 'messages.type', "'pb'")), (!(is_array(@$Pile[0]['type'])?count(@$Pile[0]['type']):strlen(@$Pile[0]['type'])) ? '' : ((is_array(@$Pile[0]['type'])) ? sql_in('messages.type',sql_quote($in1)) : 
			array('=', 'messages.type', sql_quote(@$Pile[0]['type'],'','varchar(6) NOT NULL DEFAULT \'\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('messages.statut',sql_quote($in2)) : 
			array('=', 'messages.statut', sql_quote(@$Pile[0]['statut'],'','varchar(6) NOT NULL DEFAULT \'0\'')))), $rech_where?$rech_where:'', 
			array('OR', 'auteurs_liens.vu IS NULL', sql_in('auteurs_liens.vu',array('poub','oui'),'NOT',$connect)));
	$command['join'] = array('auteurs_liens' => array('messages','id_objet','id_message','auteurs_liens.objet=\'message\' AND auteurs_liens.id_auteur='.intval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'destinataire', null),true)))), 'resultats' => array('messages','id','id_message'), 'L1' => array('messages','id_auteur'));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/organiseur/prive/objets/liste/messages-recus.html','html_e6ce33a140f369c14d77a3218bf9c3fb','_compte_non_lus',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_compte_non_lus']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= interdire_scripts(vide(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_mess_rechtml_e6ce33a140f369c14d77a3218bf9c3fb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_auteur']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['type']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "messages", "?","",array (
  'criteres' => 
  array (
    'id_auteur' => true,
    'type' => true,
    'statut' => true,
  ),
),"id_message");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_mess_rec']))?$Pile[0]['sens'.'_mess_rec']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_mess_rec']) ? $Pile[0]['debut_mess_rec'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'messages';
		$command['id'] = '_mess_rec';
		$command['from'] = array('messages' => 'spip_messages','auteurs_liens' => 'spip_auteurs_liens','resultats' => 'spip_resultats','L1' => 'spip_auteurs');
		$command['type'] = array('auteurs_liens' => 'LEFT');
		$command['groupby'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("messages.id_message",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"messages.type",
		"auteurs_liens.vu",
		"messages.rv",
		"messages.id_auteur",
		"L1.nom",
		"messages.titre",
		"messages.date_heure",
		"messages.date_fin");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array((strlen(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'destinataire', null),true))) ? 
			array('OR', 
			array('AND', 
			array('=', 'auteurs_liens.id_auteur', intval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'destinataire', null),true)))), 
			array('!=', 'auteurs_liens.vu', '\'poub\'')), 
			array('OR', 
			array('=', 'messages.type', sql_quote('affich')), 
			array('AND', 
			array('=', 'messages.type', sql_quote('pb')), 
			array('=', 'messages.id_auteur', intval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'destinataire', null),true))))))) : '1=1'), (!(is_array(@$Pile[0]['id_auteur'])?count(@$Pile[0]['id_auteur']):strlen(@$Pile[0]['id_auteur'])) ? '' : ((is_array(@$Pile[0]['id_auteur'])) ? sql_in('messages.id_auteur',sql_quote($in)) : 
			array('=', 'messages.id_auteur', sql_quote(@$Pile[0]['id_auteur'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['type'])?count(@$Pile[0]['type']):strlen(@$Pile[0]['type'])) ? '' : ((is_array(@$Pile[0]['type'])) ? sql_in('messages.type',sql_quote($in1)) : 
			array('=', 'messages.type', sql_quote(@$Pile[0]['type'],'','varchar(6) NOT NULL DEFAULT \'\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('messages.statut',sql_quote($in2)) : 
			array('=', 'messages.statut', sql_quote(@$Pile[0]['statut'],'','varchar(6) NOT NULL DEFAULT \'0\'')))), $rech_where?$rech_where:'');
	$command['join'] = array('auteurs_liens' => array('messages','id_objet','id_message','auteurs_liens.objet=\'message\' AND auteurs_liens.id_auteur='.intval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'destinataire', null),true)))), 'resultats' => array('messages','id','id_message'), 'L1' => array('messages','id_auteur'));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/organiseur/prive/objets/liste/messages-recus.html','html_e6ce33a140f369c14d77a3218bf9c3fb','_mess_rec',11,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_mess_rec']['compteur_boucle'] = 0;
	$Numrows['_mess_rec']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_mess_rec']) ? $Pile[0]['debut_mess_rec'] : _request('debut_mess_rec');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_mess_rec'] = quete_debut_pagination('id_message',$Pile[0]['@id_message'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_mess_rec']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_mess_rec']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_mess_rec']['total'] - 1);
	$Numrows['_mess_rec']['grand_total'] = $Numrows['_mess_rec']['total'];
	$Numrows['_mess_rec']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_mess_rec']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_mess_rec']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('organiseur:info_message_non_lu');
	$l2 = _T('organiseur:info_message_non_lu');
	$l3 = _T('organiseur:info_type_message_rv');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_mess_rec']['compteur_boucle']++;
		if ($Numrows['_mess_rec']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_mess_rec']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		' .
vide($Pile['vars'][(string)'vu'] = interdire_scripts(((((typo($Pile[$SP]['type'], "TYPO", $connect, $Pile[0]) == 'pb')) OR (interdire_scripts(match($Pile[$SP]['vu'],'^(oui|poub)$')))) ?' ' :''))) .
'
		<tr class="' .
alterner($Numrows['_mess_rec']['compteur_boucle'],'row_odd','row_even') .
(!(table_valeur($Pile["vars"], (string)'vu', null))  ?
		(' ' . 'new') :
		'') .
'">
			<td class=\'new\'>' .
(table_valeur($Pile["vars"], (string)'vu', null) ? '':interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('pictonew-16.png'),$l1),'title',$l1))) .
'</td>
			<td class=\'type\'>' .
interdire_scripts(filtre_balise_img_dist(chemin_image(interdire_scripts(organiseur_icone_message(typo($Pile[$SP]['type'], "TYPO", $connect, $Pile[0]),'16'))),_T(concat('organiseur:info_type_message_',interdire_scripts(typo($Pile[$SP]['type'], "TYPO", $connect, $Pile[0])))))) .
'</td>
			<td class=\'isrv\'>' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['rv'] == 'oui')) ?' ' :''))))!=='' ?
		($t1 . interdire_scripts(filtre_balise_img_dist(chemin_image('heure-16.png'),$l3))) :
		'') .
'</td>
			<td class="from"><a href="' .
generer_url_entite($Pile[$SP]['id_auteur'],'auteur') .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
'</a></td>
			<td class=\'titre principale\'>
				<a
					href="' .
generer_url_entite($Pile[$SP]['id_message'],'message') .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
			</td>
			<td class=\'date secondaire\'>
				' .
interdire_scripts((($Pile[$SP]['rv'] == 'oui') ? (	interdire_scripts(affdate_debut_fin($Pile[$SP]['date_heure'],interdire_scripts($Pile[$SP]['date_fin']),'oui','abbr')) .
	'
				'):(	interdire_scripts(affdate_jourcourt($Pile[$SP]['date_heure'])) .
	'
				'))) .
'
			</td>
			<td class=\'\'></td>
		</tr>
	');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/objets/liste/messages-recus.html
// Temps de compilation total: 13.797 ms
//

function html_e6ce33a140f369c14d77a3218bf9c3fb($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][(string)'defaut_tri'] = array('date_heure' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '-1'),true)), 'titre' => '1', 'id_article' => '1', 'points' => '-1
'))))!=='' ?
		($t1 . '
') :
		'') .
'
' .
(($t1 = BOUCLE_compte_non_lushtml_e6ce33a140f369c14d77a3218bf9c3fb($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
' .
	vide($Pile['vars'][(string)'nonlus'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nonlus', null), $Numrows['_compte_non_lus']['total']),true)))))) .
'
' .
(($t1 = BOUCLE_mess_rechtml_e6ce33a140f369c14d77a3218bf9c3fb($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_mess_rec"]["grand_total"],
 		'_mess_rec',
		isset($Pile[0]['debut_mess_rec'])?$Pile[0]['debut_mess_rec']:intval(_request('debut_mess_rec')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets messages">
<table class=\'spip liste\'>
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), ((($a = singulier_ou_pluriel(table_valeur($Pile["vars"], (string)'nonlus', null),'organiseur:info_1_message_nonlu','organiseur:info_nb_messages_nonlus')) OR (is_string($a) AND strlen($a))) ? $a : singulier_ou_pluriel((isset($Numrows['_mess_rec']['grand_total'])
			? $Numrows['_mess_rec']['grand_total'] : $Numrows['_mess_rec']['total']),'info_1_message','info_nb_messages'))))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class=\'first_row\'>
			<th class=\'new\' scope=\'col\'></th>
			<th class=\'type\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('type',array('>','<')))?'sens':'tri').'_mess_rec',$s?(strpos('< >','type')-1):'type'),(	'<span title="' .
			attribut_html(_T('organiseur:lien_trier_type')) .
			'">#</span>'),$s?(((intval($t=(isset($Pile[0]['sens'.'_mess_rec']))?$Pile[0]['sens'.'_mess_rec']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','type')-1)):((($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')=='type'),'ajax') .
		'</th>
			<th class=\'isrv\' scope=\'col\'>' .
		interdire_scripts(filtre_balise_img_dist(chemin_image('heure-16.png'),_T('organiseur:info_type_message_rv'))) .
		'</th>
			<th class=\'from\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('nom',array('>','<')))?'sens':'tri').'_mess_rec',$s?(strpos('< >','nom')-1):'nom'),_T('organiseur:info_message_de'),$s?(((intval($t=(isset($Pile[0]['sens'.'_mess_rec']))?$Pile[0]['sens'.'_mess_rec']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','nom')-1)):((($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')=='nom'),'ajax') .
		'</th>
			<th class=\'titre principale\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('titre',array('>','<')))?'sens':'tri').'_mess_rec',$s?(strpos('< >','titre')-1):'titre'),_T('public|spip|ecrire:info_titre'),$s?(((intval($t=(isset($Pile[0]['sens'.'_mess_rec']))?$Pile[0]['sens'.'_mess_rec']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','titre')-1)):((($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')=='titre'),'ajax') .
		'</th>
			<th class=\'date secondaire\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('date_heure',array('>','<')))?'sens':'tri').'_mess_rec',$s?(strpos('< >','date_heure')-1):'date_heure'),_T('public|spip|ecrire:date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_mess_rec']))?$Pile[0]['sens'.'_mess_rec']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','date_heure')-1)):((($t=(isset($Pile[0]['tri'.'_mess_rec']))?$Pile[0]['tri'.'_mess_rec']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date_heure'),true)))?tri_protege_champ($t):'')=='date_heure'),'ajax') .
		'</th>
			<th class=\'\' scope=\'col\'></th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_mess_rec"]["grand_total"],
 		'_mess_rec',
		isset($Pile[0]['debut_mess_rec'])?$Pile[0]['debut_mess_rec']:intval(_request('debut_mess_rec')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), ''))))!=='' ?
			('
<div class="liste-objets messages caption-wrap"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_e6ce33a140f369c14d77a3218bf9c3fb', $Cache, $page, '../plugins-dist/organiseur/prive/objets/liste/messages-recus.html');
}
?>