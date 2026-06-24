<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="/posts">我的部落格</a>
</nav>
<div class="container mt-4" style="max-width: 700px;">
    <h2>{{ $post->title }}</h2>
    <p class="text-muted">{{ $post->content }}</p>
    <hr>
    @auth
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-sm btn-warning">編輯</a>
        <form action="/posts/{{ $post->id }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">刪除</button>
        </form>
    @endauth
    <a href="/posts" class="btn btn-sm btn-secondary">返回列表</a>
</div>
</body>
</html>