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
    <h4><a href="{{url('logout/')}}">logout</a></h4>

    <h1>Add product</h1>
    <h4><a href="{{url('usersList/')}}">List of All users</a></h4>
    </div>
    
    <form action="{{route('addProduct')}}" method='post'>
        @csrf
        <label for="">name</label>
        <input type="text" class="" name="name"><br>
        <label for="">Product Description</label>
        <input type="text" class="" name="desc"><br>
        <label for="">Product Price</label>
        <input type="text" class="" name="price"><br>
        <button type="submit"> add </button>
    </form>

   
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
                <td><a href="{{url('edit/'.$product->id)}}">edit</a></td>
                <td><a href="{{url('delete/'.$product->id)}}">delete</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

    
</body>
<script>

</script>

</html>