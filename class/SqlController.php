<?php

namespace webshop;

use mysqli;

class SqlController {

    private static $connection;

    /**
     * @return mysqli
     */
    public static function getConnection() {
        if (SqlController::$connection == null) {
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $db = "movies";

            $conn = mysqli_connect($host,$dbusername,$dbpassword,$db);
            mysqli_set_charset($conn,'utf8');

            if (!$conn) {
                die ('Failed to connect to MySQL: ' . mysqli_connect_error());
            }

            SqlController::$connection = $conn;
        }

        return SqlController::$connection;
    }

}