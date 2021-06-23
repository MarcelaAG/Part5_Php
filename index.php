<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 5 Php Index Page</title>
    <style>
    body{
        background-color: pink;
        font-family: monospace;
        font-size: 18px;
    }
    h2 p{
    font-family: Arial;
    }
    input{
        background-color: gray;
        color: crimson;
        padding: 10px;
    }
    input:hover{
        color:blue;
    }
    </style>
</head>
<body>
<h1>Exercices Php</h1>
<a href="http://part1">Part 1</a><br>
<a href="http://part2">Part 2</a><br>
<a href="http://part3">Part 3</a><br>
<a href="http://part4">Part 4</a><br>
<a href="http://part5">Part 5</a><br>
<a href="http://part6">Part 6</a><br>
<a href="http://part7">Part 7</a><br>
    <h2>Exercice 1</h2>
    <a href="index.php?last=AGUILERA-BLANC&amp;first=Marcela">Take a look here</a> 
    <?php
    echo 'last : ' . $_GET['last'].' '.'first : '.$_GET['first'];
    ?>
    <h2>Exercice 2</h2>
    <a href="hi.php?last=AGUILERA-BLANC&amp;first=Marcela&amp;age=39">Take a look here</a>
    <h2>Exercice 3</h2>
    <a href="three.php?last=AGUILERA-BLANC&amp;first=Marcela&amp;age=209">Take a look here</a>
    <h2>Exercice 4</h2>
    <a href="four.php?language=Php&amp;server=apache">Take a look here</a>
    <h2>Exercice 5</h2>
    <a href="five.php?language=Php&amp;server=apache">Take a look here</a>
    <h2>Exercice 6</h2>
    <a href="six.php?language=Php&amp;server=apache">Take a look here</a>
</body>
</html>