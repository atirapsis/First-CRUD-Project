<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action = "{{ route('product.store') }}" method="POST">
    @csrf
        <div>
            <label>Name</Label>
            <input type="text" name="name" placeholder="Name" />
        </div>

        <div>
            <label>Qty</Label>
            <input type="text" name="qty" placeholder="Qty" />
        </div>

        <div>
            <label>Price</Label>
            <input type="text" name="price" placeholder="Price" />
        </div>

        <div>
            <label>Description</Label>
            <input type="text" name="description" placeholder="Description" />
        </div>

        <div>
            <input type="submit" values="Save a New Product"/>
        </div>
    </form>    
</body>
</html>