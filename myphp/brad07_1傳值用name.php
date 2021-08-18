<?php
$result = ' '; //這一段用空值 做為result的預設值
if (isset($_GET['x'])) { //假設x有取得值  isset不要懶， 只寫x就行這是html和http的通訊協定
  $x = $_GET['x']; //變數xy取得值，
  $y = $_GET['y'];
  $result = $x + $y; //然後變數result等於變數xy相加
} else { //這裡不寫沒差 因為篤定xy一定取得的到值。
}

?>
副檔名寫ＰＨＰ是因為阿帕契裡面有外掛有個ＰＨＰ的引擎，在網頁伺服器裡面有個組態黨
副檔名ＰＨＰ是為了要讓電腦辨識使用而已 在php裡面寫的html都是文件
php和js的差異在一個處理在後端 一個處理在前端

<meta charset="UTF-8" />
<script></script>
<form method="get">
    <!-- method="get"這句話可以省略，get會傳送 $_GET['x'] = 10;  $_GET['y'] = 3 ; 
    假如這邊寫POST-->
    <!-- form這邊也可以用action ="brad08.php" 寫上去會跑到另外一頁(假如你要停留在這頁 就不要寫action) 另外老師說不認識的就不要寫上去 -->
    <input type="number" name="x" value="<?php echo $x ?>" />
    <!-- name="x" 這一段是 傳值回去  問號隔開參數  php傳值用name
      設id來取值就用js寫就好   後面的value 呈現預設值  這邊會這樣寫會『保留原值』-->
    <select name="" id="">

    </select>
    <span>+</span>
    <input type="number" name="y" value="<?php echo $y ?>" />
    <!-- name="y" 這一段是 傳值回去  後面的value 呈現預設值  這邊會這樣寫會『保留原值』 -->
    <input type="submit" value="=(PHP)">
    <!-- value="=(PHP)"  -->
    <span><?php echo $result; ?> </span>
    <!-- 這行平常會消失，因為最上面程式預設是空值 -->
</form>