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
    <form action="{{route('loginUser')}}" method='post'>
        @csrf
        <label for="">Select user Type</label>
        <select name="userType" id="">
            <option value="admin">admin</option>
            <option value="user">user</option>
        </select><br>
        <label for="">User Name</label>
        <input type="text" class="" name="fName"><br>
        <label for="">Password</label>
        <input type="text" class="" name="password"><br>

        <button type="submit"> login </button>
        <a href="{{url('userRegister')}}">Register New User</a>
    </form>
</body>
<script>

</script>

</html>