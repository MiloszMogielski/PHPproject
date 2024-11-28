<?php
require_once 'init.php';
use app\controllers\CalcCtrl;

switch($action) {
  default:
    $ctrl = new CalcCtrl();
    $ctrl->generateView();
  break;
  case 'calcCompute':
    $ctrl = new CalcCtrl();
    $ctrl->process();
  break;
}
?>