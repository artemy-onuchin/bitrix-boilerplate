<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<![endif]-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
<title><? $APPLICATION->ShowTitle();?></title>
<?$APPLICATION->ShowHead();?>

<?if($APPLICATION->GetCurDir() === '/'){?>
<link rel="canonical" href="https://<?=SITE_SERVER_NAME?>/" />
<?}?>

<!-- ICON -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Mobile Web-app fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">

<!-- STYLE -->
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/normalize.min.css");?>
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/main.css");?>
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/header.css");?>
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/navigation.css");?>
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/components.css");?>
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/footer.css");?>
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/pages.css");?>
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/responsive.css");?>
