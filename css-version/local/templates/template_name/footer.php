<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<?=GetMessage('SITEDOMAIN')?>
<?if(date("Y")>2020){echo'2020-'.date("Y");}elseif(date("Y")==2020){echo'2020';}else{echo date("Y");}?>
<?=GetMessage('COPYRIGHT')?>
<?=GetMessage('DEVELOPER')?>

<? require(INC_PATH.'footer_scripts.php'); ?>

</body>
</html>
