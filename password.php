<?php

require_once __DIR__ . '/functions.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

    
    <title>La tua password</title>
</head>

<body>

    <div class="container">
        <div class="row py-4">
            <div class="col text-center">
                <h2 class="py-3 text-danger">La tua password è: </h2>
                <h2><?php echo getRandomPW($_SESSION['pwlength'], $_SESSION['charincludes'], $_SESSION['norepeat']) ?></h2>
                
            </div>
        </div>
    </div>
 
</body>

</html>