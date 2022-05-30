    <?php

        /**
         * Модель для таблицы продукции (products)
         *
         */


    /**
     * Получаем последние добовленые товары
     *
     * @param $limit (int) Лимит товаров
     * @return array Массив товаров
     */

        function getLastProducts($limit = null)
        {

            $sql = "SELECT* 
            FROM `products`
            ORDER BY id DESC";

            if ($limit){
                $sql .= " LIMIT {$limit}";
            }

            $rs = mysql_query($sql);


            return createSmartyRsArray($rs);

        }


    /**
     * Получить продукты для категории $itemId
     *
     * @param $itemId ID категории
     * @return array|false массив продуктов
     */

        function getProductsByCat($itemId)
        {
            $itemId = intval($itemId);
            $sql = "SELECT*
                    FROM products
                    WHERE category_id = '{$itemId}'";

            $rs = mysql_query($sql);

            return createSmartyRsArray($rs);

        }


    /**
     * Получить данные продукта по ID
     *
     * @param $itemId integern ID продукта
     * @return void array массив данных продукта
     */
     function getProductById($itemId)
     {
         $itemId = intval($itemId);
         $sql =  "SELECT* 
            FROM products
            WHERE id = '{$itemId}'";

         $rs = mysql_query($sql);
         return mysql_fetch_assoc($rs);
     }


    /**
     * Получить список продуктов из массива идентификаторов (IDs)
     *
     * @param $itemIds array массив идентификаторов продукта
     * @return array|false массив данных продуктов
     */


     function getProductsFromArray($itemIds)
     {

         $strIds = implode($itemIds, ', ');
         $sql = "SELECT* 
            FROM products
            WHERE id in ({$strIds})";
         $rs = mysql_query($sql);

         return createSmartyRsArray($rs);
     }
















