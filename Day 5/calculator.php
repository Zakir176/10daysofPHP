<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculator</title>
</head>
<body>
    <form action="results.php" method="post">
        <label for="num1">enter value 1 </label>
        <input type="text" name="num1" required><br>
        <label for="operator"> mathematical operator of your choice</label> 
        <input type="text" name="operator" id="" required><br>
        <label for="num2">enter value 2</label> 
        <input type="text" name="num2" id="" required> <br>
        <button type="submit">answer</button>
    </form>

    <!-- <form action="results.php" method="post">
        <input type="text" name="num1" id="">
        <input type="text" name="num2" id="">
        <button name="operator">+</button>
        <button name="operator">-</button>
        <button name="operator">/</button>
        <button name="operator">*</button>
        <button type="submit">answer</button>
    </form> -->
</body>
</html>