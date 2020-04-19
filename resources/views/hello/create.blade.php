    投稿作成<br>

    <form action='{{ route('hello.store') }}' method='post'>
        {{ csrf_field() }}
            <input type='hidden' name='user_id' value="{{$user->id}}"><br>
            商品名：<input type='text' name='name'><br>
            説明：<input type='text' name='text'><br>
            <input type='submit' value='投稿'>
    </form>