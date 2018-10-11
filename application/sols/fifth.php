<?php
    if (!empty($_POST)) {
        fifthFunc();
    }

    function fifthFunc() {
        $str = $_POST['string'];
        $k = 1;
        $new_str = '';

        $l = strlen($str);
        for ($i = 0; $i < $l;) {
            for ($j = $i; $j + 1 <= $l; $j++) {
                if ($str[$j] == $str[$j + 1]) {
                    $k++;
                } else break;
            }
            if ($k > 1) {
                $new_str .= $str[$i] ."(". $k .")";
            } else {
                $new_str .= $str[$i];
            }
            $i += $k;
            $k = 1;
        }

        echo $new_str;
        echo json_encode('Получившаяся строка: '. $new_str, JSON_UNESCAPED_UNICODE);
    }
