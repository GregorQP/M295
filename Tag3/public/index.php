<?php
// echo("test");
// $test = new  \M295\Tag3\Test();

// $array = array();
// $array["name"] = 'Chester Tester';

// $v = new Valitron\Validator($array);
// $v->rule('required', 'name');

// if($v->validate()) {
//     echo "Yay! We're all good!";
// } else {
//     // Errors
//     print_r($v->errors());
// }
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use Steampixel\Route;
Route::add('/', function(){
    echo 'Hello World';
});
Route::add('/', function(){
    phpinfo();
});
Route::run('/');