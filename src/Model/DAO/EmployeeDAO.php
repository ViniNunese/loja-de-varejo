<?php
namespace APP\Model\DAO;

use APP\Model\Connection;

class EmployeeDAO implements DAO{
    public function insert($object)
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("INSERT INTO 
        product VALUES (null, ?, ?, ?)");
        $stmt->bindParam(1, $object->names);
        $stmt->bindParam(2, $object->price);
        $stmt->bindParam(3, $object->quantity);
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