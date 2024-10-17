<?php

include "../classes/user.php"; // Userクラスを読み込む
// this is a sample message for git testing
// this is a sample hisashi test
$user = new User(); // Userクラスのインスタンスを作成

if(isset($_POST['register'])) // フォームが送信されたかチェック
{
    $first_name = $_POST['first_name']; // フォームからのファーストネームを取得
    $last_name = $_POST['last_name']; // フォームからのラストネームを取得
    $username = $_POST['username']; // フォームからのユーザー名を取得
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // フォームからのパスワードをハッシュ化

    $user->register($first_name, $last_name, $username, $password); // Userクラスのregisterメソッドを呼び出し、ユーザーを登録
}
elseif(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user->login($username, $password);
}



