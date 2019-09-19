<?php

namespace app\models;

class User extends Model
{
    public $id;
    public $login;
    public $pass;

    /**
     * User constructor.
     * @param $login
     * @param $pass
     */
    public function __construct($login = '', $pass = '')
    {
        parent::__construct();
        $this->login = $login;
        $this->pass = $pass;
    }

    public function getTableName()
    {
        return 'users';
    }

}