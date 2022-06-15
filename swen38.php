<!-- get  -->
<!-- post 可以隱藏Data的特性 -->
<form action="swen39.php" method="get">  
    Account: <input name='account' /><br/>
    Password: <input type='password' name='password' /><br/>
    Gender:
        <input type="radio" name="gender" value="m" checked /> Male
        <input type="radio" name="gender" value="f"  /> Female <br/>
    Hobby:
        <input type="checkbox" name="hobby[]" value="1">打電腦
        <input type="checkbox" name="hobby[]" value="2">打籃球
        <input type="checkbox" name="hobby[]" value="3">打麻將 <br/> 
        <input type="checkbox" name="hobby[]" value="4">打電玩
        <input type="checkbox" name="hobby[]" value="5">打毛線
        <input type="checkbox" name="hobby[]" value="6">打小孩 <br/>

    Icon: <input type="file" name="icon" /><br/>
    
    Memo: <textarea name="memo"></textarea><br/>


    <input type="submit" value="ok"/>
</form>