<!-- 同時多檔上傳 -->

<form action="swen45.php" method="post" enctype="multipart/form-data"> <!-- multipart/form-data  只能用 POST 方法 -->
    <input type="file" name="Upload[]" /> <br/>
    <input type="file" name="Upload[]" /> <br/>
    <input type="file" name="Upload[]" /> <br/>
    <input type="file" name="Upload[]" /> <br/>
    <input type="submit" value="Upload">
</form>