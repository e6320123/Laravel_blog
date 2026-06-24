<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯文章</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="/posts">我的部落格</a>
</nav>
<div class="container mt-4" style="max-width: 700px;">
    <h3 class="mb-3">編輯文章</h3>
    <form action="/posts/{{ $post->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">標題</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">內容</label>
            <textarea name="content" rows="10" class="form-control">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        <a href="/posts/{{ $post->id }}" class="btn btn-secondary">取消</a>
    </form>
</div>
</body>
</html>