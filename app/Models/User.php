<?php 

namespace app\Models;
/**
* 
*/
use PDO;
use app\libs\Model as BaseModel;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends BaseModel
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $q = $db->query('SELECT id, name, created_at FROM users');
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insert($name)
    {   

        $db = static::getDB();

        $sql = "INSERT INTO `users` ( name, created_at, updated_at)
                    VALUES (:name, now(), now())";

        $q = $db->prepare($sql);
        $q->bindParam(":name", $name);


        $result = $q->execute();

        return $result;
    }
}

