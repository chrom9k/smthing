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

        $numb = $_GET['month'];
        $result =  'Выбранное время года: '.$month[$numb];

        echo json_encode(array(
            'month'   => $numb,
            'result'   =>  $result,
            ), JSON_UNESCAPED_UNICODE);
    }