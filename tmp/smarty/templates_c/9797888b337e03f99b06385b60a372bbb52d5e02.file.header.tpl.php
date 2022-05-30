<?php /* Smarty version Smarty-3.1.7, created on 2022-04-20 09:59:00
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11220618d104b5eeeb5-51469611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1650441534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11220618d104b5eeeb5-51469611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_618d104b64029',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_618d104b64029')) {function content_618d104b64029($_smarty_tpl) {?><html>
   <head>
      <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css"/>
      <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="/js/main.js"></script>
   </head> 
<body>
   <div id="header">
      <h1>
            my shop - интернет магазин
      </h1>
   </div>
   
   <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   
   
   <div id="centerColumn">

<?php }} ?>