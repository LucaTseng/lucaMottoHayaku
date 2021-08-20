<?php
// function

function sayYa()
{
    echo "Ya<br />";
}
function sayHello($name)
{
    echo "Hello, {$name}<br />";
}
function sayHelloV2($times, $name)
{
    for ($i = 0; $i < $times; $i++) {
        echo "Hello, {$name}<br />";
    }
}
function sayHelloV3($times = 1, $name = 'World')
{
    for ($i = 0; $i < $times; $i++) {
        echo "Hello, {$name}<br />";
    }
}

function sayHelloV4()
{
    //echo func_num_args();  // 當你不知道傳遞了幾個東西給你  使用這個函式可以得知/檢測 傳遞了多少個參數資料
    //echo func_get_arg(2); //當你不知道傳遞了什麼參數給你 使用這個函式可以得知/檢測  序號2的 值 假如你要一次看全部的話，那就foreach吧
    $args = func_get_args();
    //var_dump($args);
    foreach ($args as $name) {
        echo "Hello, {$name}<br />";
    }
}

sayYa();
sayYa();
sayHello('Brad');
sayHello('Tony');
sayHelloV2(3, 'Brad');

sayHelloV3(2, 'III');
echo "---<br />";
sayHelloV3(3);
echo "---<br />";
sayHelloV3();
echo "---<br />";
sayHelloV3(3);
echo "---<br />";
sayHelloV3('Mark');
echo "---<br />";
sayHelloV4('Brad', 'Eric', 'Amy');
//本章重點：
// function公式裡面設定兩個參數 但實際執行只有給他一個的話 那麼他就會將你給他的參數帶到公式裡面的第一個參數 假設你給的參數是字串 那這function沒有辦法運作
//echo func_num_args();  // 當你不知道傳遞了幾個東西給你  使用這個函式可以得知/檢測 傳遞了多少個參數資料
    //echo func_get_arg(2); //當你不知道傳遞了什麼參數給你 使用這個函式可以得知/檢測  序號2的 值 假如你要一次看全部的話，那就foreach吧