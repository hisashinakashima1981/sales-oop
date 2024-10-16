<?php

class Database
// // データベース接続に必要な情報を保存するプロパティ
{
    private $server_name = "localhost";
    // // データベースサーバーのアドレス
    private $username = "root";
    // // データベースに接続するためのユーザー名
    private $password = "";
    // データベースに接続するためのパスワード
    private $db_name = "sales_oop";
    // 接続するデータベースの名前
    protected $conn;
    // データベース接続オブジェクトを保存するプロパティ

    // クラスがインスタンス化されたときに自動的に呼び出されるコンストラクタ
    public function __construct() 
        // データベースに接続し、接続オブジェクトを $conn プロパティに保存
    {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
            // 接続にエラーがあるかどうかをチェック
        if($this->conn->connect_error)
        {
            // 接続に失敗した場合はエラーメッセージを表示してスクリプトを終了
            die("Unable to connect to the database:". $this->conn->connect_error);
        }
    }

}
?>