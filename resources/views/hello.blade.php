<!DOCTYPE html>
<html>
<body>
    @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->content }}</p>
        <hr>
    @endforeach
</body>
</html>