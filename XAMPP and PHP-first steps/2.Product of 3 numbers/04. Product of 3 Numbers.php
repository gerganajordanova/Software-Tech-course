<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product of 3 Numbers</title>
</head>
<body>
<form>
    <em><b>Number 1:</b></em>  <input type="text" name="num1">
    <em><b>Number 2:</b></em> <input type="text" name="num2">
   <em><b>Number 3:</b></em> <input type="text" name="num3">
    <input type="submit" value="Product">
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $nums = [intval($_GET['num1']),
        intval($_GET['num2']),
        intval($_GET['num3'])];
    $countNegatives = 0;
    $containsZero = false;
    foreach ($nums as $num){
        if ($num < 0){
            $countNegatives++;
        }

        else if ($num == 0){
            $containsZero = true;
        }

    }
    if ($containsZero || $countNegatives % 2 == 0){
        echo "Positive";
    }
    else{
        echo "Negative";
    }
}
?>
</body>
</html>