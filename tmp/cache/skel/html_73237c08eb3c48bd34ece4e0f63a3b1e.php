<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html
 * Date :      Tue, 20 Nov 2012 08:52:49 GMT
 * Compile :   Tue, 16 Apr 2013 11:51:44 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html
// Temps de compilation total: 1.986 ms
//

function html_73237c08eb3c48bd34ece4e0f63a3b1e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="nettoyeur"></div>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/messages-envoyes') . ', array_merge('.var_export($Pile[0],1).',array(\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true))) . ',
	\'destinataire\' => ' . argumenter_squelette(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'type\' => ' . argumenter_squelette('normal') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html\',\'html_73237c08eb3c48bd34ece4e0f63a3b1e\',\'\',2,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/messages-recus') . ', array_merge('.var_export($Pile[0],1).',array(\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) . ',
	\'destinataire\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true))) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'type\' => ' . argumenter_squelette('normal') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html\',\'html_73237c08eb3c48bd34ece4e0f63a3b1e\',\'\',3,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
' .
filtre_icone_verticale_dist(parametre_url(generer_url_ecrire('message_edit',(	'new=oui&to=' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true)))),'redirect',self()),_T('public|spip|ecrire:info_envoyer_message_prive'),'message-24.png','new','right') .
'

');

	return analyse_resultat_skel('html_73237c08eb3c48bd34ece4e0f63a3b1e', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html');
}
?>