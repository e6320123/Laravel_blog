<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增文章</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="/posts">我的部落格</a>
</nav>
<div class="container mt-4" style="max-width: 700px;">
    <h3 class="mb-3">新增文章</h3>
    <form action="/posts" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">標題</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">內容</label>
            <textarea name="content" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">送出</button>
        <a href="/posts" class="btn btn-secondary">取消</a>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>