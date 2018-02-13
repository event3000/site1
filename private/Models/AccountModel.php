<?php
namespace Web\Concert\Models;

use Web\Engine\DB;

class AccountModel
{
    private $db;
    private $table_name;
    const USER_ADD = 'user add';
    const USER_AUTH = 'user auth';
    const ERROR = 'error';

    function __construct()
    {
        $this->db = DB::getInstance();
        $this->table_name = 'users';
    }

    public function regUser($data)
    {
        $sql = "SELECT login FROM $this->table_name WHERE login=:login";
        if ($this->db->selectByParam($sql, ['login'=>$data['login']])) {
            return self::ERROR;
        }

        $sql = "INSERT INTO $this->table_name (login, hash, email, avatar, state) 
VALUES (:login, :hash, :email, :avatar, :state)";
        $params = [
            'login'=> $data['login'],
            'hash'=> password_hash($data['pwd'], PASSWORD_DEFAULT),
            'email'=> $data['email'],
            'avatar'=> $this->generateDefaultAvatar('user'),
            'state'=> 'user'
        ];
        if (!$this->db->insertIntoTable($sql, $params)) {
            return self::ERROR;
        }
        return self::USER_ADD;
    }

    private function generateDefaultAvatar($state)
    {
        return $state;
    }

    public function authUser($data)
    {
        $sql = "SELECT login, hash FROM $this->table_name WHERE login=:login";

        $result = $this->db->selectByParam($sql, ['login'=>$data['login']]);
        if ($result) {
            if (password_verify($data['pwd'], $result['hash'])) {
                return self::USER_AUTH;
            }
        }
        return self::ERROR;
    }

}