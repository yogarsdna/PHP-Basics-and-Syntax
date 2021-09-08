<?php
    $title = 'String Manipulation';
    include 'include/header.php';
?>
    <h1>String Manipulation</h1>
    <?php
        //Concatenation of strings
        $phrase1 = "The future star of FC Barcelona";
        $phrase2 = "will start his debut tonight";
        $name = "gede yoga arisudana";

        echo $phrase1.", named Pedri, ".$phrase2;
        echo '<br/>';
        echo '<hr/>';

        //String transformation
        echo 'Upper case first letter: '.ucfirst($name).'</br>';
        echo 'Upper case first letter of each word: '.ucwords($name).'</br>';
        echo 'Upper case: '.strtoupper($name).'</br>';
        echo 'Lower case: '.strtolower("GEDE YOGA ARISUDANA").'</br>';
        echo '<hr/>';

        echo 'Repeat string: '.str_repeat('a', 10).'</br>';
        echo 'Repeat string with upper case/nested function: '.strtoupper(str_repeat('a', 10)).'</br>';
        echo '<hr/>';

        echo 'Get a substring: '.substr($name, 5, 10).'</br>';
        echo 'Get a substring: '.substr($name, 5, 4).'</br>';
        echo 'Get position of string: '.strpos($name, 'y').'</br>';
        //Returns NULL
        //echo 'Get position of string: '.strpos($name, 'z').'</br>'
        echo '<hr/>';

        echo 'Find character "G": '.strchr($name, 'G').'</br>';
        echo 'Find character "g": '.strchr($name, 'g').'</br>';
        echo 'Find character "a": '.strchr($name, 'a').'</br>';
        echo 'Find character "d": '.strchr($name, 'd').'</br>';
        echo '<hr/>';

        echo 'Find length of string: '.strlen($name).'</br>';
        echo '<hr/>';

        echo 'Without trim: '."A"." B C D "."E".'</br>';
        echo 'Trim spaces on both sides: '."A".trim(" B C D ")."E".'</br>';
        echo 'Trim spaces on left: '."A".ltrim(" B C D ")."E".'</br>';
        echo 'Trim spaces on right: '."A".rtrim(" B C D ")."E".'</br>';
        echo '<hr/>';

        echo 'Replace string with another: '.str_replace("tonight", "tomorrow", $phrase2).'</br>';
    ?>  
<?php
    require 'include/footer.php';
?>