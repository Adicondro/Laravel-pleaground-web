<h1>Edit Product</h1>

<form action="/products/{{$Product->id}}" method="POST">
    @method('PUT')
    @csrf
    Name : <input type="text" name="name"  value="{{$Product -> name}}"><br>
    Description : <input type="text" name="description"  value="{{$Product -> description}}"><br>
    Price : <input type="number" name="price"  value="{{$Product -> price}}"><br>
    Image URl : <input type="text" name="image_url" value="{{$Product -> image_url}}"><br>
    
    <input type="submit" name="Save">
</form>