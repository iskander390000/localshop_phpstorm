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



















