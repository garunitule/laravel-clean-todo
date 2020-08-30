<!DOCTYPE html>
    @foreach ($viewModel->todos as $todo)
        <p>title: {{$todo->title}}, limit: {{$todo->limit}}, completed: {{$todo->completed})</p>
    @endforeach

    <p>TODO作成リクエスト</p>
    <form action="user/create" method="post">
        @csrf
        <input type="input" name="name">
        <input type="submit">
    </form>
</html>