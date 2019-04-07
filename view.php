<?php

require 'vendor/autoload.php';
require 'Posts.php';
$a = new Posts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width: 90%;
            margin: 0 auto
        }
        .text-success{
            color: green
        }
        .border{
            border: 1px solid #eee
        }
        .mb-1{
            margin-bottom: 1em
        }
    </style>
</head>
<body>
    <h1>
        POSTS
    </h1>
    <hr>
    <div class="container">
        <?php foreach($a->read() as $key => $value): ?>
            <div class="border mb-1">
                <h4><?= $value; ?></h4>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>