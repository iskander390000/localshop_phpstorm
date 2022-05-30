<?php /* Smarty version Smarty-3.1.7, created on 2022-05-25 21:28:30
         compiled from "../views/default\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21566628e835e783c34-10211191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ee73149e09ac8b024db0d49e528d996d357c0d' => 
    array (
      0 => '../views/default\\user.tpl',
      1 => 1653505393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21566628e835e783c34-10211191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_628e835e9cd46',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628e835e9cd46')) {function content_628e835e9cd46($_smarty_tpl) {?>    

    <h1>Ваши регистрационные данные:</h1>
    <table border="0">
        <tr>
            <td>Логин (email)</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
        </tr>

        <tr>
            <td>Имя</td>
            <td><input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" /></td>
        </tr>

        <tr>
            <td>Тел</td>
            <td><input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" /></td>
        </tr>

        <tr>
            <td>Адрес</td>
            <td><textarea id="newAdress"  /><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
        </tr>

        <tr>
            <td>Новый пароль</td>
            <td><input type="password" id="newPwd1" value="" /></td>
        </tr>

        <tr>
            <td>Повтор пароля</td>
            <td><input type="password" id="newPwd2" value="" /></td>
        </tr>

        <tr>
            <td>Для того чтобы сохранить данные введите текущий пароль</td>
            <td><input type="password" id="curPwd" value="" /></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="button" value="Сохранить изменения" onclick="updateUserData();"/></td>
        </tr>

    </table><?php }} ?>