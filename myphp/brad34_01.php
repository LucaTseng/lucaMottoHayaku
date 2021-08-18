<?php
date_default_timezone_set('Asia/Taipei');
?>
<table border="1" width='100%' />
<tr>
    <th>Filename</th>
    <th>File or Dir</th>
    <th>Size</th>
    <th>Modify</th>
</tr>

<?php
//$dir = '/Applications/MAMP/htdocs/myphp';
$dir = '.';
//$fp = opendir($dir) or die(); //後面加個die可以讓程式判斷 假設死了後面就不用繼續執行了  也可以寫exit('Server Busy V2');
$fp = @opendir($dir) or exit('Server Busy v2');
if ($fp) {
    while ($row = readdir($fp)) {
        $mtime = date('Y-m-d H:i:s', filemtime("{$dir}/{$row}"));
        //$mtime = filemtime("{$dir}/{$row}");
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
closedir($fp);//養成好習慣 有開有關
//在函數前面加一個@ 可以抑制掉錯誤訊息  但你在開發階段弄著個衝三小朋友