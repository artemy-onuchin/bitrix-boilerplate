<?php
    define('RS_PATH', '/local/assets/');
    define('INC_PATH', $_SERVER["DOCUMENT_ROOT"].'/local/include/');

    AddEventHandler('main', 'OnEpilog', '_Check404Error', 1);
    function _Check404Error()
    {
        if (CHTTP::GetLastStatus() == '404 Not Found' && !defined('ADMIN_SECTION') && ERROR_404_PAGE !== 'Y') {
            global $APPLICATION;
            $APPLICATION->RestartBuffer();
            require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH.'/header.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/404.php';
            require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH.'/footer.php';
        }
    }
?>
