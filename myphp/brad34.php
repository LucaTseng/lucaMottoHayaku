<?php
date_default_timezone_set('Asia/Taipei');
?>
<table border="1" width="100%" />
<tr>
    <th>Filename</th>
    <th>File or Dir</th>
    <th>size</th>
    <th>Modify Time</th>
</tr>
<?php
$dir = '.';
$fp = @opendir($dir) or exit('Server Busy v2'); //或者也可以寫 or die();
if ($fp) {
    while ($row = readdir($fp)) {
        $mtime = date('Y-m-d H:i:s', filemtime("{$dir}/{$row}"));
        echo '<tr>';
        echo "<td>{$dir}/{$row}</td>";

        if (is_dir("{$dir}/{$row}")) {
            echo "<td>Directory</td>";
        } else if (is_file("{$dir}/{$row}")) {
            echo "<td>File</td>";
        } else {
            echo "<td></td>";
        }

        echo '<td align="right">' . filesize("{$dir}/{$row}") . ' bytes </td>';
        echo "<td>{$mtime}</td>";
        echo '</tr>';
    }
} else {
    echo 'XX';
}
closedir($fp);
?>
</table>
<!-- 從這邊開始 我們要來介紹 怎麼去控制資料夾 -->
<!-- https://www.php.net/manual/en/ref.dir.php -->
在上面的網址裏面 你可以看到幾個比較常見的函式
chdir — 改變目錄
chroot — 改變根目錄
closedir — 關閉資料夾（目錄句柄）
dir — 返回一个 Directory 舉實例
getcwd — 取得當前工作目錄
opendir — 打開資料夾（目錄句柄） 有成功傳目的地 沒有成功會傳flase
readdir — 从資料夾（目錄句柄）中讀取条目
rewinddir — 倒回資料夾（目录句柄）
scandir — 列出指定路径中的文件和目錄
<!-- 任何一個function 只要前面加了一個小老鼠 系統就會把錯誤訊息給抑制 -->
原則上在開發階段 是不會抑制的 所以正常情況下 是用不到的