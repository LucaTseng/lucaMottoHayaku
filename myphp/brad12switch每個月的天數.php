<?php
$month = rand(1, 12);
switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12: //一樣的放在一起 沒放在一起是大忌 會被pm罵 怎麼叫你改一個 其他的都沒動咧？
        $day = 31;
        break; //一定要有break 不然會繼續往下衝
    case 4:
    case 6:
    case 9:
    case 11:
        $day = 30;
        break;
    case 2:
        $day = 28;
        break;
    default: //優良原則 避免有意外發生 寫上去
        $day = 0;
}
echo "{$month}月有{$day}天";