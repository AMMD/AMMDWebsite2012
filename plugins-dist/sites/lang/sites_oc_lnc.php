<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.org/tradlang_module/sites?lang_cible=oc_lnc
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'articles_dispo' => 'En attente', # NEW
	'articles_meme_auteur' => 'Tous les articles de cet auteur', # NEW
	'articles_off' => 'Bloqués', # NEW
	'articles_publie' => 'Publiés', # NEW
	'articles_refuse' => 'Supprimés', # NEW
	'articles_tous' => 'Tous', # NEW
	'aucun_article_syndic' => 'Aucun article syndiqué', # NEW
	'avis_echec_syndication_01' => 'La sindicacion a abocat: lo backend indicat es indeschifrable o prepausa pas cap d\'article.',
	'avis_echec_syndication_02' => 'La sindicacion a abocat: impossible d\'accedir al backend d\'aquel sit.',
	'avis_site_introuvable' => 'Sit introbable',
	'avis_site_syndique_probleme' => 'Atencion: la sindicacion d\'aquel sit a encontrat un problèma; lo sistèma es doncas interromput temporàriament. Verificatz l\'adreiça del fichièr de sindicacion d\'aquel sit (<b>@url_syndic@</b>), e tornatz ensajar de recuperar las informacions.', # MODIF
	'avis_sites_probleme_syndication' => 'Aqueles sits an encontrat un problèma de sindicacion',
	'avis_sites_syndiques_probleme' => 'Aqueles sits sindicats an pausat un problèma',

	// B
	'bouton_exporter' => 'Exporter', # NEW
	'bouton_importer' => 'Importer', # NEW
	'bouton_radio_modere_posteriori' => 'moderacion a posteriòri', # MODIF
	'bouton_radio_modere_priori' => 'moderacion a priòri', # MODIF
	'bouton_radio_non_syndication' => 'Pas cap de sindicacion',
	'bouton_radio_syndication' => 'Sindicacion:',

	// C
	'confirmer_purger_syndication' => 'Êtes-vous certain de vouloir supprimer tous les articles syndiqués de ce site ?', # NEW

	// E
	'entree_adresse_fichier_syndication' => 'Adreiça del fichièr de sindicacion :',
	'entree_adresse_site' => '<b>Adreiça del sit</b> [Obligatòria]',
	'entree_description_site' => 'Descripcion del sit',
	'erreur_fichier_format_inconnu' => 'Le format du fichier @fichier@ n\'est pas pris en charge.', # NEW
	'erreur_fichier_incorrect' => 'Impossible de lire le fichier.', # NEW

	// F
	'form_prop_nom_site' => 'Nom del sit',

	// I
	'icone_article_syndic' => 'Article syndiqué', # NEW
	'icone_articles_syndic' => 'Articles syndiqués', # NEW
	'icone_controler_syndication' => 'Publication des articles syndiqués', # NEW
	'icone_modifier_site' => 'Modificar aquel sit',
	'icone_referencer_nouveau_site' => 'Referenciar un sit nòu',
	'icone_site_reference' => 'Sites référencés', # NEW
	'icone_supprimer_article' => 'Supprimer cet article', # NEW
	'icone_supprimer_articles' => 'Supprimer ces articles', # NEW
	'icone_valider_article' => 'Valider cet article', # NEW
	'icone_valider_articles' => 'Valider ces articles', # NEW
	'icone_voir_sites_references' => 'Veire los sits referenciats',
	'info_1_site_importe' => '1 site a été importé', # NEW
	'info_a_valider' => '[de validar]',
	'info_aucun_site_importe' => 'Aucun site n\'a pu être importé', # NEW
	'info_bloquer' => 'blocar',
	'info_bloquer_lien' => 'Blocar aquel ligam',
	'info_derniere_syndication' => 'La darrièra sindicacion d\'aquel sit se faguèt lo',
	'info_liens_syndiques_1' => 'ligams sindicats',
	'info_liens_syndiques_2' => 'son en espèra de validacion.',
	'info_nb_sites_importes' => '@nb@ sites ont été importés', # NEW
	'info_nom_site_2' => '<b>Nom del sit</b> [Obligatòri]',
	'info_panne_site_syndique' => 'Sit sindicat en pana',
	'info_probleme_grave' => 'problèma de',
	'info_question_proposer_site' => 'Qual pòt prepausar de sits referenciats?',
	'info_retablir_lien' => 'Restablir aquel ligam',
	'info_site_attente' => 'Sit web en espèra de validacion',
	'info_site_propose' => 'Sit prepausat lo:',
	'info_site_reference' => 'Sit referenciat en linha',
	'info_site_refuse' => 'Sit web refusat',
	'info_site_syndique' => 'Aquel sit es sindicat...', # MODIF
	'info_site_valider' => 'Sits de validar',
	'info_sites_referencer' => 'Referenciar un sit',
	'info_sites_refuses' => 'Los sits refusats',
	'info_statut_site_1' => 'Aquel sit es:',
	'info_statut_site_2' => 'Publicat',
	'info_statut_site_3' => 'Prepausat',
	'info_statut_site_4' => 'Al bordilhièr', # MODIF
	'info_syndication' => 'sindicacion:',
	'info_syndication_articles' => 'article(s)',
	'item_bloquer_liens_syndiques' => 'Blocar los ligams sindicats per validacion',
	'item_gerer_annuaire_site_web' => 'Gerir un annuari de sits web',
	'item_non_bloquer_liens_syndiques' => 'Blocar pas los ligams eissits de la sindicacion',
	'item_non_gerer_annuaire_site_web' => 'Desactivar l\'annuari de sits web',
	'item_non_utiliser_syndication' => 'Utilizar pas la sindicacion automatica',
	'item_utiliser_syndication' => 'Utilizar la sindicacion automatica',

	// L
	'label_exporter_avec_mots_cles_1' => 'Exporter les mots-clés sous forme de tags', # NEW
	'label_exporter_id_parent' => 'Exporter les sites de la rubrique', # NEW
	'label_exporter_publie_seulement_1' => 'Exporter uniquement les sites publiés', # NEW
	'label_fichier_import' => 'Fichier HTML', # NEW
	'label_importer_les_tags_1' => 'Importer les tags sous forme de mot-clé', # NEW
	'label_importer_statut_publie_1' => 'Publier automatiquement les sites', # NEW
	'lien_mise_a_jour_syndication' => 'Actualizar ara',
	'lien_nouvelle_recuperation' => 'Ensajar una novèla recuperacion de las donadas',
	'lien_purger_syndication' => 'Effacer tous les articles syndiqués', # NEW

	// N
	'nombre_articles_syndic' => '@nb@ articles syndiqués', # NEW

	// S
	'statut_off' => 'Supprimé', # NEW
	'statut_prop' => 'En attente', # NEW
	'statut_publie' => 'Publié', # NEW
	'syndic_choix_moderation' => 'Que se pòt far amb los ligams venents que provenon d\'aquel sit?',
	'syndic_choix_oublier' => 'Que se pòt far amb los ligams que figuran pas pus dins lo fichièr de sindicacion?',
	'syndic_choix_resume' => 'D\'unes sits difusan lo tèxt complet dels articles. Quora aqueste es disponible, desiratz de lo sindicar? :',
	'syndic_lien_obsolete' => 'ligam obsolet',
	'syndic_option_miroir' => 'los blocar sus lo còp',
	'syndic_option_oubli' => 'los escafar (après @mois@ mois)',
	'syndic_option_resume_non' => 'lo contengut complet dels articles (al format HTML)',
	'syndic_option_resume_oui' => 'un simple resumit (a format tèxt)',
	'syndic_options' => 'Opcions de sindicacion:',

	// T
	'texte_expliquer_export_bookmarks' => 'Vous pouvez exporter une liste de sites au format Marque-page HTML,
	pour vous permettre ensuite de l\'importer dans votre navigateur ou dans un service en ligne', # NEW
	'texte_expliquer_import_bookmarks' => 'Vous pouvez importer une liste de sites au format Marque-page HTML,
	en provenance de votre navigateur ou d\'un service en ligne de gestion des Marques-pages.', # NEW
	'texte_liens_sites_syndiques' => 'Los ligams eissits dels sits sindicats se pòdon
   blocar a priòri; lo reglatge
  çai sota indica lo reglatge predefinit dels
   sits sindicats aprèp lor creacion. De tot biais,
    es possible puèi de 
   desblocar cada ligam individualament, o de
   causir, sit per sit, de blocar los ligams avenidors.', # MODIF
	'texte_messages_publics' => 'Messatges publics de l\'article:',
	'texte_non_fonction_referencement' => 'Podètz causir d\'utilizar pas aquela foncion automatica, e indicar de vòstre sicap los elements que pertòcan aquel sit...', # MODIF
	'texte_referencement_automatique' => '<b>Referénciament automatizat d\'un sit</b><br /> Podètz referenciar lèu-lèu un sit web en indicar çai sota l\'adreiça URL desirada, o l\'adreiça de son fichièr de sindicacion. SPIP agantarà automaticament las informacions que concernisson aquel sit (títol, descripcion...).', # MODIF
	'texte_referencement_automatique_verifier' => 'Veuillez vérifier les informations fournies par <tt>@url@</tt> avant d\'enregistrer.', # NEW
	'texte_syndication' => 'Se pòt recuperar automaticament, quora un sit web o permet, 
  la tièra de sas novetats. Per aquò far, vos cal activar la sindicacion. 
  <blockquote><i>D\'unes albergadors activan pas aquela foncionalitat; 
  en aquel cas, poiretz pas utilizar la sindicacion de contengut
  dempuèi vòstre sit.</i></blockquote>', # MODIF
	'titre_articles_syndiques' => 'Articles sindicats tirats d\'aquel sit',
	'titre_dernier_article_syndique' => 'Darrièrs articles sindicats',
	'titre_exporter_bookmarks' => 'Exporter des Marques-pages', # NEW
	'titre_importer_bookmarks' => 'Importer des Marques-pages', # NEW
	'titre_importer_exporter_bookmarks' => 'Importer et Exporter des Marques-pages', # NEW
	'titre_page_sites_tous' => 'Los sits referenciats',
	'titre_referencement_sites' => 'Referénciament de sits e sindicacion',
	'titre_site_numero' => 'SIT NUMÈRO:',
	'titre_sites_proposes' => 'Los sits prepausats',
	'titre_sites_references_rubrique' => 'Los sits referenciats dins aquela rubrica',
	'titre_sites_syndiques' => 'Los sits sindicats',
	'titre_sites_tous' => 'Los sits referenciats',
	'titre_syndication' => 'Sindicacion de sits',
	'tout_voir' => 'Voir tous les articles syndiqués', # NEW

	// U
	'un_article_syndic' => '1 article syndiqué' # NEW
);

?>
