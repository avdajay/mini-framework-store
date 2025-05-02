<?php

namespace Aries\MiniFrameworkStore\Models;

use Aries\MiniFrameworkStore\Includes\Database;

class Cart extends Database
{
    // public function __construct($id, $name, $description, $price, $image_url)
    // {
    //     parent::__construct(); // Call the parent constructor to establish the connection
    //     $this->db = $this->getConnection(); // Get the connection instance
    // }

    public function getAll()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}