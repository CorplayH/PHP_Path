<?php
include_once 'functions/functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/index.css">
    <title>Calculator</title>
    <style>
        body{
            background: #726930;
        }
    </style>
</head>
<body>
<div class="wrap">
    <form action="" method="post" class="form">
        <input type="text" name="first_number" class="textinput" value="<?php print_r($first)?>">
        <select name="math" id="math" class="select">
            <option value="+" <?php selected($math,"+");?>>+</option>
            <option value="-" <?php selected($math,"-");?>>-</option>
            <option value="*" <?php selected($math,"*");?>>x</option>
            <option value="/" <?php selected($math,"/");?>>/</option>
        </select>
        <input type="text" name="second_number" class="textinput" value="<?php print_r($second)?>">
        <button class="button">Submit</button>
    </form>
    <div class="result">
        <?php print_r($error); ?>
        <?php print_r($first.'&nbsp'.$math.'&nbsp'.$second.'&nbsp'.'='.'&nbsp'.$result);?>
    </div>
</div>
</body>
</html>