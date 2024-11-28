<?php
require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php';

function &getConfig() {
  global $conf;
  return $conf;
}

require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages() {
  global $msgs;
  return $msgs;
}

$smarty = null;

function &getSmarty() {
  global $smarty;

  if(!isset($smarty)) {
    include_once 'lib/smarty/Smarty.class.php';
    $smarty = new Smarty();
    $smarty->assign('conf', getConfig());
    $smarty->assign('msgs', getMessages());
    $smarty->assign('default_page_title', 'Kalkulator kredytowy');
    $smarty->assign('default_page_description', 'Prosty kalkulator kredytowy');
    // Ustawienie lokalizacji szablonow / widokow
    $smarty->setTemplateDir(array(
      'one' => getConfig()->root_path.'/app/views',
      'two' => getConfig()->root_path.'/app/views/templates'
    ));
  }
  return $smarty;
}

require_once 'core/ClassLoader.class.php';
$classLoader = new core\ClassLoader();

function &getClassLoader() {
  global $clasLoader;
  return $classLoader;
}

require_once 'core/functions.php';
$action = getFromRequest('action');
?>