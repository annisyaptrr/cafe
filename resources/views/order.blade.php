<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order's Menu</title>
    <link rel="stylesheet" href="assets/css/order.css">
</head>
<body>
    <h1><i> Order's Menu</i></h1><br>
   <form name="form">
    
     <table align="center">
        <tr>
            <th>Menu Image</th>
            <th>Menu Choice</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
        <tr>
            <td> <img src="img/fud.png" width="150" height="150"></td>
            <td><input type="checkbox" value="order">order</input></td>
            <td><input type="text" size=10 ></input></td>
            <td><input type="text" value="15000" readonly size=10></input></td>
            <td><input type="text" size=10 disable></input></td>
        </tr>

        <tr>
            <td> <img src="img/kebab.png" width="150" height="150"></td>
            <td><input type="checkbox" value="order">order</input></td>
            <td><input type="text" size=10 ></input></td>
            <td><input type="text" value="15000" readonly size=10></input></td>
            <td><input type="text" size=10 disable></input></td>
        </tr>

        <tr>
            <td> <img src="img/cc.png" width="150" height="150"></td>
            <td><input type="checkbox" value="order">order</input></td>
            <td><input type="text" size=10 ></input></td>
            <td><input type="text" value="15000" readonly size=10></input></td>
            <td><input type="text" size=10 disable></input></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total</td>
            <td><input type="text" size=10 disable></input></td><br></br>
        </tr>
        <tr>
            <td colspan=2><input type="submit" value="Calculate order total" class="btn"></input></td>
            <td colspan=2><input type="reset" value="Cancel order" class="btn"></input></td>
        </tr>
    </table>
</form>
</body>
</html>