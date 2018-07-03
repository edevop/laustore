<?php

class Database {

    public static $host;
    public static $dbname;
    public static $username;
    public static $password;

    private static function connect() {
        $PDO = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8", self::$username, self::$password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $PDO;
    }

    public static function query( $query, $params = array() ) {
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
        if ( explode(' ', $query)[0] == 'SELECT' ):
            $data = $stmt->fetchAll();
            return $data;
        endif;
    }

}

?>