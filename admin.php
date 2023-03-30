<?php 

$NETCAT_FOLDER = join(strstr(__FILE__, "/") ? "/" : "\\", array_slice(preg_split("/[\/\\\]+/", __FILE__), 0, -4)).( strstr(__FILE__, "/") ? "/" : "\\" );
require_once $NETCAT_FOLDER . 'vars.inc.php';
require_once $ADMIN_FOLDER . 'function.inc.php';

$module_keyword = "mood";
// load modules env
if (!isset($MODULE_VARS)) {
    $MODULE_VARS = $nc_core->modules->get_module_vars();
}
// UI config
require_once ($ADMIN_FOLDER."modules/ui.php");
// UI functional
$UI_CONFIG = new ui_config_module($module_keyword);


echo("<h1>123 321</h1>");


EndHtml();