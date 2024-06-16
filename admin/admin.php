<?php require_once '../db/connect.php'; // Подключение к базе данных?> 
<?php session_start(); //Начало сессии ?> 
<?php
$login= $_POST["login"];
$password= $_POST["password"]; // Получение логина и пароля из POST-запроса
// Подготовка запроса к базе данных для выборки пользователя по логину и паролю
$sql = $pdo -> prepare("SELECT id, login FROM user WHERE login=:login AND password=:password");
// Выполнение запроса с передачей данных логина и пароля в виде параметров
$sql -> execute(array('login' => $login,'password'=>$password));
// Получение результата запроса в виде ассоциативного массива
$array=$sql -> fetch(PDO::FETCH_ASSOC);
// Если найден пользователь с указанным логином и паролем
if($array['id']>0){
     // Сохранение логина пользователя в сессии
    $_SESSION['login']= $array['login'];
    // Перенаправление на страницу администратора
    header('Location:/admin.php');
}
else{
     // Если пользователь с указанными логином и паролем не найден,
    // перенаправление на страницу входа снова
    header('Location:/login.php');
}
?>