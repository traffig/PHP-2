<?php


namespace app\models;


class Order extends Model
{
    private $id;
    private $session_id;
    private $email;
    private $status;

    /**
     * Order constructor.
     * @param $session_id
     * @param $email
     * @param $status
     */
    public function __construct($session_id, $email, $status)
    {
        $this->session_id = $session_id;
        $this->email = $email;
        $this->status = $status;
    }


    public function getTableName()
    {
        return 'order';
    }

}