<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <h1>EMPLOYEE PAYROLL SYSTEM</h1>
        <label for="">Employee Name:</label> <br>
        <input type="text" name="employeename" id=""> <br><br>

        <label for="">Hourly Rate:</label> <br>
        <select name="hourlyrate" id="">
            <option value="500">500</option>
            <option value="650">650</option>
            <option value="800">800</option>
        </select> <br> <br>

        <label for="">Hours Worked:</label> <br>
        <input type="number" name="hourswork" id=""> <br><br>

        <label for="">Overtime Hours:</label> <br>
        <input type="number" name="overtimehours" id=""> <br><br>

        <input type="submit" value="COMPUTE PAYROLL">
    </form>
</body>
</html>