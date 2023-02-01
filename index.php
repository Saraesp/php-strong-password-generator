<?php
    function generateRanPassword($lenght){
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:\<>,.?/\\;';

        $password = '';

        if(strlen($password) < $lenght){
            $randomPwd = $alphabet[rand(0, strlen($alphabet) - 1)];
            $password .= $randomPwd;
        };
    }

    $error = '';
    if(isset($_GET['lung-password']) && $_GET['lung-password'] !== ''){

        $error = 'La lunghezza della password non è valida';
    }
    elseif(isset($_GET['lung-password']) && $_GET['lung-password'] !== ''){
        generateRanPassword($_GET['lung-password']);
    }

    $password = generateRanPassword($_GET['lung-password']);
    
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
            <div class="alert alert-primary" role="alert">
                <?php echo $error ?>
            </div>
            <div class="alert alert-success" role="alert">
                La password generata è: <?php echo $password ?>
            </div>
            <div class="bg-white p-4 mt-5">
                <form action="./index.php" method="GET">
                    <div class="row ">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Lunghezza Password:</label>
                        <div class="col-sm-auto">
                            <input type="number" name="lungh-password" class="form-control">
                        </div>
                         <button type="button" class="btn btn-primary col-sm-auto">Invia</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>