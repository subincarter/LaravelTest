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
    <form action="{{route('userAdd')}}" method='post'>
        @csrf
        <label for="">Name</label>
        <input type="text" class="" name="name"><br>
        <label for="">Mobile Number</label>
        <input type="number" class="" name="phone"><br>

        <label for="">Email</label>
        <input type="text" class="" name="email"><br>

        <label for="">Address</label>
        <input type="text" class="" name="address"><br>


        <label for="">Place</label>
        <input type="text" class="" name="place"><br>

        <label for="">Password</label>
        <input type="text" class="" name="password"><br>

        <button type="submit"> Register </button>
    </form>
</body>
<script>

</script>

</html>