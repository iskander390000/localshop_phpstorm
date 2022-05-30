    <?php

    session_start(); //стартуем сессию
    // если в сессии нет массива корзины, то создаем его
    if (! isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
    }


    include_once '../config/config.php';         // Инициализация настроек
    include_once '../config/db.php';         // Инициализация базы данных
    include_once '../library/mainFunctions.php'; // Основные функции



    // Определяем с каким контролером будем работать

    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

    // Определяем Action , какая функция будет работать и формировать страницу

    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

    // если в сессии есть данные об авторизированном пользователе, то передаем
    // их в шаблон
    if (isset($_SESSION['user']))
    {
        $smarty->assign('arUser', $_SESSION['user']);
    }


    // инициализируем переменную шаблонизатора количества элементов в корзине
    $smarty->assign('cartCntItems', count($_SESSION['cart']));


    loadPage($smarty, $controllerName, $actionName); // Функция загрузки страницы


