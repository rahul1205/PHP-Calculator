<?php
header("Content-Type: text/plain");
include 'calculator.php';

if (isset($_GET['expr'])) {
$obj=new newCalculator($_GET['expr']);

    echo $obj->getValue();
}
