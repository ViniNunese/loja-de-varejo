<?php

namespace APP\Model\DAO;

use APP\Model\Connection;

class ProviderDAO implements DAO
{
    public function insert($object)
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("INSERT INTO provider VALUES (null,?,?,?);");
        $stmt->bindParam(1, $object->cnpj);
        $stmt->bindParam(2, $object->name);
        $stmt->bindParam(3, $object->address->id);
        return $stmt->execute();
    }
    public function findOne($id)
    {
    }
    public function findAll()
    {
    }
    public function update($object)
    {
    }
    public function delete($id)
    {
    }
}
