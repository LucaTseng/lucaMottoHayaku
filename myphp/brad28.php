<?php
// 假設有一個字串
$mystr = 'abcdefg';

$findme = 'a';

// 在字串的函式裏面 有一個東西 叫做strpos 這個東西 可以幫你檢查字串有沒有出現
//str+pos 字串+位置  (string $haystack, string $needle, int$ $offset=0:int|flase)（母字串，子字串，預設值(偏移量=0)你可以不給 也可以指定:傳回值有可能是int或是布零值flase）
if (strpos($mystr, $findme) !== false) {
    echo "find: " . strpos($mystr, $findme); //這裡會出現0 因為a在第0序號
} else {
    echo "not found";
}

echo '----------<br />';
$test1 = false;
echo $test1 === 0;
    // 全等 ===, !== 全不等
    // 型別是否相等
    // 相等下, 再去比較其值是否相等
    // -----------------
    // 相等 == 只有比較其值是否相等
    // 不等 != 

    //第九行 的意思是 假如 查詢字串ㄨ 是否在句子裏面，假設查出來的東西 全不等 那麼負負得正 判斷是就會變成true
    //那麼 就會執行印出 在位置的第幾序號