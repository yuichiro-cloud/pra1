投稿作成<br>

<form action='/hello/edit' method='post'>
    {{ csrf_field() }}
    <input type='hidden' name='id' value='{{ $item->id }}'>
        名前：<input type='text' name='name' value="{{ $item->name }}"><br>
        メールアドレス：<input type='text' name='mail' value="{{ $item->mail }}"><br>
        年齢：<input type='text' name='age' value="{{ $item->age }}"><br>
        <input type='submit' value='修正'>
</form>