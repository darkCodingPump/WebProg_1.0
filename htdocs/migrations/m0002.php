<?php

class m0002
{

    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE carDb (id INT AUTO_INCREMENT PRIMARY KEY, Modellbezeichnung VARCHAR(255) NOT NULL, B_2_1 VARCHAR(255) NOT NULL, B_2_2 VARCHAR(255) NOT NULL, J VARCHAR(255) NOT NULL, vier VARCHAR(255) NOT NULL, D_1 VARCHAR(255) NOT NULL, D_2 VARCHAR(255) NOT NULL, zwei VARCHAR(255) NOT NULL, fuenf VARCHAR(255) NOT NULL, V_9 VARCHAR(255) NOT NULL, vierzehn VARCHAR(255) NOT NULL, P3 VARCHAR(255) NOT NULL, innerorts VARCHAR(255) NOT NULL, ausserorts VARCHAR(255) NOT NULL, kombiniert VARCHAR(255) NOT NULL, NEFZ_CO2_kombiniert VARCHAR(255) NOT NULL, sehr_schnell VARCHAR(255) NOT NULL, schnell VARCHAR(255) NOT NULL, langsam VARCHAR(255) NOT NULL, WLTP_CO2_kombiniert VARCHAR(255) NOT NULL,  Dateiname BLOB NOT NULL);";
        $db->pdo->exec($SQL);
        $tabInsert_ = 'INSERT INTO carDb VALUES';
        $file = file_get_contents('./xml/Autos.xml');
        $xml = simplexml_load_string($file);
        foreach ($xml->Auto as $car) {
            $tabInsert = $tabInsert_;
            $carArray = array();
            foreach ($car as $key => $value) {
                $carArray[(string)$key] = (string)$value;
            }
            $tabInsert .= "(NULL,'" . implode("','", $carArray) . "');";
            print $tabInsert;
            $db->pdo->exec($tabInsert);
        }
        $SQL = "CREATE TABLE blogEntrys (id INT AUTO_INCREMENT PRIMARY KEY, userId INT NOT NULL, title VARCHAR(255) NOT NULL, category VARCHAR(50) NOT NULL,  text VARCHAR(5000) NOT NULL, date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , carReferenceId INT , titlePicture BLOB, FOREIGN KEY (userId) REFERENCES users(id));";
        $db->pdo->exec($SQL);

    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE blogEntrys;";
        $db->pdo->exec($SQL);
        $SQL = "DROP TABLE carDb;";
        $db->pdo->exec($SQL);
    }
}