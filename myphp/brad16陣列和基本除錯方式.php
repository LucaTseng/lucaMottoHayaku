<?php
$ary1 = array(1, 2.3, false, 'Brad', 5);
echo gettype($ary1);
var_dump($ary1);
echo '<hr />';
$var1 = 123;
$var2 = 12.3;
$var3 = true;
$var4 = 'Brad';
var_dump($var1);  //整數(123)
echo '<hr />';
var_dump($var2);  //浮點數(12.3)
echo '<hr />';
var_dump($var3);  //布零值(true)
echo '<hr />';
var_dump($var4);  //字串(4)"Brad"   字串 四個長度 "brad" 
echo '<hr />';


?>
<!-- php陣列 使用變數=array小括號進行宣告 -->
<!-- 使用gettype 我們可以先得知變數ary1現在是陣列 -->
<!-- 另一種在開發時期很常使用的除錯方式：var_dump，去查探的結果: array(5){[0]=>int(1) }中文解讀是這樣：陣列有五個內容，其中陣列序號0 他是整數 其值為1  -->
<!-- 老師說 我們一般在除錯 都是在除錯"變數的變化" 即便是邏輯 也是因為變數出來的值不對 然後才去針對邏輯 -->