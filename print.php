<?php
$word = $_GET["bad-word"];
$text = $_GET["paragraph"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <h1>
                        Questo è il paragrafo: <?php echo $text ; ?>
                    </h1>
                    <h2>
                        è lungo: <?php $text; echo strlen(trim($text)); ?>
                    </h2>
                    <h2>
                      Abbiamo censurato il tuo testo, come volevi! <?php echo str_ireplace($word, "***", $text); ?>
                    </h2>
            </div>
        </div>
    </div>