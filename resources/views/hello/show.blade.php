<!DOCTYPE html>
<html lang="ja">
<head>
<title>Index</title>
</head>
<body>
  <h1>詳細ページ</h1>
  <p>id:{{$item->id}}</p>
  <p>商品名:{{$item->name}}</p>
  <p>説明文:{{$item->text}}</p>
  <p>ユーザー名:{{$user->name}}</p>
  @if ($user->id == $item->user_id)
    <a href="/hello/{{$item->id}}/edit">編集はこちら</a>
    <form action='/hello/delete' method='post'>
          {{ csrf_field() }}
              <input type='hidden' name='id' value='{{ $item->id }}' ><br>
              <input type='submit' value='削除はこちら'>
      </form>
  @endif
  <a href="/hello" >一覧ページに戻る</a>
</body>
</html>