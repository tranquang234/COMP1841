<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Simple Calculator</h2>
    <form action="" method="post">
        <label>First number: </label>
        <input type="text" name="val1"><br><br>

        <label>Second number: </label>
        <input type="text" name="val2"><br><br>

        <label>Operation:</label><br>
        <input type="radio" name="calc" value="add"> Add<br>
        <input type="radio" name="calc" value="sub"> Subtract<br>
        <input type="radio" name="calc" value="mul"> Multiply<br>
        <input type="radio" name="calc" value="div"> Divide<br><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>