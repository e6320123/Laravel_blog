<!DOCTYPE html>
<html>
<body>
  

<form action="/posts/{{$post->id}}" method="post">


  @csrf
  @method('PUT')

  <input type="text" name="title" value="{{$post->title}}">
  <br>
  <textarea name="content" cols="30" rows="10">
    {{$post->content}}
  </textarea>
  <input type="submit" value="submit">
</form>



</body>
</html>