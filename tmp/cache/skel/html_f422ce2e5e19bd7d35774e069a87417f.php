<?php

/*
 * Squelette : plugins/auto/saisies/v1.27.0/saisies/fieldset.html
 * Date :      Mon, 18 Jun 2012 12:00:26 GMT
 * Compile :   Wed, 01 May 2013 21:35:31 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/saisies/v1.27.0/saisies/fieldset.html
// Temps de compilation total: 8.403 ms
//

function html_f422ce2e5e19bd7d35774e069a87417f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'pliable'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'pliable', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'pliable', null),true) != 'non')))) ?' ' :'') ? 'pliable':''))) .
vide($Pile['vars'][(string)'plie'] = interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'plie', null),true)) AND (interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'plie', null),true) != 'non')))) ?' ' :'') ? 'plie':''))) .
'
' .
vide($Pile['vars'][(string)'champs_internes'] = interdire_scripts(saisies_lister_par_nom(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true)))) .
vide($Pile['vars'][(string)'erreurs'] = ((($a = table_valeur(@$Pile[0], (string)'erreurs', null)) OR (is_string($a) AND strlen($a))) ? $a : array())) .
vide($Pile['vars'][(string)'erreurs_fieldset'] = array_intersect_key(table_valeur($Pile["vars"], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'champs_internes', null))) .
((table_valeur($Pile["vars"], (string)'erreurs_fieldset', null))  ?
		(' ' . (	'
	' .
	vide($Pile['vars'][(string)'plie'] = ''))) :
		'') .
'

<li class="fieldset' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nom', null),true))))!=='' ?
		(' fieldset_' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'li_class', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type_saisie', null),true))))!=='' ?
		(' saisie_' . $t1) :
		'') .
(($t1 = strval(table_valeur($Pile["vars"], (string)'pliable', null)))!=='' ?
		(' ' . $t1 . (($t2 = strval(table_valeur($Pile["vars"], (string)'plie', null)))!=='' ?
			(' ' . $t2) :
			'')) :
		'') .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_saisie', null),true))))!=='' ?
		(' data-id="' . $t1 . '"') :
		'') .
'> 
	' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_debut', null)) .
'<fieldset>
		' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'label', null))))!=='' ?
		((	interdire_scripts(inserer_attribut(sinon(table_valeur($GLOBALS, (string)'debut_intertitre', null), '<h3>'),'class','legend')) .
	'
			' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'icone', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
				' .
		vide($Pile['vars'][(string)'icone'] = '') .
		((version_compare(spip_version(),'2.9','>'))  ?
				(' ' . vide($Pile['vars'][(string)'icone'] = interdire_scripts(chemin_image(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'icone', null),true)))))) :
				'') .
		'
				' .
		(($t3 = strval(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',((($a = table_valeur($Pile["vars"], (string)'icone', null)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(find_in_path(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'icone', null),true))))),interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'taille_icone', null),true)) OR (is_string($a) AND strlen($a))) ? $a : '16')))),'src')))!=='' ?
				('<img src="' . $t3 . (	'" alt="' .
			interdire_scripts(table_valeur(@$Pile[0], (string)'label', null)) .
			'" /> ')) :
				'') .
		'
			')) :
			'') .
	'
			<span>') . $t1 . (	'</span>' .
	interdire_scripts(sinon(table_valeur($GLOBALS, (string)'fin_intertitre', null), '</h3>')))) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'explication', null))))!=='' ?
		('<p class=\'explication\'>' . $t1 . '</p>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(((is_array(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true))) ?' ' :''))))!=='' ?
		($t1 . (	'
		<ul>
			' .
	recuperer_fond( interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'fond_generer', null), 'inclure/generer_saisies'),true)) , array_merge($Pile[0],array('saisies' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'saisies', null),true)) ,
	'from_fieldset' => 'on' )), array('compil'=>array('plugins/auto/saisies/v1.27.0/saisies/fieldset.html','html_f422ce2e5e19bd7d35774e069a87417f','',19,$GLOBALS['spip_lang'])), '') .
	'</ul>
		')) :
		'') .
'
	</fieldset>
	' .
interdire_scripts(table_valeur(@$Pile[0], (string)'inserer_fin', null)) .
'</li>
');

	return analyse_resultat_skel('html_f422ce2e5e19bd7d35774e069a87417f', $Cache, $page, 'plugins/auto/saisies/v1.27.0/saisies/fieldset.html');
}
?>