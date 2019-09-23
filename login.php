<?php
    require_once "config.php";

    if(isset($_SESSION['access_token'])){
        header('Location: info.php');
        exit();
    }

    $LoginURL = $gClient->createAuthUrl();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width",user-scalable=no,initial-scale=1.0>
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>SSD Oauth</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
            <body>
                <div class="container" style="margin-top: 100px">
                <div class="row justify-content-center">
                <div class="col-md-6 col-offset-3" align="center">

                    <form>
                    <input placeholder="Email." name="email" class="form-control"><br>
                    <input placeholder="Password." type="password" name="email" class="form-control"><br>
                    <input type="submit" value="Log In" class="btn btn-primary">
                    <input type="button" onclick="window.location='<?php echo $LoginURL?>'; " value="Log With Google" class="btn btn-danger">
                    </form>
                 </div>
                 </div>
                 <div>

            </body>
            </html>



        

