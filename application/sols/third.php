<?php
    if (!empty($_POST)) {
        thirdFunc();
    }

    function thirdFunc() {
        $N = $_POST['numb'];
        $k = 1;
        $arr = array_fill(0, $N, array_fill(0, $N, 0));
        
        $i = 0;
        $j = (int)($N/2);
        while ($k <= $N*$N) {
            if (($i == -1) && ($j == $N)) {
                $i = 0;
                $j = 0;
                continue;
            }
            if ($i < 0) {
                $i = $N - 1;
                continue;
            }
            if ($i > $N - 1) {
                $i = 0;
                continue;
            }
            if ($j > $N - 1) {
                $j = 0;
                continue;
            }
            if ($j < 0) {
                $j = $N - 1;
                continue;
            }
            if ($arr[$i][$j] != 0) {
                $i += 2;
                $j--;
                continue;
            }
            $arr[$i][$j] = $k++;
            $i--;
            $j++;
        }

        $r = '<table>';

        for ($i = 0; $i < $N; $i++) {
            $r .= '<tr>';
            for ($j = 0; $j < $N; $j++) {
                $r .= '<td>';
                $r .= $arr[$i][$j];
                $r .= '</td>';
            }
            $r .= '</tr>';
        }
        $r .= '</table>';

        echo json_encode($r, JSON_UNESCAPED_UNICODE);
    }
