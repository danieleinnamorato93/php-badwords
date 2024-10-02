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
            <form action="./print.php" method="GET">
    <div class="mb-3">
    <label for="bad-word" class="form-label">Parolaccia:</label>
    <input class="form-control" type="text" id="bad-word" name="bad-word" placeholder="Inserisci qui la parola da censurare" >
    </div>

    <div class="mb-3">
    <label for="paragraph" class="form-label">Il Paragrafo:</label>
    <input class="form-control" type="text" id="paragraph" name="paragraph" placeholder="Inserisci qui il paragrafo" >
    </div>

        <input class="btn btn-primary" type="submit" value="Submit">
        <input class="btn btn-primary" type="reset" value="Reset">
  
    </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>