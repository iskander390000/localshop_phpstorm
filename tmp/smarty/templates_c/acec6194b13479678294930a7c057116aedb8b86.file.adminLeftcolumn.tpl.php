<?php /* Smarty version Smarty-3.1.7, created on 2022-07-30 23:26:31
         compiled from "../views/admin\adminLeftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:773062ce70cdf191d0-05962552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acec6194b13479678294930a7c057116aedb8b86' => 
    array (
      0 => '../views/admin\\adminLeftcolumn.tpl',
      1 => 1659216369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '773062ce70cdf191d0-05962552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_62ce70cdf19dc',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ce70cdf19dc')) {function content_62ce70cdf19dc($_smarty_tpl) {?>    

    <div id="leftColumn"

        <div id="leftMenu">
            <div class="menuCaption">Меню:</div>
            <a href="/admin/">Главная</a><br/>
            <a href="/admin/category/">Категории</a><br/>
            <a href="/admin/products/">Товар</a><br/>
            <a href="/admin/orders/">Заказы</a>
        </div>

    </div><?php }} ?>