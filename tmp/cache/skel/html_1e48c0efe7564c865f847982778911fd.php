<?php

/*
 * Squelette : plugins/auto/theme_maparaan/v1.0.1/main-loading.js.html
 * Date :      Wed, 08 Jun 2011 16:01:50 GMT
 * Compile :   Tue, 16 Apr 2013 09:43:14 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/theme_maparaan/v1.0.1/main-loading.js.html
// Temps de compilation total: 0.760 ms
//

function html_1e48c0efe7564c865f847982778911fd($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'function paddToggle(classname,value) {
	jQuery(classname).focus(function() {
		if (value == jQuery(classname).val()) {
			jQuery(this).val(\'\');
		}
	});
	jQuery(classname).blur(function() {
		if (\'\' == jQuery(classname).val()) {
			jQuery(this).val(value);
		}
	});
}

jQuery(document).ready(function() {

	paddToggle("input#recherche", "' .
_T('public|spip|ecrire:info_rechercher') .
'");	
	
	jQuery("div.search form").click(function () {
		jQuery("input#recherche").focus();
	});
	
	/****  FORMULAIRE_SITE ****/
	paddToggle("input#nom_site","' .
_T('public|spip|ecrire:form_prop_nom_site') .
'");
	paddToggle("input#url_site","' .
_T('public|spip|ecrire:form_prop_url_site') .
'");
	paddToggle("textarea#description_site","' .
_T('public|spip|ecrire:form_prop_description') .
'");
	
	/****  FORMULAIRE_SIGNATURE / Petition  ****/
	paddToggle("input#session_nom","' .
_T('public|spip|ecrire:form_pet_votre_nom') .
'");
	paddToggle("input#session_email","' .
_T('public|spip|ecrire:form_pet_votre_email') .
'");
	paddToggle("input#signature_nom_site","' .
_T('public|spip|ecrire:form_pet_nom_site2') .
'");
	paddToggle("input#signature_url_site","' .
_T('public|spip|ecrire:form_pet_adresse_site') .
'");
	paddToggle("textarea#message","' .
_T('maparaan:form_pet_message_commentaire') .
'");
	
	/****  FORMULAIRE_FORUM  ****/
	paddToggle("input#titre","' .
_T('public|spip|ecrire:forum_titre') .
'");
	paddToggle("textarea#texte","' .
_T('maparaan:texte_message') .
'");
	/* cf. FORMULAIRE_SITE : nom_site, url_site. */
	/****  FORMULAIRE_INC-LOGIN_FORUM  ****/
	paddToggle("input#session_nom","' .
_T('maparaan:forum_votre_nom') .
'");
	paddToggle("input#session_email","' .
_T('maparaan:forum_votre_email') .
'");
	
	/****  FORMULAIRE_INSCRIPTION ****/
	paddToggle("input#nom_inscription","' .
_T('public|spip|ecrire:form_pet_votre_nom') .
'");
	paddToggle("input#mail_inscription","' .
_T('public|spip|ecrire:form_pet_votre_email') .
'");
	
	/****  FORMULAIRE_ECRIRE_AUTEUR ****/
	paddToggle("input.email_message_auteur","' .
_T('public|spip|ecrire:form_pet_votre_email') .
'");
	paddToggle("input.sujet_message_auteur","' .
_T('public|spip|ecrire:form_prop_sujet') .
'");
	paddToggle("textarea.texte_message_auteur","' .
_T('maparaan:texte_message') .
'");
	
	/****  FORMULAIRE_LOGIN ****/
	paddToggle("input#var_login","' .
_T('maparaan:login_login2') .
'");
	paddToggle("input#password","' .
_T('maparaan:login_pass2') .
'");
	
	/****  FORMULAIRE_OUBLI ****/
	paddToggle("input#oubli","' .
_T('public|spip|ecrire:form_pet_votre_email') .
'");
	
});');

	return analyse_resultat_skel('html_1e48c0efe7564c865f847982778911fd', $Cache, $page, 'plugins/auto/theme_maparaan/v1.0.1/main-loading.js.html');
}
?>