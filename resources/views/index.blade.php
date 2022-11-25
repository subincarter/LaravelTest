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
    <form action="{{route('saveRegistration')}}" method='post'>
        @csrf
        <label for="">First Name</label>
        <input type="text" class="" name="fName"><br>
        <label for="">Last Name</label>
        <input type="text" class="" name="lName"><br>
        <label for="">Email</label>
        <input type="text" class="" name="email"><br>
        <label for="">Mobile Number</label>
        <input type="text" class="" name="phone"><br>
        <label for="">Password</label>
        <input type="text" class="" name="password"><br>
        <label for="">Country</label>
        <select name="country" id="">
            <option value="country">--select--</option>
          
        </select><br>
        <label for="">state</label>
        <select name="state" id="">
            <option value="state">--select--</option>
           
        </select><br>
        <label for="">City</label>
        <select name="city" id="">
            <option value="city">--select--</option>
        </select><br>
        <button type="submit"> save </button>
        <a href="{{url('loginPage')}}">login</a>
    </form>
</body>
<script>
   
</script>
</html>