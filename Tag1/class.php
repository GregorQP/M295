<?php
class myClass{
    public function __construct(){

    }
    public function __destruct(){
        http_response_code(200);
        header("HTTP/1.0 200 OK");
        header("Content-type: text/html; charset=UTF-8");
        header("Cache-Control: max-age=0,private,must-revalidate");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    }
}