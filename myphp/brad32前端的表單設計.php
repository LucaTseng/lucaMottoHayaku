<form action='brad33.php' method="post">
    Account: <input type="text" name="account" /><br />
    Password: <input type="password" name="passwd" /><br />
    Zipcode: <select name="zipcode">
        <option value='401'>北屯區</option>
        <option value='402'>西屯區</option>
        <option value='403'>南屯區</option>
        <option value='404'>東屯區</option>
    </select><br />
    Gender:
    <input type="radio" name="gender" value="f" />Female
    <input type="radio" name="gender" value="m" />Male
    <br />
    Habit: <br />
    <input type="checkbox" name="habit[]" value="1" />打電腦
    <input type="checkbox" name="habit[]" value="2" />打電動
    <input type="checkbox" name="habit[]" value="3" />打籃球<br />
    <input type="checkbox" name="habit[]" value="4" />打羽球
    <input type="checkbox" name="habit[]" value="5" />打麻將
    <input type="checkbox" name="habit[]" value="6" />打毛線<br />
    Memo:<textarea name='memo' rows='10' cols='40'></textarea>

    <hr />
    <input type="submit" value="Register" />
</form>
<!-- // 第一行我寫了傳遞方式get，這樣的傳遞方式是使用url進行傳遞 -->
<!-- 最好的方式 是使用post進行傳遞 這樣才不會出現在網址上面 -->
<!-- 第一頁 我們寫了使用 怎麼樣的方式傳遞，後面就應該也要使用怎麼樣的方式進行 -->
<!-- 第一行 假如我們使用get 第二頁的第二行就要使用get -->
<!-- 第一行 假如我們使用post 第二頁的第二行就要使用post -->
<!-- 或者，前端怎麼寫 都沒關西 後面使用$_REQUEST 這樣也都行 -->