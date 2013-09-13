<?php

/*
 * Squelette : ../plugins/auto/videos/v0.10.2/formulaires/insertion_video.html
 * Date :      Tue, 18 Sep 2012 04:00:04 GMT
 * Compile :   Tue, 16 Apr 2013 09:46:56 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/videos/v0.10.2/formulaires/insertion_video.html
// Temps de compilation total: 1.909 ms
//

function html_9235fd402f14d9205fa5d9e463646c89($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'" id="formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'">
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

<form method=\'post\' action=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'\'><div>
	' .
	'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div><ul>
		<li class="editer_url">
			<label>
				' .
(($t1 = strval(interdire_scripts(((table_valeur(@$Pile[0], (string)'message_ok', null)) ?' ' :''))))!=='' ?
		('<strong>' . $t1 . (	' ' .
	_T('videos:label_ajouter_autre_video') .
	'</strong><br />')) :
		'') .
'
				' .
_T('videos:label_url') .
'
			</label>
			<input type="text" class="text" size="22" id="video_url" name="video_url" value="' .
interdire_scripts((table_valeur(@$Pile[0], (string)'message_ok', null) ? '':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'video_url', null),true)))) .
'"/>
		</li>
	</ul>
	<p class="boutons">
		<input type="submit" value="' .
_T('videos:valider') .
'" name=\'valider\' />
	</p>
	</div>
</form>
</div>');

	return analyse_resultat_skel('html_9235fd402f14d9205fa5d9e463646c89', $Cache, $page, '../plugins/auto/videos/v0.10.2/formulaires/insertion_video.html');
}
?>