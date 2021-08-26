<?php
include "bradapis.php"; //沒寫 php會不認識 寫了等於導入整段程式碼
include "apis/myapis.php";

if (checkTWId('A123456789')) {
    echo 'OK';
} else {
    echo 'XX';
}
echo '<hr />';
echo "1. " . createTWIdByRandom() . '<br />';
echo "2. " . createTWIdByGender(true) . '<br />';
echo "3. " . createTWIdByArea('Y') . '<br />';
echo "4. " . createTWIdByBoth(false, 'C') . '<br />';
echo "5. " . createTWIdByArea() . '<br />';
echo "6. " . createTWIdByGender() . '<br />';

    //第五行 假設我們呼叫function 辨識程式，ture的話印ok，flase的話印xx