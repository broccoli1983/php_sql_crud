<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css -->
  <link rel="stylesheet" href="css/input.css">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <!-- kanajs -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js?ver=3.4.1"></script>
  <script type="text/javascript" src="jquery.autoKana.js"></script>
  <title>新規アカウント登録画面</title>
</head>

<body>
  <div class="form_group">
    <form action="todo_create.php" method="POST">
      <fieldset>
        <legend>新規アカウント登録画面</legend>
        <!-- <a href="todo_read.php">一覧画面</a> -->
        <div class="form_item">
          <div class="name-group">
            <p class="form_item_label"><span class="form_item_label_must">必須</span>お名前</p><input type="text" name="last_name" autocomplete="family-name" required class="form-control name" id="inputName" placeholder="姓"><input type="text" name="first_name" autocomplete="given-name" required class="form-control name" id="inputName" placeholder="名">
          </div>
        </div>
        <div class="form_item">
          <div class="rubi-name-group">
            <p class="form_item_label"><span class="form_item_label_must">必須</span>ふりがな</p><input type="text" name="rubi_last_name" required class="form-control rubi-name" id="inputName" placeholder="せい"><input type="text" name="rubi_first_name" required class="form-control rubi-name" id="inputName" placeholder="めい">
          </div>
        </div>
        <div class="form_item">
          <p class="form_item_label"><span class="form_item_label_must">必須</span>メールアドレス</p><input type="email" name="email" autocomplete="email" required class="form-control" id="inputName" placeholder="8cology@8cology.co.jp">
        </div>
        <div class="form_item">
          <p class="form_item_label"><span class="form_item_label_must">必須</span>生年月日</p><input type="text" name="birthday" required class="form-control" id="inputName" placeholder="19000101">
        </div>
        <div class="form_item">
          <p class="form_item_label"><span class="form_item_label_must">必須</span>性別</p><select name="sex" required class="form-control" id="inputName">
            <option value="">選択してください</option>
            <option value="女性">女性</option>
            <option value="男性">男性</option>
          </select>
        </div>
        <div class="form_item">
          <p class="form_item_label"><span class="form_item_label_must">必須</span>電話番号</p><input type="tel" name="tel" required class="form-control" id="inputName" placeholder="09012345678">
        </div>
        <div class="form_item">
          <p class="form_item_label"><span class="form_item_label_must">必須</span>職業</p><select name="job" required class="form-control" id="inputName">
            <option value="">選択してください</option>
            <option value="公務員">公務員</option>
            <option value="経営者・役員">経営者・役員</option>
            <option value="会社員">会社員</option>
            <option value="自営業">自営業</option>
            <option value="自由業">自由業</option>
            <option value="専業主婦">専業主婦</option>
            <option value="パート・アルバイト">パート・アルバイト</option>
            <option value="学生">学生</option>
            <option value="その他">その他</option>
          </select>
        </div>
        <div class="form_item">
          <p class="form_item_label"><span class="form_item_label_must">必須</span>郵便番号</p><input type="text" name="zip" required autocomplete="postal-coderequired" class="form-control" id="inputName" placeholder="1234567">
        </div>
        <div class="form_item">
          <p class="form_item_label"><span class="form_item_label_must">必須</span>住所</p><input type="text" name="address" required class="form-control" id="inputName" placeholder="福岡市中央区大手門１−１−１">
        </div>
        <div>
          <button type="submit" class="btn btn-primary">送信</button>
        </div>
  </div>
  </fieldset>
  </form>

</body>

</html>