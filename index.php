<?php
    $title = 'Index';
    include 'include/header.php';
?>

    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php
        //Printing HTML using echo
        echo 'Hello PHP!';
        //You can echo HTML tags 
        echo '<br/>';
        echo 'This is the second line';
        echo '<br/>';
   
        //Variables need a '$'. They are not strongly typed
        $name = 'Gede Yoga Arisudana';
        $age = 19;
        $hobby = 'playing soccer';
        //Echo variable
        echo $name;
        echo '<h1>Hi, my name is '.$name.'</h1>';
        echo '<h1>I am '.$age.' years old</h1>';
        //Echo using double quotes and interpolation
        echo "<h1>My hobby is $hobby</h1>"
    ?>

    <button type = "button" class = "btn btn-primary">Click Me!</button>
    <button type = "button" class = "btn btn-secondary">Click Me!</button>
    <button type = "button" class = "btn btn-info">Click Me!</button>

<?php
    require 'include/footer.php';
?>