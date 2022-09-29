<!DOCTYPE html>
<html>

<head>
    <title>Yarra: reverse arrays programmatically</title>
</head>

<body>
    <?php
        require_once "yarra.php";

        $odd_test_array = [5,3,2,9,0,4,1];
        $even_test_array = [2,4,0,9,7,5,1,3];

        echo "<p>Odd test array: <br />";
        foreach ($odd_test_array as $k =>$v) {
            echo "Element $k => $v<br />";
        }

        $reversed_array = yarra($odd_test_array);
        echo "</p><p>Reversed odd test array: <br />";
        foreach ($reversed_array as $k =>$v) {
            echo "Element $k => $v<br />";
        }

        echo "</p><p>Even test array: <br />";
        foreach ($even_test_array as $k =>$v) {
            echo "Element $k => $v<br />";
        }

        $reversed_array = yarra($even_test_array);
        echo "</p><p>Reversed even test array: <br />";
        foreach ($reversed_array as $k =>$v) {
            echo "Element $k => $v<br />";
        }
        ?>
    </p>
</body>

</html>