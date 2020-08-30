<!DOCTYPE html>
    <body>
        <form method="post" action="/todos/store">
            <label for="title">タイトル</label>
            <input type="text" name="title" />
            <label for="limit">期限</label>
            <input type="datetime-local" name="limit" />
            <label for="completed">完了状態</label>
            <input type="text" name="completed" />
        </form>
    </body>
</html>
