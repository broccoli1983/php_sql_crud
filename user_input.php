<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>ログイン画面</title>
</head>

<body class="text-center">
  <!-- アラートメッセージ用のUI -->
  <!-- <div class="alert alert-danger" role="alert" th:if="${param.error}">
    ユーザ名とパスワードが一致しません。
  </div>
  <div class="alert alert-primary" role="alert" th:if="${param.logout}">
    ログアウトしました。
  </div> -->
  <form class="w-25 mx-auto" action="user_create.php" th:action="@{/login}" method="POST">
    <fieldset>
      <legend class="h3 mt-2 mb-3 font-weight-normal">ログイン画面</legend>
      <!-- <a href="user_read.php">一覧画面</a> -->
      <div>
        ユーザー名 <input type="text" name="username" class="form-control" required autofocus />
      </div>
      <div>
        パスワード <input type="password" name="password" class="form-control" required>
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>
    </fieldset>
  </form>

</body>

</html>