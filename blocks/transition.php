<?php 

        /* 
            Массив с ссылками, условия где в определенной страничке 
            убирается ссылка на эту же страницу.
        */

$arr = [ 
    '<a class="pages" href="/page/yii.php">Yii2</a>', 
    '<a class="pages" href="/page/laravel.php">Laravel</a>',
    '<a class="pages" href="/page/vuejs.php">VueJS</a>', 
    '<a class="pages" href="/page/jquery.php">jQuery</a>', 
    '<a class="pages" href="/page/mysql.php">MySQL</a>', 
    '<a class="pages" href="/page/sql.php">SQL</a>'
];

if ($_SERVER['REQUEST_URI'] == '/page/yii.php') {
    unset($arr[0]);
   }

if ($_SERVER['REQUEST_URI'] == '/page/laravel.php') {
    unset($arr[1]);
   }

if ($_SERVER['REQUEST_URI'] == '/page/vuejs.php') {
    unset($arr[2]);
   }

if ($_SERVER['REQUEST_URI'] == '/page/jquery.php') {
    unset($arr[3]);
   }

if ($_SERVER['REQUEST_URI'] == '/page/mysql.php') {
    unset($arr[4]);
   }

if ($_SERVER['REQUEST_URI'] == '/page/sql.php') {
    unset($arr[5]);
   }

if ($_SERVER['REQUEST_URI'] == '/') {
    unset($arr[0], $arr[1], $arr[2], $arr[3], $arr[4], $arr[5]);
   }

$string = implode("  ", $arr);
echo $string; 







