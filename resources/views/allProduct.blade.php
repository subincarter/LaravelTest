<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


<body>
    <div>
        <h4><a href="{{url('logout/')}}" class="btn btn-sm">Logout</a></h4>

        <h1>All products</h1>
        <h1><a href="{{url('showCart/')}}" class="btn btn-sm">cart page</a></h1>
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
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><a href="{{url('addCart/'.$product->id)}}" class="btn btn-sm">add to cart</a></td>
                <td><a href="{{url('viewProduct/'.$product->id)}}">view product</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
</body>
<script>

</script>

</html>