<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 20/09/2018
 * Time: 22:53
 */
require __DIR__ . "/CURD.php";


class Category extends CURD
{
    public function __construct ()
    {
        parent::__construct();
    }

    public function showCategory ()
    {
        parent::show();
    }

    public function insert ($name)
    {
        $sql = "INSERT INTO category (category_name) VALUE ('$name')";
        $this->conn->exec($sql);
    }

    public function update ($id, $name)
    {
        $sql = "UPDATE `category` SET `category_name` = '$name' WHERE `id` = '$id'";
        $this->conn->exec($sql);
    }

    public function delete ($id)
    {
        $sql = "DELETE FROM `category` WHERE `id` = '$id'";
        $this->conn->exec($sql);
    }
}

