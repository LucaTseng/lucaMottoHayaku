<?php
$sum = $n = '';
if (isset($_GET['n'])) { ////假設n有取得值  （isset不要懶）， 只寫x就行這是html和http的通訊協定
    $n = $_GET['n'];
    $sum = 0;
    $i = 1;
    while ($i <= $n) {
        $sum += $i; //總數sum 會等於 1+變數n 然後加完繼續迴圈 直到第七行的判斷flase
        $i++; // ＋＝被稱為指派運算 跟等號是一樣的地位 把右邊的東西指派給左邊 將右邊的東西進行壘加 
        //++在後 等你都做完後我在做所以 上面第八第九行可以合併為 $sum += $i++;

        //另外大括號(程式區塊)假如程式區塊裡面只有一道敘述句的話，那大括號是可以省略的
        //所以最後會變成這樣 while ($i <=$n )$sum += $i++;
        //但我們還是不要省比較好 好讀 比較重要
    }
}

?>
<form>
    1 + 2 + ... +
    <input type="number" name="n" value="<?php echo $n; ?>" />
    <!-- name="n" 這一段是 傳值回去 -->
    <input type="submit" value="=" />
    <span><?php echo $sum; ?></span>
</form>


<!-- 在處理資料庫的時候 我們常使用while 或者通過使用陣列 -->