<?
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Error: Page not found!");
?>

<h1>404</h1>
<h2>Page not found!</h2>
<a href="/">Go to homepage</a>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
