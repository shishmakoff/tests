<?php

$tags = ["<table>", "<tr>", "<td>", "</td>", "</tr>", "<td>", "</td>",
    "</table>", "<a>", "</a>"];



function valideteTags($arrayTags)
{

    while (count($arrayTags) >= 2)
    {

        foreach ($arrayTags as $idx => $tag)
        {

            $mask = '/<\/[A-Za-z]/';

            if (preg_match($mask, $tag))
            {


                if ((mb_strtolower($arrayTags[$idx - 1]) == mb_strtolower(str_replace('/', '', $arrayTags[$idx]))) and $idx >0)
                {

                    array_splice($arrayTags, $idx - 1, 2);

                    break;

                } else
                {
                    return false;
                }

            }
            ;
        }
    }

    if (count($arrayTags) == 0)
    {
        return true;
    }


}


if (valideteTags($tags))
{
    echo "Корректный HTML";
} else
{
    echo "Некорректный HTML";
}


?>