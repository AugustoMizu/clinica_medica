<?php
class config
{
    private $dsn;
    private $username;
    private $password;
    private $pdo;

    public function __construct()
    {
        $this->dsn = "mysql:dbname=clinicaMedica;host=localhost:3307"; //mudei a porta para fucionar no meu pc
        $this->username = "root";
        $this->password = ""; //OgtoQmorr10#000*** cimatec
        $this->pdo = new PDO($this->dsn, $this->username, $this->password);
    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}
?>