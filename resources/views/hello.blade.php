<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的部落格</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="/">我的部落格</a>
    <div>
        @auth
            <a href="posts/create" class="btn btn-outline-light btn-sm me-2">新增文章</a>
            <form action="/logout" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-outline-danger btn-sm">登出</button>
            </form>
        @else
            <a href="/login" class="btn btn-outline-light btn-sm">登入</a>
        @endauth
    </div>
</nav>

<div class="container mt-4">
    @forelse ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/posts/{{ $post->id }}" class="text-decoration-none">{{ $post->title }}</a>
                </h5>
                <p class="card-text text-muted">{{ Str::limit($post->content, 100) }}</p>
                <a href="/posts/{{ $post->id }}" class="btn btn-sm btn-primary">閱讀更多</a>
            </div>
        </div>
    @empty
        <p class="text-muted">目前還沒有文章。</p>
    @endforelse
</div>
</body>
</html>