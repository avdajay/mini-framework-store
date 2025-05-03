<?php

namespace Aries\MiniFrameworkStore\Models;

use Aries\MiniFrameworkStore\Includes\Database;
use Carbon\Carbon;

class Checkout extends Database
{

    private $db;

    public function __construct()
    {
        parent::__construct(); // Call the parent constructor to establish the connection
        $this->db = $this->getConnection(); // Get the connection instance
    }

    public function guestCheckout($data)
    {
        $sql = "INSERT INTO orders (customer_id, guest_name, guest_phone, guest_address, total, created_at, updated_at) VALUES (:customer_id, :guest_name, :guest_phone, :guest_address, :total, :created_at, :updated_at)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'customer_id' => null,
            'guest_name' => $data['name'],
            'guest_phone' => $data['phone'],
            'guest_address' => $data['address'],
            'total' => $data['total'],
            'created_at' => Carbon::now('Asia/Manila'),
            'updated_at' => Carbon::now('Asia/Manila')
        ]);

        return $this->db->lastInsertId();
    }

    public function userCheckout($data)
    {
        $sql = "INSERT INTO orders (customer_id, guest_name, guest_phone, guest_address, total, created_at, updated_at) VALUES (:customer_id, :guest_name, :guest_phone, :guest_address, :total, :created_at, :updated_at)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'customer_id' => $data['user_id'],
            'guest_name' => null,
            'guest_phone' => null,
            'guest_address' => null,
            'total' => $data['total'],
            'created_at' => Carbon::now('Asia/Manila'),
            'updated_at' => Carbon::now('Asia/Manila')
        ]);

        return $this->db->lastInsertId();
    }

    public function saveOrderDetails($data)
    {
        $sql = "INSERT INTO order_details (order_id, product_id, quantity, price, subtotal) VALUES (:order_id, :product_id, :quantity, :price, :subtotal)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'order_id' => $data['order_id'],
            'product_id' => $data['product_id'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'subtotal' => $data['subtotal']
        ]);
    }

}