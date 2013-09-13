<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/inclure/colonne-documents.html
 * Date :      Tue, 20 Nov 2012 08:52:47 GMT
 * Compile :   Tue, 16 Apr 2013 09:46:56 GMT
 * Boucles :   _docslies
 */ 

function BOUCLE_docslieshtml_c0776ce7134df44323e37f98c575c0c3(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents_liens';
		$command['id'] = '_docslies';
		$command['from'] = array('documents_liens' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents_liens.id_document",
		"documents_liens.id_objet",
		"documents_liens.objet");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'documents_liens.id_objet', sql_quote(@$Pile[0]['id_objet'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'documents_liens.objet', sql_quote(@$Pile[0]['objet'],'','varchar(25) NOT NULL DEFAULT \'\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/colonne-documents.html','html_c0776ce7134df44323e37f98c575c0c3','_docslies',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/document_case', array('id_document' => $Pile[$SP]['id_document'] ,'id_objet' => $Pile[$SP]['id_objet'] ,'objet' => $Pile[$SP]['objet'] ,'lang' => $GLOBALS["spip_lang"] ,'recurs'=>(++$recurs)), array('compil'=>array('../plugins-dist/medias/prive/squelettes/inclure/colonne-documents.html','html_c0776ce7134df44323e37f98c575c0c3','_docslies',10,$GLOBALS['spip_lang']), 'trim'=>true, 'ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true), ''))
);
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/inclure/colonne-documents.html
// Temps de compilation total: 7.144 ms
//

function html_c0776ce7134df44323e37f98c575c0c3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="liste_items documents" id="documents_joints">
' .
BOUCLE_docslieshtml_c0776ce7134df44323e37f98c575c0c3($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</div>
<script type="text/javascript">/*<![CDATA[*/
var multifile=\'' .
interdire_scripts(texte_script(find_in_path('javascript/jquery.multifile.js'))) .
'\';
' .
filtre_compacte_dist((($c = find_in_path('javascript/medias_edit.js')) ? spip_file_get_contents($c) : ""),'js') .
'
/*]]>*/</script>
');

	return analyse_resultat_skel('html_c0776ce7134df44323e37f98c575c0c3', $Cache, $page, '../plugins-dist/medias/prive/squelettes/inclure/colonne-documents.html');
}
?>