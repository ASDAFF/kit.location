<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("RS_LOC_AUTODETECT_COM_NAME"),
	"DESCRIPTION" => GetMessage("RS_LOC_AUTODETECT_COM_DESCRIPTION"),
	"SORT" => 10,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "collect_com",
		"SORT" => 2000,
		"NAME" => GetMessage("COLLECT_COM_COMPONENTS"),
		"CHILD" => array(
			"ID" => "autodetect_location",
			"NAME" => GetMessage("COLLECT_COM_SEC_NAME"),
			"SORT" => 10,
		)
	),
);
