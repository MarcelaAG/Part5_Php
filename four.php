<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 4 Part 5 Php</title>
</head>
<body>
<h2>Ex 4</h2>
<?php
$moreInfo = $_GET['server'];
if(isset($_GET['server'])) {
    echo $moreInfo;
}
else{
    echo '<script>alert("Error! No good!")</script>';
}
?>
</body>
</html>