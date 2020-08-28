<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <title>管理者画面</title>
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
            <a href="" class="nav-link">売り上げ</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">入場率</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">分析</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              登録
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a href="" class="dropdown-item">コンサート</a>
              <a href="" class="dropdown-item">公演</a>
              <a href="" class="dropdown-item">アーティスト</a>
              <a href="" class="dropdown-item">会場</a>
              <a href="" class="dropdown-item">座席</a>
              <a href="" class="dropdown-item">座席詳細</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </div><!-- /.container -->
  </header>

  <main class="mt-5">
    <div class="container">
      <a class="btn btn-outline-secondary btn-lg btn-block" href="" role="button">売り上げ</a>
      <a class="btn btn-outline-secondary btn-lg btn-block" href="" role="button">入場率</a>
      <a class="btn btn-outline-secondary btn-lg btn-block" href="" role="button">分析</a>
      <a class="btn btn-outline-secondary btn-lg btn-block" href="" role="button">コンサート登録</a>
      <a class="btn btn-outline-secondary btn-lg btn-block" href="" role="button">公演登録</a>
      <a class="btn btn-outline-secondary btn-lg btn-block" href="" role="button">アーティスト登録</a>
      <a class="btn btn-outline-secondary btn-lg btn-block" href="" role="button">座席登録</a>
      <a class="btn btn-outline-secondary btn-lg btn-block" href="" role="button">座席詳細登録</a>
    </div>
  </main>
  
  <footer class="mt-3">
    <div class="container">
      <p class="text-center"><small>&copy; 2020 HidakaRintaro</small></p>
    </div>
  </footer>
</body>
</html>