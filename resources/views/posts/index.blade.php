<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">Posts</h1>
        <a href="{{ route('posts.create') }}" class="button is-primary">Create Post</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="button is-danger">Logout</button>
        </form>
        @foreach ($posts as $post)
            <div class="box">
                <p><a href="{{ route('posts.show', $post) }}">{{ $post->content }}</a></p>
                <a href="{{ route('posts.edit', $post) }}" class="button is-warning">Edit</a>
                <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button is-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</section>
</body>
</html>
