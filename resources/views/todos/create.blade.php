<!DOCTYPE html>
    <body>
        <form method="post" action="/todos/store">
            @csrf
            <label for="title">タイトル</label>
            <input type="text" name="title" />
            <label for="limit">期限</label>
            <input type="datetime-local" name="limit" />
            <label for="completed">完了状態</label>
            <input type="text" name="completed" />
            <input type="submit" value="作成">
        </form>
    </body>
</html>
