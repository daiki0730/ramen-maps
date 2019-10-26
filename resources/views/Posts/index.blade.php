<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Ramen Maps</title>
</head>
<body>
  <div class="container">
    <h1>Ramen Maps</h1>
    <ul>
      @forelse ($posts as $post)
      <li><a href="">{{ $post->title }}</a></li>
      @empty
      <li>No posts yet</li>
      @endforelse
    </ul>
  </div>
</body>
</html>

