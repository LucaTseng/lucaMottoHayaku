<div>before</div>
<hr />
伺服器的那些重點 都在組態檔裡面 先phpinfo();得知你的檔案在哪裡
先看格式 在看註解
裡面藍色的字 就是key 等於後面的 是value
key不要去動他 value才可以去動

CLI Server這邊 可以控制要不要跑命令列 這是php的特殊的地方

displayer_errors 可以控制要不要呈現錯誤 （這招用來除錯是十分方便的）
通常是off
在開發階段的時候要打開（方便之後哪裡有錯） 完成後要關掉
改完之後 要記得大象要重開一下

xampp是使用虛擬主機 在mac上面比較大 能不用就不用

<?php
$score = 123;
if (isset($score)) { //isset($score) 用來得到布零值 裡面接function isset不要懶 雖然還是可以運行 但是displayer_errors還是會提醒你這樣不好
    echo $score;
} else {   //這招最高明的地方  是可以用來判斷變數 到底有沒有值
    echo 'xxxxxx2';
}
?>
<hr />
<div>after</div>