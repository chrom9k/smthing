<?php
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

    echo "Выбранное время года: ".$month[$_GET['month']];

    function test(){
        echo 'smthing';

        $result = $_GET;

        return json_encode($result);
    }