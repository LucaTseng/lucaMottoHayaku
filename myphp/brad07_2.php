<?php
$result = $op = ''; //這邊的op要先給預設值0這樣加減乘除才不會有問題
if (isset($_GET['x']) && isset($_GET['y'])) {
    $op = $_GET['op']; //這些都是從網頁上得到的值 注意這些都是"字串"
    $x = $_GET['x'];
    $y = $_GET['y'];

    if ($op == 1) {  //假設變數op等於1 將兩者相加，注意這邊 是拿字串和數值相比 但因為我們是用兩個＝作為"是否相等"所以 ok的
        $result = $x + $y;
    } else if ($op == 2) {
        $result = $x - $y;
    } else if ($op == 3) {
        $result = $x * $y;
    } else if ($op == 4) {
        $result = (int)($x / $y) . "......" . $x % $y;  //保留整數 剩下餘數 .用來字串相加
    } else {
        $result = ""; //這一段 是為了讓程式更加完整 嚴謹
    }
}
?>
<meta charset="UTF-8" />
<script>
function add() {}
</script>
<hr />
<form method="get">
    <input type="number" id="x" name="x" value="<?php echo $x ?>" />
    <select name="op">
        <!-- %2B + , %2F / => URL編碼 今天你只是有傳遞這個值 但你卻撞到URL  -->
        <option value="1" <?php echo $op == 1 ? 'selected' : ''; ?>>+</option>
        <!-- 這邊將值改成傳遞op1234來(select + option) 控制你後面要的效果 -->
        <!-- selected(被選擇) 用來保留原值 用後端的方式 別讓前端跑版 -->
        <!-- 既然寫了後端在這邊，那我們就要先決定何時啟動這個程式 -->
        <!-- 輸出 變數op是否等於3(這邊只會是true or flase)  -->
        <!-- ？這邊 是三元表示法   -->
        <!-- 中文的解讀為：如果變數op值等於1 保留/回傳原值，如果不是 回傳空值 -->

        <option value="2" <?php echo $op == 2 ? 'selected' : ''; ?>>-</option>
        <option value="3" <?php echo $op == 3 ? 'selected' : ''; ?>>x</option>
        <option value="4" <?php echo $op == 4 ? 'selected' : ''; ?>>/</option>
    </select>
    <input type="number" id="y" name="y" value="<?php echo $y ?>" />
    <input type="button" onclick="add()" value="=(JS)" />
    <input type="submit" value="=(PHP)" />
    <span><?php echo $result; ?></span>
</form>

保留原值 取決於前端怎麼寫 後端程式配合前端進行編輯