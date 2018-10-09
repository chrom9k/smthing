<?php
    if (!empty($_GET)) {
        fifthFunc();
    }

    function fifthFunc() {
    $str = $_GET['string'];
    $k = 1;
    $new_str = '';

    $l = count($str);
        echo $l."\n";
    for ($i = 0; $i < $l;) {
        for ($j = $i; $j + 1 <= $l; $j++) {
            echo $str[$j]. " ". $str[$j+1]."\n";
            if ($str[$j] == $str[$j + 1]) {
                $k++;
                echo $k."\n";
            } else break;
        }
        if ($k > 1) {
            $new_str .= $str[$i] ."(". $k .")";
            echo $str[$i] ."(". $k .")";
        } else {
            $new_str .= $str[$i];
            echo $str[$i];
        }
        $i += $k;
        $k = 1;
    }
    echo json_encode($new_str);
}
