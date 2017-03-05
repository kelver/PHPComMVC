<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 05/03/17
 * Time: 05:20
 */

namespace KMV\Model;


abstract class Table
{
    protected $db;
    protected $table;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "select * from {$this->table}";
        return $this->db->query($query);
    }

    public function find($id)
    {
        $query = "select * from {$this->table} where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}