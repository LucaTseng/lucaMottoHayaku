<?php
$a[0] = 11;
$a[1] = array(111, 222, 333);
$a[2] = 33;

foreach ($a as $k => $v) {
    echo $k . ':';
    if (gettype($v) == 'array') {
        foreach ($v as $kk => $vv) {
            echo $vv . ' ';
        }
        echo '<br />';
    } else {
        echo $v . '<br />';
    }
}

    //     k   v
    //|---[0]:11   kk  vv
    //|-------|----[0]:111
    //|---[1]:|----[1]:222
    //|-------|----[2]:333
    //|---[2]:33
    //講完這個 講撲克牌