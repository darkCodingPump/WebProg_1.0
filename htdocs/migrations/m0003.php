<?php

class m0003
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = file_get_contents('blogEntrys.sql');
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DELETE FROM blogEntrys;";
        $db->pdo->exec($SQL);
    }
}