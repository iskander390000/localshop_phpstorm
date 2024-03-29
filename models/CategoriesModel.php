    <?php

    /**
    * Модель для таблицы (categories)
    *
    */

    /**
     * Получить дочернии категории для категории $catId
     *
     * @param $catId int ID категории
     * @return void (array) массив дочерних категорий
     */

    function   getChildrenForCat($catId){
        $sql = "SELECT* 
            FROM categories
            WHERE
            parent_id = '{$catId}'" ;
        $rs = mysql_query($sql);

        return createSmartyRsArray($rs);

    }



    /**
     *
     * Получить главные категории с привязками дочерних
     *
     * @return array массив категорий
     *
     */


    function getAllMainCatsWithChildren(){
        $sql = "SELECT* 
            FROM categories
            WHERE
            parent_id = 0" ;

        $rs = mysql_query($sql);

        $smartyRs = array();

        while ($row = mysql_fetch_assoc($rs)){
            $rsChildren = getChildrenForCat($row['id']);

            if ($rsChildren) {
                $row['children'] = $rsChildren;
            }

            $smartyRs[] = $row;
        }

        return $smartyRs;
    }

    /**
     * Получить данные категории по id
     *
     * @param $catId(int) ID категории
     * @return array массив - строка категории
     */


    function getCatById($catId)
     {
        $catId = intval($catId);
        $sql = "SELECT*
                FROM categories
                WHERE 
                id = '{$catId}'";

        $rs = mysql_query($sql);

        return mysql_fetch_assoc($rs);

    }


    /**
     * Получить все главные категории (категории которые не являются дочерними)
     *
     * @return array|false массив категорий
     */
    function getAllMainCategories()
    {
        $sql = "SELECT*
                FROM categories
                WHERE parent_id = 0";

        $rs = mysql_query($sql);

        return createSmartyRsArray($rs);
    }


    /**
     * Добаление новой категории
     * @param  string $catName Название категории
     * @param integer $catParentId ID родительской категории
     * @return integer id новой категорий
     */
    function insertCat($catName, $catParentId = 0)
    {
        // готовим запрос
        $sql = "INSERT INTO
                categories (`parent_id`, `name`)
                VALUES ('{$catParentId}', '{$catName}')";

        // выполняем запрос
        mysql_query($sql);

        // получем id добавленной записи
        $id = mysql_insert_id();

        return $id;
    }

    /**
     * Получить все категории
     *
     * @return array|false массив категорий
     */

    function getAllCategories()
    {
        $sql = 'SELECT*
                FROM categories
                ORDER BY parent_id ASC';

        $rs = mysql_query($sql);

        return createSmartyRsArray($rs);

    }

    /**
     *Обновление категории
     *
     * @param $itemId int   ID категории
     * @param $parentId int ID главной категории
     * @param $newName новое имя категории
     * @return bool|resource type
     */

    function updateCategoryData($itemId, $parentId = -1, $newName ='')
    {
        $set =array();

        if($newName)
        {
            $set[] = "`name` = '{$newName}'";
        }

        if($parentId > -1)
        {
            $set[] = "`parent_id` = '{$parentId}'";
        }

        $setStr = implode($set, ", ");
        $sql = "UPDATE categories
        SET {$setStr}
        WHERE id = '{$itemId}'";

        $rs = mysql_query($sql);

        return $rs;
    }

    



















