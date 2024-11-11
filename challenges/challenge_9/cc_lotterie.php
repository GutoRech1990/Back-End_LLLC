<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p><strong>Enter 6 numbers from 1 to 49</strong></p>
        <label for="num1"> 1st number: </label>
        <input type="number" name="num1" id="num1"> <br>
        <label for="num2"> 2nd number: </label>
        <input type="number" name="num2" id="num2"> <br>
        <label for="num3"> 3rd number: </label>
        <input type="number" name="num3" id="num3"> <br>
        <label for="num4"> 4th number: </label>
        <input type="number" name="num4" id="num4"> <br>
        <label for="num5"> 5th number: </label>
        <input type="number" name="num5" id="num5"> <br>
        <label for="num6"> 6th number: </label>
        <input type="number" name="num6" id="num6"> <br>
        <input type="submit" value="Submit">
    </form>


</body>

</html>