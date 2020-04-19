投稿作成
<form action='/hello/edit' method='post'>
    {{ csrf_field() }}
    <input type='hidden' name='id' value='{{ $item->id }}'>
    <input type='hidden' name='user_id' value="{{$user->id}}"><br>
        名前：<input type='text' name='name' value="{{ $item->name }}"><br>
        商品名：<input type='text' name='text' value="{{ $item->text }}"><br>
        <input type='submit' value='修正'>
</form>