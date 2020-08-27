<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <title>ログイン</title>
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
          <li class="nav-item">
          <a href="./signup.php" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item active">
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
          <label for="mail">メールアドレス</label>
          <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="メールアドレス">
          <span class=""></span>
        </div>
        <div class="form-group">
          <label for="password">パスワード</label>
          <input type="password" class="form-control" id="password" placeholder="パスワード">
          <span class=""></span>
        </div>
        <button type="submit" class="btn btn-primary">ログイン</button>
      </form>
    </div>
  </main>
  
  <footer class="container">
    <p class="text-center"><small>&copy; 2020 HidakaRintaro</small></p>
  </footer>
</body>
</html>