<a href="/product/create">Create New Product</a>

@foreach($products as $product)
<div>
    <div>
        id: {{$product->id}}
    </div>
    <div>
        name: {{$product->name}}
    </div>
    <div>
        author: {{$product->author}}
    </div>
    <div>
        price: {{$product->price}}
    </div>
    <div>
        category: {{$product->category->name}}
    </div>
    <div>
        <a href="/product/update/{{$product->id}}">Update Product</a>
        
    </div>
</div>
   
<hr>
@endforeach