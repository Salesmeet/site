<?php

class db {

    public function getConnect() {
        $db   = 'salesmeet';
        $host = 'salesmeet.c9hljosmivib.eu-west-1.rds.amazonaws.com';
        $user = 'admin';
        $pass = '123#4567AszsaL3smeet';
        $charset = 'utf8';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        try {
             // $pdo = new PDO($dsn, $user, $pass, $options);
             $pdo = new \PDO($dsn, $user, $pass);
             return $pdo;
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }


    function syncCalendar($url) {
        $pdo = $this->getConnect();
        try {
            $stmt = $pdo->prepare("SELECT b.* FROM company_registry a, experts_calendar b WHERE a.id_company = b.id_company and a.site = ? and a.active = 0 and b.active = 0");
            $stmt->execute([$url]);



            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
            $json = json_encode($results);
            return $json;
        } catch( PDOExecption $e ) {
            echo "Error!: " . $e->getMessage() . "</br>";
        }
    }

}

?>
