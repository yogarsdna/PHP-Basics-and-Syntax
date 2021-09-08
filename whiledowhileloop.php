<?php
    $title = 'While Loop';
    include 'include/header.php';
?>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        //Infinite Loop
        //while($grade < 10)
        //{
        //    echo '<p>I AM LESS THAN TEN!</p>';
        //}
        
        //Pre-Condition Loop
        while($grade < 10)
        {
            echo '<p>I AM LESS THAN TEN!</p>';
            $grade++;
        }

        echo'EXIT WHILE LOOP!';
    ?>

    <h1>Do While Loop</h1>
    <?php
        //Post-Condition Loop
        $grade = 0;
        do
        {
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }
        while($grade < 10);

        echo'EXIT DO WHILE LOOP!';
    ?>
<?php
    require 'include/footer.php';
?>