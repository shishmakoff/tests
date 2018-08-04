<?php

$categories = array(

    array(

        "id" => 1,
        "title" => "Обувь",
        'children' => array(
            array(
                'id' => 2,
                'title' => 'Ботинки',
                'children' => array(
                    array('id' => 3, 'title' => 'Кожа'),
                    array('id' => 4, 'title' => 'Текстиль'),
                    ),
                ),
            array(
                'id' => 5,
                'title' => 'Кроссовки',
                ),
            )),
    array(
        "id" => 6,
        "title" => "Спорт",
        'children' => array(array('id' => 7, 'title' => 'Мячи'))),
    );


function searchCategory($categories, $id)
{

    global $title;

    foreach ($categories as $category)
    {

        if (isset($title))
        {

            return $title;

        }

        if ($category['id'] == $id)
        {

            $title = $category['title'];

            return $title;

        }

        if (isset($category['children']))
        {
            
            searchCategory($category['children'], $id);
            
        }

    }
    
    if (!isset($title)){
        
        return false;
        
    }

}




$id = 7;

$rez = searchCategory($categories, $id);

if ($rez){
    
    echo  $id ,"->",$rez;    
}
else{
    
    echo "Значение с идентификатором ", $id, " не найдено!";
    
}

?>