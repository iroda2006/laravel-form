<form action="/posts/edit" method="POST">
    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="1"> 
    <input type="text" name="title" placeholder="New Title">
    <button type="submit">Update (PATCH)</button>
</form>

