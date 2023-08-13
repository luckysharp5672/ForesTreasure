<!DOCTYPE html>
<html>
<body>

<h2>編集フォーム</h2>

<form action="edit_form.php" method="post">
  <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>">
  <label for="boardTitle">新しい掲示板タイトル:</label><br>
  <input type="text" id="boardTitle" name="boardTitle">
  <input type="submit" value="送信">
</form>

</body>
</html>
