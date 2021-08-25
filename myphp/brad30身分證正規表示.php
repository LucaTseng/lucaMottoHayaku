<?php
$id = 'A123456789';
$regex = '/^[A-Za-z@#][12][0-9]{8}$/'; //[A-Za-z]大小寫、＠、＃都可以的意思 
//中括號裏面只會取一個字
//其他請直接上往找正規表示法
if (preg_match($regex, $id)) { //preg_match用來檢測有沒有符合(規定,對象)
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
    // javascript正規表示法就是一個物件 不是用字串去看待他
    //PHP是用字串 所以上面第三行用的是兩個分號
    // 老師說在前端比對用戶資料 之後才去比對後端伺服器 所以前端的js正規表示法很重要