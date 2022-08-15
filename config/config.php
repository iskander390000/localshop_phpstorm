<?php

/**
 * 
 *  Файл настроек
 * 
 */

//> Константы для обращения к контроллерам
define ('PathPrefix', '../controllers/');
define ('PathPostfix', 'Controller.php');
//<



//>  Используемый шаблон
$template = 'default';
$templateAdmin = 'admin';
//$template = 'texturia';

// Пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define ('TemplatePostfix', '.tpl');


// Пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath', "/templates/{$template}/");
define ('TemplateAdminWebPath', "/templates/{$templateAdmin}/");
//<

//> Инициализация шаблонов Smarty
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
//< 