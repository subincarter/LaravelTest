<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Your Cart</h1>
<table>
        <thead>
        <th>Product ID</th>
        <th>Name</th>
        <th>Product Description</th>
        <th>Price</th>
        </thead>
        <tbody>
        @foreach($data as $product)

            <tr>
                <td>{{$product->product->id}}</td>
                <td>{{$product->product->name}}</td>
                <td>{{$product->product->description}}</td>
                <td>{{$product->product->price}}</td>
                <td><a href="{{url('remove/'.$product->id)}}">remove</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <a href="{{url('allproduct')}}" class="btn">back</a>

</body>
</html>