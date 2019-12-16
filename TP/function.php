<?php

function calendar($month, $year) {
    $numberDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    echo '<table>';
    echo '<tr><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th></tr>';

    for ($i = 1; $i <= $numberDays; $i++) {
        $day = cal_to_jd(CAL_GREGORIAN, $month, $i, $year);
        $dayWeek = jddayofweek($day);

        if ($i == $numberDays) {
            if ($dayWeek == 1) {
                echo "<tr>";
            }
            echo "<td class='case'>" . $i . "</td></tr>";
        } elseif ($i == 1) {
            echo "<tr>";

            if ($dayWeek == 0) {
                $dayWeek = 7;
            }

            for ($k = 1; $k != $dayWeek; $k++) {
                echo "<td></td>";
            }
            echo "<td class='case'>" . $i . "</td>";
            if ($dayWeek == 7) {
                echo "</tr>";
            }
        } else {
            if ($dayWeek == 1) {
                echo "<tr>";
            }
            echo "<td class='case'>" . $i . "</td>";
            if ($dayWeek == 0) {
                echo "</tr>";
            }
        }
    }
    echo '</table>';
}

function display_month_in_letter($d) {
    
    $correspond = $d-1;

    $table = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    return $table[$correspond];
}
?>