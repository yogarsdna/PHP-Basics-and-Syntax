<?php
    $title = 'Functions';
    include 'include/header.php';
?>
    <h1>Functions</h1>
    <?php
        /* Defining a function */
        function writeMessage()
        {
            echo "You are really a nice person, have a nice day! </br>";
        }

        /* Calling a function */
        writeMessage();
        echo "<hr/>";
        writeMessage();
        echo "<hr/>";

        /* Functions with parameters */
        function addFunction($num1, $num2)
        {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum </br>";
        }

        /* Pass by reference - use ampersand or & in parameter */
        function changeNum(&$num)
        {
            $num = $num + 10;
        }

        function returnProduct($num1, $num2)
        {
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 50;

        addFunction(17, 10);
        addFunction(10, $num);
        addFunction('20', '30');

        changeNum($num);
        echo $num.'</br>';

        $return_value = returnProduct(10, 10);
        echo $return_value.'</br>';
    ?>
<?php
    require 'include/footer.php';
?>