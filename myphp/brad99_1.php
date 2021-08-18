<table border="1" width="100%">

    <?php
    define("ROW", 2); //這個用來決定 要幾個列
    define("COL", 4);
    define("STAR", 2);
    for ($k = 0; $k < ROW; $k++) {
        echo "<tr>";
        for ($j = STAR; $j < STAR + COL; $j++) {
            $newj = $j + $k * COL;
            if (($j + $k) % 2 == 0) {
                echo "<td bgcolor='yellow'>";
            } else {
                echo "<td bgcolor='pink'>";
            }


            for ($i = 1; $i <= 9; $i++) {
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br/>\n";
            }
            echo "</td>";
        }
        echo "<tr/>\n";
    }
    ?>



</table>