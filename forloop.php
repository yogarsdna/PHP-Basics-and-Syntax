<?php
    $title = 'For Loop';
    include 'include/header.php';
?>
    <h1>For Loop</h1>
    <?php
        //For Loop
        for($count = 0; $count < 10; $count++)
        {
            echo '<p>HELLO WORLD</p>';
        }
        
        for($count = 0; $count < 10; $count++)
        {
            echo "<p>The count is: $count</p>";
        }
    ?>
<?php
    require 'include/footer.php';
?>