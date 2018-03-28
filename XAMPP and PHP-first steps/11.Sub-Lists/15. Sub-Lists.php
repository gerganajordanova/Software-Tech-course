<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num1" />
        M: <input type="text" name="num2" />
        <input type="submit" />
    </form>
	<ul>
        <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])){
            $num1=intval($_GET['num1']);
            $num2=intval($_GET['num2']);
            for ($rowIndex=1; $rowIndex<=$num1; $rowIndex++){
              echo "<li>List $rowIndex";
              echo "<ul>";
                for ($colIndex=1; $colIndex<=$num2; $colIndex++){
                    echo "<li>Element $rowIndex.$colIndex</li>";
                }
                echo "</ul>";
                echo "</li>";
            }
        }
        ?>
	</ul>
</body>
</html>