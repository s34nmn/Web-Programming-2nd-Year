<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calcprocess.php" method="post">
        <label for="">Calculator</label> <br>
        <label for="">Select an Operator:</label> <br>
        <select name="operators" id=""> 
            <option value="" name="addition">Addition</option>
            <option value="" name="subtract">Subtraction</option>
            <option value="" name="multiply">Multiplication</option>
            <option value="" name="divide">Division</option>
        </select> <br> 
        <label for="">Enter 1st Number:</label> <br>
        <input type="number" name="num1"> <br>
        <label for="">Enter 2nd Number:</label> <br>
        <input type="number" name="num2"> <br> <br>
        <input type="submit" value="COMPUTE">
    </form>
</body>
</html>