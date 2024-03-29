<?php

namespace app\models;

use app\engine\Db;

/**
 * Class Model
 * @package app\models
 */
abstract class DbModel extends Models
{
    public function getLimit($from, $to)
    {

    }

    public function getWere($name, $value)
    {

    }

    public function insert()
    {
        $params = [];
        $columns = [];
        $tableName = static::getTableName();
        //TODO переделать цикл по state чтобы избавиться от условия
        foreach ($this as $key => $value) {
            if ($key === "id") continue;
            $params[":{$key}"] = $value;
            $columns[] = "`$key`";
        }
        $columns = implode(", ", $columns);
        $values = implode(", ", array_keys($params));

//INSERT INTO `products`(`id`, `name`, `description`, `price`) VALUES (:name, ,[value-4])

        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ($values);";

        Db::getInstance()->execute($sql, $params);
        $this->id = Db::getInstance()->lastInsertId();
    }

    public function delete()
    {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public function update()
    {
        //TODO реализовать умный update (цикл по state)
        $tableName = static::getTableName();
        $key_str = null;
        $params = null;
        foreach ($this->state as $key => $value) {
            if ($value) {
                if (is_null($key_str)) {
                    $key_str .= "`{$key}` = ?";
                } else {
                    $key_str .= ", `{$key}` = ?";
                }
                $params[] = $this->$key;
                $this->state[$key] = false;
            }
        }
        if (!$params) {
            return 'Запись не добавлена, поля пустые...';
        }

//        var_dump($params);

//        UPDATE `products` SET `name`=:name,`description`=:description,`price`=:price WHERE id = $this->id

        $sql = "UPDATE `{$tableName}` SET {$key_str} WHERE id = {$this->id};";

//        var_dump($sql);

        return Db::getInstance()->execute($sql, $params);
    }

    public function save()
    {
        if (is_null($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public static function getOne($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, ['id' => $id], static::class);
    }

    public static function getAll()
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

}