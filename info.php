<?php
session_start();

if(!isset($_SESSION['access_token'])){
    header('Location: login.php');
    exit();
}
  
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
                <div class="col-md-6 col-offset-9" align="center">
                    <img src="<?php echo $_SESSION['picture']?>">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>   
                                <td> First Name</td>
                                <td><?php echo $_SESSION['givenName']?> </td>
                            </tr>
                            <tr>   
                                <td> Last Name</td>
                                <td><?php echo $_SESSION['familyName']?> </td>
                            </tr>
                            <tr>   
                                <td> Email</td>
                                <td><?php echo $_SESSION['email']?> </td>
                            </tr>
                            <tr>   
                                <td> Gender</td>
                                <td><?php echo $_SESSION['gender']?> </td>
                            </tr>
                        </tbody>
                    
                 </div>
                 </div>
                 <div>

            </body>
            </html>



        

