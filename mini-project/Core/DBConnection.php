<?php
class DBConnection
{
    public $conn;
    public $stmt;
    public function __construct($config, $userName = 'root', $pass = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->conn = new PDO($dsn, $userName, $pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->stmt = $this->conn->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }

    public function getAll() {
        return $this->stmt->fetchAll();
    }

    public function find() {
        return $this->stmt->fetch();
    }

    public function findOrAbort() {
        $result = $this->find();
        return !$result ? abort(Response::NOT_FOUND) : $result;
    }
}
