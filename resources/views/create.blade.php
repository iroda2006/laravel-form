<form action="/posts/create" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <button type="submit">Create Post</button>
</form>

