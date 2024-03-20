<form action="/product/update" method="POST">
    @csrf
    <input  hidden name="id" id="" value="{{$product->id}}">
    <div>
        <label for="">Name</label>
        <input type="text" name="name" value="{{$product->name}}">
    </div>
    <div>
        <label for="">Author</label>
        <input type="text" name="author" value="{{$product->author}}">
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description" value="{{$product->description}}" >
    </div>
    <div>
        <label for="">Price</label>
        <input type="text" name="price" value="{{$product->price}}">
    </div>
    <div>
        <label for="">Category</label>
        <select name="category_id" id="">
            @foreach($categories as $category)
                @if ($category->name == $product->category->name)
                    <option selected value="{{$category->id}}">{{$category->name}}</option>
                @else
                    <option  value="{{$category->id}}">{{$category->name}}</option>

                @endif
            @endforeach   
        </select>
    </div>
    <input type="submit">
</form>