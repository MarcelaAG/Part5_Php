<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 3 Part 5 hp</title>
</head>
<body>
<h2>Ex 3</h2>
    <?php
$check = $_GET['age'];
if ($check >= 18 && $check < 130) {
    print "You're in the prime of your life.\n". ' '."You are". ' '.$check;
} else {
    print "You're not in the prime of your life\n";
}
?>
</body>
</html>