<?php
    firstFunc();

    function firstFunc(){
        $month = array(
            1 => 'Зима',
            2 => 'Зима',
            3 => 'Весна',
            4 => 'Весна',
            5 => 'Весна',
            6 => 'Лето',
            7 => 'Лето',
            8 => 'Лето',
            9 => 'Осень',
            10 => 'Осень',
            11 => 'Осень',
            12 => 'Зима',
        );
//
//        echo "<pre>";
//        print_r($_REQUEST);
//        echo "</pre>";
//
//        echo "<pre>";
//        print_r($_GET);
//        echo "</pre>";

        $result =  "Выбранное время года: ".$month[$_GET['month']];

        return json_encode(array('result'   =>  array(
            'request'   => $_REQUEST,
            'get'       => $_GET['month'],
        )));
    }