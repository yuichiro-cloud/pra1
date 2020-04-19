<!DOCTYPE html>
<html lang="ja">
<head>
<title>Index</title>
<link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
<link rel='stylesheet' href='/css/index.css'>
</head>
<body>
  <header>
    <div class="leftbox">Laravelアプリ
    </div>
    <div class="rightbox">
      <div class="logout">
        <a href='home'>HOME</a>
      </div>
      <div class="post">
        <a href="/hello/create">新規投稿はこちら</a>
      </div>
    </div>
  </header>
  <h1>一覧ページ</h1>
  <div class="items">
    @foreach ($msg as $value)
    <div link><a href="/hello/{{$value->id}}">商品名:{{$value->name}}</a></div>
    @endforeach
  </div>
</body>
</html>