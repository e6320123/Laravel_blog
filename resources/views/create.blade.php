<!DOCTYPE html>
<html>
<body>
    <form action="/posts" method="post">
        @csrf

        <input name="title" type="text">
        <textarea name="content" id="" cols="30" rows="10">

        </textarea>

        <input type="submit" value="submit">

    </form>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>