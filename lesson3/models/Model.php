<?php

namespace app\models;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function insert()
    {
        $tableName = $this->getTableName();
        $key_str = '';
        $key_placeholder = '';
        foreach ($this as $key => $value) {
            if ($key !== 'id' && $key !== 'db' && $value !== '') {
                if ($key_str == '') {
                    $key_str = "{$key}";
                    $key_placeholder = "?";
                } else {
                    $key_str .= ", {$key}";
                    $key_placeholder .= ", ?";
                }
                $params[] = $value;
            }
        }
        if (!$params) {
            return 'Запись не добавлена, поля пустые...';
        }
        $sql = "INSERT INTO {$tableName} ({$key_str}) VALUES ({$key_placeholder})";
//        var_dump($sql);
//        var_dump($params);
        $this->db->execute($sql, $params);
    }

    public function getOne($id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, ['id' => $id]);
    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

}