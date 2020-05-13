
 <?php
/*
 * Auto RSS Pro by TCSE-cms.com
 *
 * @author     Talik <talik@tcse-cms.com>
 */

if (!defined('DATALIFEENGINE') || !defined('LOGGED_IN')) {
	die('Hacking attempt!');
}
/**
 * @global $member_id
 */

define('MODULE_DIR', ENGINE_DIR . '/modules/mod_tcse/autorss_pro');

echoheader('Auto RSS Pro by TCSE-cms.com', 'Автоматическая публикация новостей из RSS каналов. AutoRSS Pro v.1.0.3	от 17.01.2019 основана на версии AutoRSS v.0.7 Павла Пафнутия Белоусова.');

include MODULE_DIR . '/admin/main.php';

include MODULE_DIR . '/admin/footer.php';

echofooter();

