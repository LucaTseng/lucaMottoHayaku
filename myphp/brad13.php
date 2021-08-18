<?php
    // Loop => 小看 for 不要用迴圈來解釋for 而是 把for當做 為了...的情況
    $i = 0;
    for (test1() ; $i < 10 ; drawLine()){
        echo "{$i}<br />";
        $i++;
    }

    function test1(){
        echo 'Brad<br />';
    }
    function drawLine(){
        echo '<hr />';
    }