<!DOCTYPE html>
<html lang="ja">
<head>
<title>Index</title>
</head>
<body>
  <h1>詳細ページ</h1>
  <p>id:{{$item->id}}</p>
  <p>名前:{{$item->name}}</p>
  <p>メールアドレス:{{$item->mail}}</p>
  <p>年齢:{{$item->age}}</p>
  <p>ユーザー名:{{$user->name}}</p>
  <a href="/hello/{{$item->id}}/edit">編集はこちら</a>
  <!-- <input type='hidden' name='id' value='{{ $item->id }}'> -->
  <form action='/hello/delete' method='post'>
        {{ csrf_field() }}
            <input type='hidden' name='id' value='{{ $item->id }}'><br>
            <input type='submit' value='削除はこちら'>
    </form>
  <a href="/hello" >一覧ページに戻る</a>
</body>
</html>