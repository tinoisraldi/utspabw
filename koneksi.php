<?php
class koneksi{

    public static function connect()
    {
        
        $host = "localhost:3306";
        $username = "tinouser";
        $password = "user1234";
        $dbname ="tinoisra";

        try{
        $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        }catch (PDOException $e){

            echo "connection failed" . $e->getMessage();
        }

        return $con;
    }
}

?>

