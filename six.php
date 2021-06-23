<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 6 PHP part 5</title>
</head>
<body>
<?php
if(isset($_GET['server']) && isset ($_GET['language'])) {
    echo strip_tags('le langage est : ' .$_GET['language']. ' et le serveur est : '.$_GET['server']);
}
else{
    echo '<script>alert("Error! No good!")</script>';
}
?>
</body>
</html>