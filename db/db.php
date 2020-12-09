<?php
//подключаем файлик для работы с PDO
require_once 'Connection.php';
//конфиг подключения к бд
$config = ['driver' => 'mysql', 'host' => '127.0.0.1', 'dbname' => 'itcube', 'charset' => 'utf8', 'user' => 'root', 'password' => 'root'];
//открываем непрерывное соеднинение
$db = new Connection($config);