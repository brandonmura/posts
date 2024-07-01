<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">Create Post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="field">
                <label class="label" for="content">Content:</label>
                <div class="control">
                    <textarea class="textarea" id="content" name="content"></textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-primary">Create</button>
                    <button class="button is-link" onclick="window.history.back()">Back</button>
                </div>
            </div>
        </form>
    </div>
</section>
</body>
</html>
