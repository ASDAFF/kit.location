<?
global $DBType, $DB, $MESS, $APPLICATION;
IncludeModuleLangFile(__FILE__);

CModule::AddAutoloadClasses(
	"collected.location",
	array(
		"CRS_Location" => "classes/general/main.php",
		"IPGeoBase" => "classes/general/ipGeo.php"
	)
);
?>