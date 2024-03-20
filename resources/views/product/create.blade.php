<form action="/product/create" method="POST">
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="name" >
    </div>
    <div>
        <label for="">Author</label>
        <input type="text" name="author" >
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description" >
    </div>
    <div>
        <label for="">Price</label>
        <input type="text" name="price" >
    </div>
    <div>
        <label for="">Category</label>
        <select name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach   
        </select>
    </div>
    <input type="submit">
</form>