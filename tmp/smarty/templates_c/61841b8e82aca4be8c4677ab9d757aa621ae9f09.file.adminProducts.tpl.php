<?php /* Smarty version Smarty-3.1.7, created on 2022-08-15 21:17:05
         compiled from "../views/admin\adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2293262e5920b6a4ad8-73746168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61841b8e82aca4be8c4677ab9d757aa621ae9f09' => 
    array (
      0 => '../views/admin\\adminProducts.tpl',
      1 => 1660590928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2293262e5920b6a4ad8-73746168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_62e5920b9bcac',
  'variables' => 
  array (
    'rsCategories' => 0,
    'itemCat' => 0,
    'rsProducts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62e5920b9bcac')) {function content_62e5920b9bcac($_smarty_tpl) {?><h2>Товар</h2>
    <input type="button" onclick="createXML();" value="Сохранить в XML">
    <div id="xml-place"></div>
    <hr>

    Импорт
    <form action="/admin/loadfromxml/" method="post" enctype="multipart/form-data">
        <input type="file" name="filename"><br>
        <input type="submit" value="Загрузить"><br>
    </form>
    <hr>

    <table border="1" cellpadding="1" cellspacing="1">
        <caption>Добавить продукт</caption>
        <tr>
            <th>Название</th>
            <th>Цена</th>
            <th>Категория</th>
            <th>Описание</th>
            <th>Сохранить</th>
        </tr>

        <tr>
            <td>
                <input type="edit" id="newItemName" value=""/>
            </td>

            <td>
                <input type="edit" id="newItemPrice" value=""/>
            </td>
            <td>
                <select id="newItemCatId">
                    <option value="0">Главная Категория
                        <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                        <?php } ?>
                </select>
            </td>
            <td>
                <textarea id="newItemDesc"></textarea>
            </td>


            <td>
                <input type="button" value="Сохранить" onclick="addProduct();"/>
            </td>
        </tr>
    </table>

    <table border="1" cellpadding="1" cellspacing="1">
        <caption>Редактировать</caption>
        <tr>
            <th>№</th>
            <th>ID</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Категория</th>
            <th>Описание</th>
            <th>Удалить</th>
            <th>Изображение</th>
            <th>Сохранить</th>
        </tr>
         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
            <tr>
                <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td>
                    <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
                </td>
                <td>
                    <input type="edit" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"/>
                </td>
                <td>
                    <select id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <option value="0">Главная Категория
                        <?php  $_smarty_tpl->tpl_vars['itemCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->key => $_smarty_tpl->tpl_vars['itemCat']->value){
$_smarty_tpl->tpl_vars['itemCat']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id']==$_smarty_tpl->tpl_vars['itemCat']->value['id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                        <?php } ?>
                    </select>
                </td>
                <td>
                    <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                    </textarea>
                </td>
                <td>
                    <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>checked="checked"<?php }?>/>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['image']){?>
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
                    <?php }?>
                    <form action="/admin/upload/" method="post" enctype="multipart/form-data">
                        <input type="file" name="filename"><br>
                        <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="submit" value="Загрузить"><br>
                    </form>
                </td>
                <td>
                    <input type="button" value="Сохранить" onclick="updateProduct('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
                </td>
            </tr>
         <?php } ?>
    </table><?php }} ?>