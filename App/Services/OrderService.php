<?php

namespace App\Services;
use App\Repositories\OrderRepository;
use App\Models\Order;
use PDOException;

class OrderService
{
    private $orderRepository;
    
function __construct()
{
    
}

public function getAll( )
{
    $result = [];
    
    try {
    $orderRepository= new OrderRepository;;

        $orderRepository->getAll();
        return $orderRepository;
    } catch (PDOException $Ex) {
    }
}    
}