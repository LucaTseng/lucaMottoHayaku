<h1>Brad Big Company</h1>
<hr />
Hello, World
<?php
$ary1 = array(1, 2, 3, 4);
echo $ary1[0] . '<hr />';
//echo $ary1[4] . '<hr />';
echo count($ary1) . '<hr />';

$var2[7] = 123; // 7 => key; key-value
echo gettype($var2) . '<hr />';
var_dump($var2);
echo '<hr />';

for ($i = 0; $i < count($ary1); $i++) {
    echo $ary1[$i] . '<br />';
}
echo '<hr />';
//陣列新增 中括號是key 
$person['name'] = 'Brad';
$person['age'] = 18;
$person['gender'] = true;
$person[1] = 123;
foreach ($person as $key => $value) {
    echo "{$key} : {$value}<br />";
}

//陣列 老師說  其實陣列應該是offset的觀念(偏移量)
//印出陣列有幾個元素 使用count
//第十行 中括號 裡面是key 123是key-value
// 第十五行 在（i從0開始 把每個序號的值 都跑一遍）的情況下都印出來並且做br換列

// 網頁就是文件 絕對從上讀到下 所以假如你下面的標籤 需要值 那值怎麼來呢？最合理的方式就是在標籤之前有php 經過php先計算後在把值給下面的標籤，所以在這樣的情況下，php要寫在標籤的前面
// 在js的邏輯上 你宣告一個陣列 你要先let a = new array()並且 在新增的時候 假設前面沒有設值 他會幫你自動給值 儘管你不需要
// 在php的邏輯上 你宣告第七序列是123 他不會幫你把前面0-6序列也給值

//老師說 他覺得php陣列的寫法很棒 它涵蓋了很多程式語言 它是集很多程式語言在裡面 彈性非常大
//
//foreach(陣列變數 as )(用變數$Value來看待它)(換句話說 就是透過變數value將裡面的所有東西抓出來)
//foreach(陣列變數 as 變數1 => 變數2)(用箭頭來代表對應關係告訴電腦左邊是xx右邊是xx)(假如你要看key的話 你要先)
//老師說在js裡面物件就是物件 陣列是陣列 但其實 在js它骨子裡 是用陣列的方式在歸於物件 如果把陣列拿來gettype的話 你會拿到object
//可是 php的陣列 比較像是一個資料結構 不能用陣列去看待它 比較像是用python描述的方式在

?>