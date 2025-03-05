<form action="/posts" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <button type="submit">Send POST</button>
</form>

