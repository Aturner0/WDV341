<?php

    $yourName  = "Austin"

    function displayName(){
       
        echo $yourName;
    }

    $number1 = "NumberOne"

    function displayNumber1(){

        echo $number1;

    }

    $number2 = "NumberTwo"

    function displayNumber2(){

        echo $number2;
    }

    $number1 = "NumberOne"
    $number2 = "NumberTwo"
    $number3 = "NumberThree"

    function displayBothVar($inputNumber3){

    
        echo $number1 + $number2;

    }

    $languages = ["PHP","HTML","Javascript"]
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>

        let laguages = [<?php echo "'".$languages[0]."'","'".$languagues[1]."'","'".$languages[2]."'"?>];

    </script>
</head>
<body>
    <h1>PHP Basics</h1>

    <h2>Both Number:<?php   displayBothVar();?></h2>

    <h3>My Name:<?php echo displayNmae();?></h3>


    
</body>
</html>