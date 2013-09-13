<?php

/*
 * Squelette : plugins/auto/squelette_maparaan/v1.0.0/formulaires/inscription.html
 * Date :      Fri, 25 Feb 2011 17:00:16 GMT
 * Compile :   Tue, 16 Apr 2013 12:08:05 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/squelette_maparaan/v1.0.0/formulaires/inscription.html
// Temps de compilation total: 4.324 ms
//

function html_f9a868e6b56812da7f02bc62ef0e058f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_inscription ajax" id="formulaire_inscription">
' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
<form method="post" action="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'" class="lateral-form">
	' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div><fieldset>
		
		<div class="padd-post-box titre-sans-icone">
		' .
	(($t2 = strval(interdire_scripts(((table_valeur(@$Pile[0], (string)'message_erreur', null)) ?'' :' '))))!=='' ?
			($t2 . (	'
		' .
		(($t3 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'_commentaire', null))))!=='' ?
				((	'<div class="padd-post-box-title"><h3>' .
			_T('public|spip|ecrire:pass_vousinscrire') .
			'</h3></div>
		<p class=\'explication\'>') . $t3 . '</p>') :
				'') .
		'
		')) :
			'') .
	'<div class="padd-post-box-title"><h3>' .
	_T('public|spip|ecrire:form_forum_identifiants') .
	'</h3></div>
		<p class=\'explication\'>' .
	_T('public|spip|ecrire:form_forum_indiquer_nom_email') .
	'</p>
		</div>
		<ul>
			<li class=\'saisie_nom_inscription obligatoire' .
	(($t2 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom_inscription')) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'\'>
				<p class="input">
					<label for="nom_inscription">' .
	_T('public|spip|ecrire:form_pet_votre_nom') .
	'</label>
					' .
	(($t2 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom_inscription'))))!=='' ?
			('<span class="erreur_message">' . $t2 . '</span>') :
			'') .
	'
					<input name="nom_inscription" id="nom_inscription" value="' .
	interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'nom_inscription', null),true)) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:form_pet_votre_nom'))) .
	'" size="30" type="text" />
				</p>
			</li>
			<li class=\'saisie_mail_inscription obligatoire' .
	(($t2 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'mail_inscription')) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'\'>
				<p class="input">
					<label for="mail_inscription">' .
	_T('public|spip|ecrire:form_pet_votre_email') .
	'</label>
					' .
	(($t2 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'mail_inscription'))))!=='' ?
			('<span class="erreur_message">' . $t2 . '</span>') :
			'') .
	'
					<input name="mail_inscription" id="mail_inscription" value="' .
	interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'mail_inscription', null),true)) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:form_pet_votre_email'))) .
	'" size="30" type="text" />
				</p>
			</li>
		</ul>
	</fieldset>
	
	<p style="display: none;">
		<label for="nobot">' .
	_T('public|spip|ecrire:antispam_champ_vide') .
	'</label>
		<input type="text" class="text" name="nobot" id="nobot" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nobot', null),true)) .
	'" size="10" />
	</p>
	<p class="boutons"><input type="submit" class="submit" value="' .
	_T('public|spip|ecrire:bouton_valider') .
	'" /></p>
 </form>
' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'focus', null),true))))!=='' ?
			('<script type="text/javascript"><!--
document.getElementById(\'' . $t2 . '\').focus();
--></script>') :
			'') .
	'
')) :
		'') .
'
</div>
' .
(($t1 = strval(interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'focus', null), ''),true) ? ' ':''))))!=='' ?
		($t1 . (	'
<div style="text-align: ' .
	lang_dir(@$Pile[0]['lang'], 'right','left') .
	';">
<script type="text/javascript">/*<!' .
	interdire_scripts(eval('return '.'chr(91)'.';')) .
	'CDATA' .
	interdire_scripts(eval('return '.'chr(91)'.';')) .
	'*/
document.write("<a style=\'color: #e86519\' href=\'")
document.write((window.opener) ? "javascript:close()" : "./")
document.write("\'>' .
	_T('public|spip|ecrire:pass_quitter_fenetre') .
	'<" + "/a>");
/*' .
	interdire_scripts(eval('return '.'chr(93)'.';')) .
	interdire_scripts(eval('return '.'chr(93)'.';')) .
	'>*/</script>
<noscript>
	&#91;<a href=\'./\'>' .
	_T('public|spip|ecrire:pass_retour_public') .
	'</a>&#93;
</noscript>
</div>')) :
		''));

	return analyse_resultat_skel('html_f9a868e6b56812da7f02bc62ef0e058f', $Cache, $page, 'plugins/auto/squelette_maparaan/v1.0.0/formulaires/inscription.html');
}
?>