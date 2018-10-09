<?php
    if (!empty($_GET)) {
        fourthFunc();
    }

    function fourthFunc() {
        $x0 = $_GET['x_coord'];
        $y0 = $_GET['y_coord'];
        $r = $_GET['radius'];

        if (abs($y0) - $r < 0) {
            $x1 = $x0 + ($r * $r - $y0**2)**(0.5);
            $x2 = $x0 - ($r * $r - $y0**2)**(0.5);
            echo json_encode("(". $x1 .";0), (". $x2 .";0)");
        } elseif (abs($y0) - $r == 0) {
            echo json_encode("(". $x0 .";0)");
        } else
            echo json_encode("Нет пересечений.");
    }