<?php

class Cmodel {
//получаем данные из базы данных
  public function GetData(){   
// объявляем адрес хоста, 
    $host = '127.0.0.1';
    $db   = 'blog';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';
// переменная с параметрами для работы с базой
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// передача параметров подключения
    $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];
// создаем класс  с полями
    $pdo = new PDO($dsn, $user, $pass, $opt);

//  Посылает параметризованный запрос на сервер
    $result = $pdo->query('SELECT*FROM news');
// Выбирает все данные из результата запроса и помещает их в массив
    $arrayResult = $result->fetchAll();


       // создаем класс, помещаем его в переменную и 
       //   $mysqli = new mysqli('localhost', 'root', '', 'blog');   

       //отрабатывается вариант неподсоединения к серверу 
       //   if(mysqli_connect_errno()) {
       //       print_f('Соединение не установлено');
       //      exit();
       //}
       //обеспечивается корректная работа с различными шрифтами / кодировка
       //   $mysqli->set_charset('utf8');
       //выбираем данные из таблицы News
       //   $query = "Select * From News";
       //выполняется запрос
       //  $result = $mysqli->query($query);
       //запрос выгружается на сервер
       //  $arrayResult =  $result->fetch_all(MYSQLI_ASSOC);
             
        //$arrayResult[] = array(
        //    'TITLE' => 'Blog hosting site',
        //    'DATE' => '22.06.2020',
        //    'AUTHOR' => 'VolDeMort',
        //    'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //    'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'
        //   );
        //        $arrayResult[] = array(
        //            'TITLE' => 'Blog hosting site',
        //            'DATE' => '21.10.2021',
        //          'AUTHOR' => 'Igor',
        //        'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //      'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'
        //   );
    return $arrayResult;
    }
}