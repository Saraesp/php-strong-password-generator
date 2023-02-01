<?php
    function generateRanPassword($lenght)
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:\<,.?/\\;';

        $pwd = '';

        while(strlen($pwd) < $lenght){
            $shfl = $alphabet[rand(0, strlen($alphabet) -1)];
            $pwd .=  $shfl;
        }
        return $pwd;
    }

    $error = '';
    if(isset($_GET['lungh_password']) && $_GET['lungh_password'] !== ''){
        
        $pwd = generateRanPassword($_GET['lungh_password']);
    }
    elseif(isset($_GET['lungh_password']) && $_GET['lungh_password'] === ''){
        
        $error = 'Non hai inserito un valore per la lunghezza';
    }

   
    
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
                <?php if($error !== ''){ ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php } ?>
                <?php if(isset($pwd)){ ?>
                    <div class="alert alert-success" role="alert">
                        <p>La password generata è: <strong><?php echo $pwd ?></strong></p> 
                    </div>
                <?php } ?>
                <div class="bg-white p-4 mt-5">
                    <form action="./index.php" method="GET">
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