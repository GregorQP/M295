<?php
session_start();

$data = $_POST;
if($data['username'] == 'admin'){
    if($data['password'] = '1234'){
        $_SESSION['login'] = 1;
    }else{
        $_SESSION['login'] = 0;
    }
}

if(isset($_GET['logout'])){
    $_SESSION['login'] = 0;
}
$_SESSION['login'] = 1;
echo $_SESSION['login'];

if(isset($_SESSION['login']) && $_SESSION['login']){
    echo 'Angemeldet';
}else{
    echo '
    <a href="login.php?logout">Logout</a>
    <hr>
    <h1>Inhalt</h1>';
}
echo '<pre>';
print_r($_POST);
echo '</pre>';

/*
<a href="https://localhost:84/login.php">LOGIN :)- Home</a>

<hr>
<form action="login.php" method="post">
    <input type="submit" name="" id="" value="submit">
</form>
*/