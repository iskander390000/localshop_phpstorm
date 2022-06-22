    <?php
        /**
         *  Модель для таблицы заказов (orders)
         *
         */

    /**
     *  Создание заказа(без привязки товара)
     *
     * @param $name
     * @param $phone
     * @param $adress
     * @return void ID созданного товара
     */
        function makeNewOrder($name, $phone, $adress)
        {
            //> инициализация переменных
            $userId = $_SESSION['user']['id'];
            $comment = "id пользователя: {$userId}<br />
                        Имя: {$name}<br />
                        Тел: {$adress}";


            $dataCreated = date('Y.m.d H:i:s');
            $userIp = $_SERVER['REMOTE_ADDR'];
            //<

            // формирование запроса в БД
            $sql = "INSERT INTO
            orders (`user_id`, `date_created`, `date_payment`,
                    `status`, `comment`, `user_ip`)
            VALUES ('{$userId}', '{$dataCreated}', null ,
                    '0', '{$comment}', '{$userIp}')";

            $rs = mysql_query($sql);

            // получить id созданного запроса
            if ($rs)
            {
               $sql = "SELECT id
               FROM orders
               ORDER BY id DESC 
               LIMIT 1";
               $rs = mysql_query($sql);
               // преобразование результата запроса
                $rs = createSmartyRsArray($rs);

                // возвращаем id созданного зпроса
                if (isset($rs[0]))
                {
                    return $rs[0]['id'];
                }
            }
            return false;
        }
