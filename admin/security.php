<?php

function _auth()
{
    session_start();

    $pass = 'password';

    if (isset($_POST['pass_value'], $_POST['pass_btn'])) {
        if ($pass == $_POST['pass_value']) {
            $_SESSION['unique_sdfcdrgbtrhbgfnb'] = true;
        } else {
            $_SESSION['sdfcdrgbtrhbgfnb'] = false;
            echo '
            
            <div class="text-center alert alert-warning" style="width:200px; margin:0 auto; ">Failed password</div>
            ';
        }
    }
    if ($_SESSION['unique_sdfcdrgbtrhbgfnb'] !== true) {
        echo 
            '  <!DOCTYPE html>
                <html>
                <head>
                <title>HOME WORK</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
                <link rel="stylesheet" href="css/signin.css">
                </head>
                <body>' .
                
            '<form method="POST" class="form-signin">' .
            '<div>Enter password:<br /><input type="text" name="pass_value" size="30" class="form-control"/></div><br>' .
            '<div><input type="submit" value="Enter" name="pass_btn" class="btn btn-lg btn-primary btn-block"/></div>' .
            '</form>'.
            
            '</body>
            </html>'; 
        die();
    }
}

_auth(); 

?>

