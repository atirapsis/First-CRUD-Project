<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action = "{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')
        
        <div>
            <label>Name</Label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>

        <div>
            <label>Qty</Label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" />
        </div>

        <div>
            <label>Price</Label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}" />
        </div>

        <div>
            <label>Description</Label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}" />
        </div>

        <div>
            <input type="submit" values="Update"/>
        </div>
    </form>    
</body>
</html>