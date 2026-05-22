<!DOCTYPE html>
<html>
<body>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="刪除">
    </form>
    <a href="/posts">返回列表</a>
</body>
</html>