<!DOCTYPE html>
    <p>title: {{$viewModel->getTitle()}}, limit: {{$viewModel->getLimit()->format('Y-m-d')}}, completed: {{$viewModel->getCompleted()}}</p>

    <p>TODO作成リクエスト</p>
    <form action="user/create" method="post">
        @csrf
        <input type="input" name="name">
        <input type="submit">
    </form>
</html>