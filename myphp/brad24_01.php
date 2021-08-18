<?php
foreach ($_SERVER as $key => $value) {
    if (gettype($value) == 'array') {
        echo "{$key} => ";
        foreach ($value as $kk => $vv) {
            echo "{$kk} : {$vv}<br />";
        }
        echo "===<br />";
    } else {
        echo "{$key} : {$value}<br />";
    }
}//假設value是陣列的話（二維） 上面這公式只要改變第二行的server就可以變成另一個公式
    //例如你可以改成evn files 
