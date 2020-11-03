<?
global $DBType, $DB, $MESS, $APPLICATION;
IncludeModuleLangFile(__FILE__);

CModule::AddAutoloadClasses(
	"kit.location",
	array(
		"CRS_Location" => "classes/general/main.php",
		"IPGeoBase" => "classes/general/ipGeo.php"
	)
);
?>