<form action="/posts" method="POST">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="1"> 
    <button type="submit">Delete Post</button>
</form>
