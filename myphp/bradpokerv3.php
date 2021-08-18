<?php
$poker = range(0, 51);
shuffle($poker);
foreach ($poker as $v) {
    echo $v . '<br/>';
}
echo "---<br/>";
$players = [[], [], [], []];
foreach ($poker as $i => $card) {
    $players[$i % 4][(int)($i / 4)] = $card;
}
foreach ($players[0] as $v) {
    echo "{$v} <br/>";
}
?>
<table border="1" width="100%">
    <?php
    foreach ($players as $player) {
        echo '<tr>';
        foreach ($player as $card) {
            echo "<td>{$card}</td>";
        }
        echo '</tr>';
    }
    ?>
</table>
good