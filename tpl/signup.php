<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <title>新規登録</title>
</head>
<body>
  <header class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
      <a href="./index.php" class="navbar-brand">コンサート予約</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <a href="./signup.php" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="./login.php" class="nav-link">Login</a>
          </li>
        </ul>
      </div>
    </div><!-- /.container -->
  </header>

  <main class="mt-5">
    <div class="container">
      <form method="post">
        <div class="form-group">
          <label for="name">氏名 <span class="badge badge-danger">必須</span></label>
          <input type="text" class="form-control" id="name" placeholder="氏名">
          <span class=""></span>
        </div>
        <div class="form-group">
          <label for="kana">フリガナ <span class="badge badge-danger">必須</span></label>
          <input type="text" class="form-control" id="kana" placeholder="フリガナ">
          <span class=""></span>
        </div>
        <div class="form-group">
          <label for="mail">メールアドレス <span class="badge badge-danger">必須</span></label>
          <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="test@test.test">
          <span class=""></span>
        </div>
        <div class="form-group">
          <label for="password">パスワード <span class="badge badge-danger">必須</span></label>
          <input type="password" class="form-control" id="password" placeholder="パスワード">
          <span class=""></span>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="birthday">生年月日 <span class="badge badge-danger">必須</span></label>
            <input type="text" class="form-control" id="birthday" placeholder="<?php echo date('Ymd') ?>">
            <span class=""></span>
          </div>
          <div class="form-group col-md-3">
            <label for="gender">性別 <span class="badge badge-danger">必須</span></label>
            <select class="form-control" id="gender">
              <option value="0">選択してください</option>
              <option value="1">男性</option>
              <option value="2">女性</option>
              <option value="3">その他</option>
            </select>
            <span class=""></span>
          </div>
          <div class="form-group col-md-3">
            <label for="birthplace">出身地 <span class="badge badge-danger">必須</span></label>
            <select class="form-control" id="birthplace">
              <option value="0">選択してください</option>
              <option value="1">北海道</option>
              <option value="2">青森県</option>
              <option value="3">秋田県</option>
            </select>
            <span class=""></span>
          </div>
        </div><!-- /.form-row -->
        <button type="submit" class="btn btn-primary">新規作成</button>
      </form>
    </div>
  </main>
  
  <footer class="container">
    <p class="text-center"><small>&copy; 2020 HidakaRintaro</small></p>
  </footer>
</body>
</html>