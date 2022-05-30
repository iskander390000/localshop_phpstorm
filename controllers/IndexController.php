    <?php

    /**
 *  Контроллер главной страницы
 * 
 */

    // Подключаем модели
    include_once '../models/CategoriesModel.php';
    include_once '../models/ProductsModel.php';

    function testAction()
    {
	echo 'IndexController.php > testAction';
    }


    /**
 * Формирование главной страницы сайта
 * 
 * @param type $smarty шаблонизатор
 */
    function indexAction($smarty)
    {

	$rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);


	$smarty->assign('pageTitle', 'Main page of sait');
	$smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'index');
	loadTemplate($smarty, 'footer');
    }
