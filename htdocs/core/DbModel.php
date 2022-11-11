<?php

namespace app\core;

abstract class DbModel extends Model
{
    abstract public static function tableName(): string;

    abstract public function attributes(): array;

    abstract public function primaryKey() :string;
    //Model in DB speichern
    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $statement = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).")VALUES (".implode(',', $params).")");
        foreach ($attributes as $attribute){
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();
        return true;
    }
    //SQL string prepare
    public static function prepare($SQL){
        return Application::$app->db->pdo->prepare($SQL);
    }
    //Objekt anhand von ID finden
    public static function findInstance($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND ", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare( "SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }
    //Alle Objekte eines Models ausgeben
    public function getAllInstances()
    {
        $tableName = static::tableName();
        $statement = self::prepare( "SELECT * FROM $tableName ORDER BY id DESC");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    //zufällige Instanzen von Objekten ausgeben
    public function getRandomInstances($nmbr)
    {
        $tableName = static::tableName();
        $statement = self::prepare( "SELECT * FROM $tableName ORDER BY RAND() LIMIT $nmbr");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}