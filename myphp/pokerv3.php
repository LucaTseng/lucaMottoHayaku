<?php
$poker = range(0, 51); // range這個函數可以產生一個陣列並包含一個範圍內的元素
shuffle($poker); //shuffle 洗牌 官網是這樣寫的 基本上一定要先建立一個陣列
//https://www.php.net/manual/en/function.shuffle.php

$players = [[], [], [], []]; //撲克牌有四個種類：黑桃、方塊、紅心、梅花
foreach ($poker as $i => $card) { //將前面的陣列中的內容 一個一個列出來 (i是序號,值是數字)
    $players[$i % 4][(int)($i / 4)] = $card;
}
?>
<table border="1" width="100%">
    <?php
    $suits = [
        "&spades;",
        "<font color='red'>&hearts;</font>",
        "<font color='red'>&diams;</font>",
        "&clubs;"
    ];
    $values = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];
    foreach ($players as $player) {
        sort($player);
        echo '<tr>';
        foreach ($player as $card) {
            echo "<td>";
            echo $suits[(int)($card / 13)];
            echo $values[$card % 13];
            echo "</td>";
        }
        echo '</tr>';
    }
    ?>
</table>