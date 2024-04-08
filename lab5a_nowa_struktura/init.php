<?php
require_once dirname(__FILE__)."/core/Config.class.php";
$conf = new Config();
include dirname(__FILE__)."/config.php";

function &getConf(){ global $conf; return $conf; }

require_once getConf()->root_path."/core/Messages.class.php";
$messages = new Messages();

function &getMessages(){ global $messages; return $messages; }

$smarty = null;

function &getSmarty(){
    global $smarty;
    if(!isset($smarty)){
        include_once getConf()->root_path."/lib/smarty/libs/Smarty.class.php";
        $smarty = new Smarty();
		$smarty->assign('conf', getConf());
        $smarty->assign('messages', getMessages());

        $smarty->setTemplateDir(array(
            'ichi' => getConf()->root_path."/app/view",
            'ni' => getConf()->root_path."/app/view/templates"
        ));
    }
    return $smarty;
}

require_once getConf()->root_path.'/core/functions.php';
$action = getFromRequest('action');