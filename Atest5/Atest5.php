<?php

require_once( "WorkingCookies.php");

//создание объекта одиночки 
$cookie =  WorkingCookies::getInstance();

//Установка
WorkingCookies::set('test1','Значение 1');

//редактирование
WorkingCookies::edit('test1','Значение 1',3600);

//считывание
$var_cookie = $cookie->get('test1');


//удаление
WorkingCookies::delete('test1');

