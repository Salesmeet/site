<?php

// 1 step https://marketplace.zoom.us/docs/guides/build/jwt-app
// prendere il JWTToken

// 2 https://api.zoom.us/v2/users/{userId}/meetings
// contollo i meeting per l'utente


class zoom {

    function getIdUser($token) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.zoom.us/v2/users?status=active&page_size=30&page_number=1",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "authorization: Bearer " . $token,
            "content-type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          //echo "cURL Error #:" . $err;
          return "";
        } else {
          // echo $response . "<hr>";
          $responseObj = json_decode($response, true);
          // print_r($responseObj["users"][0]);
          // echo "<hr>";
          // print_r($responseObj["users"][0]["id"]);
          // echo "<hr>";
          return $responseObj["users"][0]["id"];
          // echo "<hr>";
        }

    }

    function getMeeting($token,$iduser) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.zoom.us/v2/users/" . $iduser ."/meetings",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "authorization: Bearer " . $token,
            "content-type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
          return "";
        } else {
          echo $response . "<hr>";

        }

    }

    function createMeeting($token,$iduser) {

        // https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingcreate
        $data = array(
          "topic" => "Book an appointment",
          "type" => "2",
          "start_time" => "2020-11-01T12:00:00Z",
          "duration" => "30",
          "agenda" => "url dashboard",
          );
          /*
          {
            "topic": "string",
            "type": "integer",
            "start_time": "string [date-time]",
            "duration": "integer",
            "schedule_for": "string",
            "timezone": "string",
            "password": "string",
            "agenda": "string",
            "recurrence": {
              "type": "integer",
              "repeat_interval": "integer",
              "weekly_days": "string",
              "monthly_day": "integer",
              "monthly_week": "integer",
              "monthly_week_day": "integer",
              "end_times": "integer",
              "end_date_time": "string [date-time]"
            },
            "settings": {
              "host_video": "boolean",
              "participant_video": "boolean",
              "cn_meeting": "boolean",
              "in_meeting": "boolean",
              "join_before_host": "boolean",
              "mute_upon_entry": "boolean",
              "watermark": "boolean",
              "use_pmi": "boolean",
              "approval_type": "integer",
              "registration_type": "integer",
              "audio": "string",
              "auto_recording": "string",
              "enforce_login": "boolean",
              "enforce_login_domains": "string",
              "alternative_hosts": "string",
              "global_dial_in_countries": [
                "string"
              ],
              "registrants_email_notification": "boolean"
            }
          }
          */

        $postdata = json_encode($data);

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.zoom.us/v2/users/" . $iduser ."/meetings",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_POSTFIELDS => $postdata,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_HTTPHEADER => array(
            "authorization: Bearer " . $token,
            "content-type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          // echo "cURL Error #:" . $err;
          return "";
        } else {
          $responseObj = json_decode($response, true);
          return $responseObj["join_url"];
        }

    }

}
