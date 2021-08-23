<?php
$id = 'A123456789';
$regex = '/^[A-Z][12][0-9]{8}$/';
if (preg_match($regex, $id)) { //preg_match用來檢測有沒有符合
    echo 'OK';
} else {
    echo 'XX';
}
    // 1. 0912-123456
    // 2. 04-22345678
    // 3. 049-1234567
    // 4. email
    // 5. password => number, letters, 特殊符號, 8

    //在這頁的教材裏面 
    //https://www.w3schools.com/jsref/jsref_match.asp
    //  let str = "The rain in SPAIN stays mainly in the plain";
    //  str.match(/ain/gi)   // Returns ain,AIN,ain,ain
    // 上面的gi g是golbal的意思 不要只找到一個就算了 還有其他的也一併找出來 g沒加的話找到就停下了
    // 上面的i 是不分大小寫 