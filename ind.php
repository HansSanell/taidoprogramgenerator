<?php
function getDb($table)
{
    try {
        $conn = new PDO('mysql:host=localhost;dbname=taido', "taido", "taido");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = $conn->query('SELECT * FROM '.$table.''); // WHERE name = ' . $conn->quote($name));

        foreach($data as $row) {
            $arr[] = $row;
            #print_r($row[1]);
        }
        return $arr;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}
?>