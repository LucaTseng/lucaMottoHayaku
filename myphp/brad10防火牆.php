<?php
$score = rand(0, 100); //寫遊戲很好用 寫遊戲比賽很主觀
echo $score . '<hr />';
if ($score >= 90) {
    echo 'A';
} else if ($score >= 80) {
    echo 'B';
} else if ($score >= 70) {
    echo 'C';
} else if ($score >= 60) {
    echo 'D';
} else {
    echo 'E';
}//防火牆就是這種寫法