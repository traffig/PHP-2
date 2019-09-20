<?php

namespace app\engine;

use app\traits\Tsingletone;

class Db
{
    private $config_db = [
        'driver' => 'mysql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => '',
        'database' => 'php2_shop',
        'charset' => 'utf8'
    ];

    use Tsingletone;

    private $connection = null;

    private function getConnection()
    {
        if (is_null($this->connection)) {
            $this->connection = new \PDO($this->prepareDSNstring(),
                $this->config_db['login'],
                $this->config_db['password']
            );
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    private function prepareDSNstring()
    {
        return sprintf('%s:host=%s;dbname=%s;charset=%s',
            $this->config_db['driver'],
            $this->config_db['host'],
            $this->config_db['database'],
            $this->config_db['charset']
        );
    }

    private function query($sql, $params)
    {
        $dbh = $this->getConnection()->prepare($sql);
        $dbh->execute($params);
        return $dbh;
    }

    public function execute($sql, $params = [])
    {
        $this->query($sql, $params);
        return true;
    }

    public function queryOne($sql, $params = [])
    {
        return $this->queryAll($sql, $params)[0];
    }

    public function queryAll($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchAll();
    }

}