
 <?php
/*
 * auto_rss_pro — заготовка модуля для DLE
 *
 * @author     Talik <talik@tcse-cms.com>
 */

if (!defined('DATALIFEENGINE') || !defined('LOGGED_IN')) {
	die('Hacking attempt!');
}
/**
 * @global $member_id
 */

define('MODULE_DIR', ENGINE_DIR . '/modules/mod_tcse/auto_rss_pro');

echoheader('DLE-auto_rss_pro', 'auto_rss_pro — заготовка модуля для DLE');

include MODULE_DIR . '/admin/main.php';

include MODULE_DIR . '/admin/footer.php';

echofooter();

