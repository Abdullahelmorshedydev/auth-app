<h1>create new post</h1>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title">
    <input type="text" name="body">
    <button type="submit">submit</button>
</form>
