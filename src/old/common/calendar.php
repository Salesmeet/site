<?php

class calendar {

    public function __construct()  {
        include '../common/db.php';
        $this->db = new db();
    }

    function syncCalendar($url) {
        $pdo = $this->db->getConnect();
        try {
            $stmt = $pdo->prepare("SELECT b.* FROM company_registry a, experts_calendar b WHERE a.id_company = b.id_company and a.site = ? and a.active = 0 and b.active = 0");
            $stmt->execute([$url]);
            while ($row = $stmt->fetch()) {
                if ($row['type_calendar']=="gcalendar") {
                    require_once '../common/calendar/gcalendar.php';
                    $sincronizza = new gcalendar();
                } elseif ($row['type_calendar']=="microsoft365") {
                    require_once '../common/calendar/outlook365.php';
                    $sincronizza = new outlook365();
                }
                $sincronizza->sync($row['id_expert'],$row['user_calendar'],$row['pass_calendar'],$row['jwt_calendar'],$row['id_calendar_remote']);
            }
            /*
            return $json;
            */
        } catch( PDOExecption $e ) {
            echo "Error!: " . $e->getMessage() . "</br>";
        }
    }

}

?>
