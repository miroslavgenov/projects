<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    foreach($_POST as $key => $value){
        echo "$key-> $value";
    }
    ?>
    <br><a href="site.html">Back</a>
</body>
</html>
