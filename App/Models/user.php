<?php

namespace App\Models;

use PDO;
use PDOException;

abstract class user extends \Core\Model
{
    public function __construct()
    {
        $db = static::getDB();
    }

    public static function login($username, $password)
    {
        try {
            $db = static::getDB();

            $stmt = $db->prepare('SELECT *  FROM users WHERE  username = :username ');
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $results = $stmt->fetch(PDO::FETCH_OBJ);

            $hashedPassword = $results->userpassword;
            
            if (password_verify($password, $hashedPassword)) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function register($data)
    {
        try {

            $db = static::getDB();
            $stmt = $db->prepare('INSERT INTO users (username, userpassword) VALUES (:username, :userpassword)');
            $stmt->bindParam(':username', $data['name']);
            $stmt->bindParam(':userpassword', $data['password']);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            };
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
