<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h1 class="ct">新增管理者帳號</h1>
    <hr>
    帳號：<input type="text" name="acc"><br>
    密碼：<input type="password" name="pw"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button type="reset">重置</button>
</form>