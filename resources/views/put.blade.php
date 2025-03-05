<form action="/posts/pu/edit" method="POST">
    @csrf
    @method('PUT')
   
    <input type="hidden" name="id" value="1"> 
    <input type="text" name="title" placeholder="New Title">
    <input type="text" name="description" placeholder="New Description">
    <button type="submit">Update (PUT)</button>
</form>

