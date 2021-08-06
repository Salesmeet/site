<?php

/*

Nome visualizzato:
Salesmeet

CREATO A MANO
ID applicazione (client):
3d89dbe3-9859-497d-8bf7-a2973d6edd20

ID oggetto:
0a3d378e-68a3-485d-a509-4f9665c3edbe

ID della directory (tenant):
f8cdef31-a31e-4b4a-93e4-5f571e91255a

CREATO AUTOMATICAMENTE

Please enter the generated app secret that you saved:
App secret: 7I-E2Sfz_5A~.gb0gUNm3o4B.-RE3c2obL
App Name: Graph PHP Quickstart
App ID: 287b6d0f-66e4-4d51-9884-fff54a93353d

_______________________________________________________________


https://login.microsoftonline.com/{tenant}/oauth2/v2.0/authorize?
client_id=6731de76-14a6-49ae-97bc-6eba6914391e
&response_type=code
&redirect_uri=http%3A%2F%2Flocalhost%2Fmyapp%2F
&response_mode=query
&scope=offline_access%20user.read%20mail.read

https://login.microsoftonline.com/f8cdef31-a31e-4b4a-93e4-5f571e91255a/oauth2/v2.0/authorize?client_id=3d89dbe3-9859-497d-8bf7-a2973d6edd20&response_type=code&response_mode=query&scope=user.read



GET https://graph.microsoft.com/v1.0/me/mailfolders HTTP/1.1
Authorization : Bearer {access_token}

https://docs.microsoft.com/en-us/graph/auth-v2-user




tech@selesmeet.ai
EwBwA8l6BAAU6k7+XVQzkGyMv7VHB/h4cHbJYRAAARPBiAtHMfd9kJwCT2RkWjS4uKTncecDBn59HUOcI+J4PDVdf7rbGB4TAobhDytZ0YvjAEXpRg9p4DKPzcEpvBEGIiZVLA+au9ulpfBMmA7ZZxwF9rqe4QW9h8Mzu8nDu0n5NGz6mcGk1+Yb/XYXIjLvZY1S2Jm7GB0AQ0mlvMRIzYFJnLdYYA1WSQEhRw+n6vh3SCp0rW9gxFU9hpPQ8w3fw/5jXIwuNfA4ueHbSz8Sx2fOdsxuW3+HPxNGZqW7TI03ZUen1dGRMujUzFMI9E6XBBTUH7ffmsJV5/kV22C8/B5o1wMLihb4rXqO1qcVajjZ6CWqlUjdw0e4dvFB21oDZgAACNF9ame0Yrm2QAKGbtYOG6u8moWYKPDfjkUPqEHPuLmOBN7qZbdefpkEJ1p3GX1u8jX93nViY0po55N9BVqnKQZRmSNFAgXskuDBdrv8zVFZ0CtJ0tEs/rLumuHA+s079YgQHOzj2eqpn4Y+5UtIMievKFnx/JQNjDjIJrjrJjZUKYTAj/0BbxVrurdEi+ERQERVzEeJZ77NY0WMUYsrsyR/M68NHgDXIdgdZ6y8hZlWBNFzPzK48PpRyGK0IapcITuf9JC9UuIJl5VtCJB/wytKPe0eFyR9C+r4SCU/okRVnykTk3LtnfPyHDQR1XOCwcfKnG8AbSyU1t5o741lY1HCfxSBWtuaeojN9FdyBXWjbucVmX82haZXtoaXyDOIEE0cqzVNazFr4uaTLVtMRAVm7XqaW/t7iWdekF9MhbZlxfQx85fZO79UmO+fs3O0QfeZF8uLK4TOd5tyqwPzjKM+oQojiyZccIGCa3XSnd7+I3pLv3IjM+kVqlIfoI7ap2uXXW+gMmzy++g8AH/sk5ZTBGqUQGyXHtaB5IKiJyvSzOt01UNxZq8HcEpSmQq4zozqavshEqew7ZegUaAZ0RJv79xt5WVhxPukTZknbPjFLmekc28Z01jDfS7Wf6cnGbPdAWIMSenR7+IyzfZ3T4wo/utNhmJ4ZdxKJ95u737txX4DQaLmkHPaus1yBQuXIgVjNKCgZN0eixHh4XXLtdzj8M5V9pmH3SWIcaV07YctX/oLC1+iqWhaA9p9HkeGoW8CjLjfdXOcvSN9Ag==


- Elenco calendari
https://graph.microsoft.com/v1.0/me/calendars

- Verifica calendario
https://graph.microsoft.com/v1.0/me/calendars/AQMkADAwATM3ZmYAZS0zZTdiLWVlAGZmAC0wMAItMDAKAEYAAAOzfDT52b69T4Zhv0bSh1DMBwAOfNiO_S4wSal5yoU6XcG_AAACAQYAAAAOfNiO_S4wSal5yoU6XcG_AAACDgUAAAA=

- Eventi legati al calendario
https://graph.microsoft.com/v1.0/me/calendars/AQMkADAwATM3ZmYAZS0zZTdiLWVlAGZmAC0wMAItMDAKAEYAAAOzfDT52b69T4Zhv0bSh1DMBwAOfNiO_S4wSal5yoU6XcG_AAACAQYAAAAOfNiO_S4wSal5yoU6XcG_AAACDgUAAAA=/events?$select=subject,body,bodyPreview,organizer,attendees,start,end,

- Eventi legati al calendario per data ...
https://graph.microsoft.com/v1.0/me/calendars/AQMkADAwATM3ZmYAZS0zZTdiLWVlAGZmAC0wMAItMDAKAEYAAAOzfDT52b69T4Zhv0bSh1DMBwAOfNiO_S4wSal5yoU6XcG_AAACAQYAAAAOfNiO_S4wSal5yoU6XcG_AAACDgUAAAA=/calendarView?startdatetime=2021-06-11T13:53:33.114Z&enddatetime=2021-06-18T13:53:33.116Z

*/


class outlook365 {

    function sync($id_expert,$user_calendar,$pass_calendar,$jwt_calendar,$id_calendar_remote) {


        $this->getCalendars($token,$user_calendar);
        /*
        if ($id_calendar_remote!="") {
          $id_calendar_remote = $this->insertIdCalendar($jwt_calendar);
          $this->getEvents($jwt_calendar,$id_calendar_remote);
        } else {
          $this->getEvents($jwt_calendar,$id_calendar_remote);
        }
        */
    }

    function insertIdCalendar($token,$user_calendar) {

    }

    function getCalendars($token,$user_calendar) {

/*
https://graph.microsoft.com/v1.0/me/calendars?$filter=eq(name, 'corrado')


            "owner": {
                "name": "Corrado Facchini",
                "address": "corrado.facchini@hotmail.com"
                */

        $type = "GET";
        $url = "https://graph.microsoft.com/v1.0/me/calendars";
        $callBack = $this->call($token,$type,$url);
        $response = $callBack[0];
        $error = $callBack[1];

        /*
        echo "cURL Error #:";
        print_r($error);
        echo "cURL response #:";
        */
        echo "<hr>";
        print_r($response);

        /*
        foreach ($response as $key => $value) {
            // $arr[3] will be updated with each value from $arr...
            echo "{$key} => {$value} ";
            print_r($arr);
        }
        */

    }

    function getEvents($token,$id_calendar_remote) {

        $type = "GET";
        $url = "https://graph.microsoft.com/v1.0/me/events?$select=subject,start,end";

        $callBack = $this->call($token,$type,$url);
        $response = $callBack[0];
        $error = $callBack[1];

        echo "cURL Error #:";
        print_r($error);
        echo "cURL response #:";
        print_r($response);


        /*

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer " . $token,
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
          echo $response . "<hr>";
          $responseObj = json_decode($response, true);
          // print_r($responseObj["users"][0]);
          // echo "<hr>";
          // print_r($responseObj["users"][0]["id"]);
          // echo "<hr>";
          // return $responseObj["users"][0]["id"];
          // echo "<hr>";
        }
        */

    }


    function call($token,$type,$url) {

        $token = "EwBwA8l6BAAU6k7+XVQzkGyMv7VHB/h4cHbJYRAAAY9r4IOf5mpY3uY+iDERH5T1W/53o84dRc8nSUrwDuyvG62Ieu7DrzhFFGn+iOeFI/Sz+mpULHktZ4/YQbNKMzVEl/z2Gih27meGZp4fdL2YMnYZ0sHrRY/enyVDn8SXl6krN4MYIssF1X7+6xvKL+FTE3HH0G5fXjHrK9KSd77wYSWQrQRj26DuFCXS+fC1RPwcxoafnKbvs9LCOOBY4fm/IWHgp+VgUFaS0FdaOsZzbSy7ueJ7jDpxCbU+91jLmhMkZUEhYK6WX1C9mzaqqL+5IiZ9AeXxju8tebpvaUpl8Nl4QvOyYHVzO9VgS70GRzLuFZWtbG3jH1t1Ow7fo54DZgAACFhNy6cgT/RmQALfAJqSEDvkHzgG+mnCyEAcUPi9CXN25MphFExh3EIEnM/5Nmau51KhCbGnxMypZgqISlgtqg8kMXydryo9746ln9ha4c0n6E85aXdeMbeJ0cuV8m7X+2siLU9x4TeYxpt8SI7B8Bys+vCfNO8bPUyF019iZgXu4dbvJJqj7sQ5Id19+V5e+1I6G5HgSFPOfaPTha+/spngz8ruN5cppCUhvyrZIOxq5LOo4JKqBVcNsHwxADVsrsaKgIFPSmPluX9VyzePDzLGyE5CaCiZBCWCBmPxfLac096B1YQvkQpAX7vroBM9XmW1uFkWQZSRCydSCJXLtb6Aa3nCH1armyYWPgHtY7eNAWCwyfi57s00KB8ImUgdg+m4uigyFkKQlmK753oePsVz7ute7908PFANEJtKEUOZ/f5gj/32uPux8rXExOrN3pu3pluitEl5kLsKihYdFq85FpJ6zR99JjEksJQ23P73wdB1B9MUnNy/lQTfvTxT9QPQRev5BpggvaO/f8lBkcPzdmMUr4Wf4T74uZ4yDsTh9YB3e7lFo2TduKFvHAZLLDJuDNiapQHy66Wxx8vLWicej/BbJ9TL3l4PpZh+oETTyPnbXBul24z8eQNl/e7uWNwljMrEFAGpLhGQYfi58kot6bBOy7izhblF3fILsnFLZTmz8wHiGyMFx933l/UwkBu1t5Hdh8efu/7LZBweYDb1BQAQQNss4rXCP3Te1XX9qXVcv/VvmliHDVeT+RcCBuxfmfwlETyXWyV9Ag==";

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => $type,
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer " . $token,
            "content-type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return [json_decode($response, true),$err];
    }

}


?>
