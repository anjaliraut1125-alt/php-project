<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP START [14-03-2026]</h1>

    <?php

     echo "Hello PHP [14-03-2026]<br><br>";
     echo "PHP  is stand for [Hypertext Preproceesor]<br><br>";
     echo "I am a server-side scripting language <br><br>" ;
     echo "<hr>";

    // variable in php
    $name = "Anjali Singh";
    $age  = 23;
    $price = 55.66;
    $isLogin = true;

    echo "<h1>Variable In PHP</h1>";
    echo  "I Am  $name and I Am $age years old. <br>";
    echo $price . "<br>" ;
    echo $isLogin . "<br>"; 
    echo "<hr>";


    //php operators
    //arithmetic operators

    $a = 10;
    $b = 5;
    
    echo "<h1>Arithmetic Operators</h1>";
    echo $a + $b . "<br>"; //15
    echo $a - $b . "<br>"; //5
    echo $a * $b . "<br>"; //50
    echo $a / $b . "<br>";
    echo "<hr>";

    //conditional statement
    //if statement

    $age1 = 18;

    echo "<h1>If Statement</h1>";
    if($age1 >= 18){
        echo "You are able to vote";
    }
    echo "<hr>";


    //if else
    $age= 19;

    echo "<h1>If Else</h1>";
    if($age >= 18){
        echo "Adult";
          echo "<hr>";
    }else{
        echo "Minor";
    }
    echo "<hr>";


    //loop in php
    //for loop

    echo "<h1>Loop In PHP</h1>";
    for($i=1; $i<=5; $i++){
        echo $i;
    }
     
    echo "<hr>";


    ?>


</body>
</html>


