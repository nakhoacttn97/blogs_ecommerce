<?php

class loginmodel extends DModel
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($table_admin, $username, $password)
    {
        $sql = "SELECT * FROM $table_admin WHERE username = ? AND password = ? ";
        $result = $this->db->affectedRow($sql, $username, $password);
        return $result;
    }

    public function getlogin($table_admin, $username, $password)
    {
        $sql = "SELECT * FROM $table_admin WHERE username = ? AND password = ? ";
        $result = $this->db->selectUser($sql, $username, $password);
        return $result;
    }
}
