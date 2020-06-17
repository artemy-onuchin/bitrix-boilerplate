<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "description");
$APPLICATION->SetPageProperty("keywords", "key, words");
$APPLICATION->SetPageProperty("title", "title");
$APPLICATION->SetTitle("Home page");
?>

<h1>Some very very very long long website title</h1>
<h2>Some very very very long long website title</h2>
<h3>Some very very very long long website title</h3>
<h4>Some very very very long long website title</h4>
<h5>Some very very very long long website title</h5>
<h6>Some very very very long long website title</h6>

<?$APPLICATION->IncludeComponent(
        "bitrix:main.include", ".default", array(
        "COMPONENT_TEMPLATE" => ".default",
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/home.php",
        "EDIT_TEMPLATE" => ""
    ),
    false
);?>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
