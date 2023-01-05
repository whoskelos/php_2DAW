<?php
function conectaDB(){
    try {
        $dsn = "mysql:host=localhost;";
        $dbh = new PDO($dsn, "root", "");
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
}
?>