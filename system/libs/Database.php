<?php

class Database extends PDO
{

    public function __construct($connect, $user, $pass)
    {
        parent::__construct($connect, $user, $pass);
    }

    public function select($sql, $data = [], $fetchStyle = PDO::FETCH_ASSOC)
    {
        $statement = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->bindParam($key, $value);
        }

        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function insert($table, $data)
    {
        $keys = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO $table ($keys) VALUES ($values)";
        $statement = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->bindValue(":" . $key, $value);
        }

        return $statement->execute();
    }

    public function update($table, $data, $cond)
    {
        $updateKeys = NULL;
        foreach ($data as $key => $value) {
            $updateKeys .= "$key = :$key,";
        }
        $updateKeys = rtrim($updateKeys, ",");

        $sql = "UPDATE $table SET $updateKeys WHERE $cond";
        $statement = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        return $statement->execute();
    }

    public function delete($table, $cond, $limit = 1)
    {
        $sql = "DELETE FROM $table WHERE $cond LIMIT $limit";

        return $this->exec($sql);
    }

    public function affectedRow($sql, $username, $password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($username, $password));
        $result = $statement->rowCount();
        return $result;
    }

    public function selectUser($sql, $username, $password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($username, $password));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
