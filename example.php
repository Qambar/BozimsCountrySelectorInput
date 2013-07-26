<?php
    
    include './BozimsCountrySelector.class.php';

    //Example 1 : Australia
    $bozims = new BozimsCountrySelector("101.102.103.104");
    echo $bozims->generateDropDown();
    echo '<hr/>';
    
    //Example 2 : United Kingdom
    $bozims = new BozimsCountrySelector("92.234.31.180");
    echo $bozims->generateDropDown();
    echo '<hr/>';

    //Example 3 : From visitor's ip address
    $bozims = new BozimsCountrySelector($_SERVER['REMOTE_ADDR']);
    echo $bozims->generateDropDown();
?>