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
    <h1>Update product</h1>
    <form action="{{route('update')}}" method='post'>
        @csrf
        
        <label for="">name</label>
        <input type="text" class="" name="id" value="{{$product->id}}" hidden><br>
        <input type="text" class="" name="name" value="{{$product->name}}"><br>
        <label for="">Product Description</label>
        <input type="text" class="" name="desc" value="{{$product->description}}"><br>
        <label for="">Product Price</label>
        <input type="text" class="" name="price" value="{{$product->price}}"><br>
        <button type="submit"> add </button>
        <!-- <a href="{{url('/')}}"> register</a> -->
    </form>
</body>
<script>

</script>

</html>