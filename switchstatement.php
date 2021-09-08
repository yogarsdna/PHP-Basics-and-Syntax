<?php
    $title = 'Switch Statement';
    include 'include/header.php';
?>
    <h1>Switch Statement</h1>
    <?php
        $grade = 'A';

        switch($grade)
        {
            case 'A': 
                echo '<h2 style = "color: green">YOU ARE A SUPERSTAR!</h2>';
                break;
            case 'B':
                echo '<h2 style = "color: blue">YOU DID WELL!</h2>';
                break;
            default:
                echo '<h2 style = "color: red">YOU HAVE FAILED...</h2>';
                break;
        }
    ?>
<?php
    require 'include/footer.php';
?>