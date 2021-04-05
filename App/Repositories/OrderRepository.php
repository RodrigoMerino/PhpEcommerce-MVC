<?php

namespace App\Repositories;
use App\Models\Order;
use PDO;

class OrderRepository extends \Core\Model
{
    private $_db;

    public function __construct() {
        $this->_db = static::getDB();
    }

    public function getAll() :array
    {
        try {
            $stmt = $this->_db->prepare('select * from orders');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS,'\\App\Models\Order');
            return $result;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}