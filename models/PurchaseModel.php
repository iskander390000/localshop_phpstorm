    <?php


    /**
     *  Модель для таблицы продукции (purchase)
     *
     */

    /**
     *  Внесение в БД данных продуктов с привязкойк заказу
     *
     * @param $orderId ID заказа
     * @param $cart массив корзины
     * @return void TRUE в случае успешного добавления в БД
     */
    function setPurchaseForOrder($orderId, $cart)
    {
        $sql = "INSERT INTO purchase
        (order_id, product_id, price, amount)
        VALUES ";

        $values = array();
        // формируем массив строк для запроса для каждого товара
        foreach ($cart as $item)
        {
            $values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
        }

        // преобразовываем массив в строку
        $sql .= implode($values, ', ');
        $rs = mysql_query($sql);

        return $rs;
    }
