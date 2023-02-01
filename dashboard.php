<?php
    session_start();
    include __DIR__ . '/function.php';

    if(!isset($_GET['lungh_password'])){
        header('Location: ./index.php');

    }

    $_SESSION['password'] = $pwd;
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
    <div class="container">
        <div class="row">
            <div class="col-12">
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
            </div>
        </div>
    </div>
</body>
</html>