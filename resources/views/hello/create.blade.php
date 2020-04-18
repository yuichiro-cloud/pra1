    投稿作成<br>

    <form action='{{ route('hello.store') }}' method='post'>
        {{ csrf_field() }}
            名前：<input type='text' name='name'><br>
            メールアドレス：<input type='text' name='mail'><br>
            年齢：<input type='text' name='age'><br>
            <input type='submit' value='投稿'>
    </form>