<?php

/*
 * Squelette : plugins/auto/theme_maparaan/v1.0.1/body.html
 * Date :      Wed, 08 Jun 2011 16:01:50 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/theme_maparaan/v1.0.1/body.html
// Temps de compilation total: 2.347 ms
//

function html_85fc513661eb3c23e0233c1ce1534b8d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div id="padd-header">
	<div id="padd-header-wrapper">
		<div class="padd-box padd-box-title">
			
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/entete') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/theme_maparaan/v1.0.1/body.html\',\'html_85fc513661eb3c23e0233c1ce1534b8d\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
	</div>	
</div>
<div id="padd-categories" class="padd-box padd-box-categories">
	<h2>Categories</h2>
	
	<div id="nav" class="padd-interior">
		' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/barre-nav') . ', array_merge('.var_export($Pile[0],1).',array(\'identifiant\' => ' . argumenter_squelette('barrenav') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/theme_maparaan/v1.0.1/body.html\',\'html_85fc513661eb3c23e0233c1ce1534b8d\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</div>
</div>
			
<div id="page">
	<div id="page-wrapper">
		<div id="contenu">		
			
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'contenu/' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type', null),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/theme_maparaan/v1.0.1/body.html\',\'html_85fc513661eb3c23e0233c1ce1534b8d\',\'\',21,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		</div>
				
		<div id="sidebar">
			
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'navigation/' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type', null),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/theme_maparaan/v1.0.1/body.html\',\'html_85fc513661eb3c23e0233c1ce1534b8d\',\'\',26,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'extra/' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'type', null),true)))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/theme_maparaan/v1.0.1/body.html\',\'html_85fc513661eb3c23e0233c1ce1534b8d\',\'\',27,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>	
		</div>
		<div class="nettoyeur"></div>
	</div>		
</div>		

<div id="footer">
	' .
'
	<div id=\'footer-content\'>
		<div id=\'footer-content-wrapper\'>
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/pied') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'plugins/auto/theme_maparaan/v1.0.1/body.html\',\'html_85fc513661eb3c23e0233c1ce1534b8d\',\'\',37,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			<div id="footer-copyleft">' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc-theme-copyleft') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins/auto/theme_maparaan/v1.0.1/body.html\',\'html_85fc513661eb3c23e0233c1ce1534b8d\',\'\',38,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'></div>
		</div>
	</div>
</div>
');

	return analyse_resultat_skel('html_85fc513661eb3c23e0233c1ce1534b8d', $Cache, $page, 'plugins/auto/theme_maparaan/v1.0.1/body.html');
}
?>