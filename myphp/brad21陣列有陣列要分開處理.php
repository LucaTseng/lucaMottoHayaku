<?php
//$a加中括號 就會宣告為一個陣列
$a[0] = 123;    // 此時$a 就是一個 array  
$a[1][0] = 10;  // 此時$a 就是一個 array 之中還有array （二維）
$a[1][2][3] = 'Brad'; //這時候馬上變成三維陣列
$a[2] = array(1, 2, 3, 4, 5); //位置序號2 是一個陣列 

foreach ($a as $k => $v) { //巡訪$a陣列的 k和v 此時因為a陣列裡面有陣列 所以我們要分開處理
    if (gettype($v) == 'array') { //假如裡面是陣列 就不要印  不是陣列才印出來
        foreach ($v as $kk => $vv) { //裡面是陣列 再巡訪一次 這時候因為裡面有整數 和陣列 所以又要再一次分開處理 
            if (gettype($vv) == 'array') {
                foreach ($vv as $kkk => $vvv) {
                    echo $vvv;
                }
            } else {
                echo $vv;
            }
            echo '<br />';
        }
    } else {
        echo $v;
    }
    echo '<br />';
}
//老師說 記憶體是線性的 沒有空間觀念 所以當你陣列想不透的時候 
//就畫樹狀圖就好 很多書上都寫說「畫空間圖」