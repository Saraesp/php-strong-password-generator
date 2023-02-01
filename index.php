<?php
   
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
            <div class="container bg-blue">
                <div class="text-center">
                    <h1 class="text-secondary">Strong Password Generator</h1>
                    <h3 class="text-white">Genera una password sicura</h3>
                </div>
                <div class="bg-white p-4 mt-5">
                    <form action="./dashboard.php" method="GET">
                        <div class="row">
                            <label class="col-sm-4 col-form-label">Lunghezza Password:</label>
                            <div class="col-sm-auto">
                                <input type="number" name="lungh_password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary col-sm-auto">Invia</button>
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>