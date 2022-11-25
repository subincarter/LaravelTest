<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <h1>Total Amount</h1>
    <!-- <h2>{{$amount}}</h2> -->
    <input type="number" value="{{$amount}}" class="cartAmount">


    <h1>Enter Coupon Code</h1>

    <input type="text" value="" class="coupon">


    <!-- <table>
        <tr>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
        </tr>



    </table> -->
</body>
<script>
    $(document).ready(function() {
        let total = $(".cartAmount").val();

        // $(".coupon").keyup(function() {
        $(".coupon").on('keypress', function(e) {
            if (e.which == 13) {
                if (total < 500) {

                    alert('Total should be more than 500 to use the coupon');
                    console.log(total);
                } else {
                    if ($(".coupon").val() == 'OFFER1') {
                        let discount = 0;
                        let totalDiscount = 0;
                        discount = (total / 100) * 10;
                        let calculatedAmount =Math.abs(discount - total);
                            if(discount > 75){
                                calculatedAmount = Math.abs(total - 75);
                            }
                        $(".cartAmount").val(calculatedAmount);
                        alert('coupon code applied');

                    } else {
                        alert('wrong coupon code');
                    }

                }
            }
        });
    });
</script>

</html>