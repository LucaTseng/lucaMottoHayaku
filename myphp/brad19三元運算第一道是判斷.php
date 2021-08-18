<?php
    // 模擬擲骰子100次 => 統計各點出現的次數
    $p = array(1 => 0,0,0,0,0,0); // $p[1] = 0 ~ $p[6] = 0
    for ($i = 0; $i < 1000000; $i++){
        $point = rand(1,9);
        
        //$p[ $point>6 ? $point-3 : $point ]++; 三元運算寫法
        // 第一道 判斷句
        // 第二道 true 就執行第二道
        // 第三道 flase 就執行第三道

        if ($point > 6){
            $p[$point-3]++;
        }else{
            $p[$point]++;
        }
    }

    echo "<hr />";
    foreach($p as $key => $value){
        echo "{$key}點出現{$value}次<br />";
    }