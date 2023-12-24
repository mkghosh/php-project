<?php
class DBConnection
{
    public $conn;
    public function __construct($config, $userName = 'root', $pass = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->conn = new PDO($dsn, $userName, $pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}
