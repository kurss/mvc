<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html>
<head>
<title>READ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require 'settings/settings.php'; ?>
<?php require 'functions.php'; ?>

<div class="container">
    
<div class="text-center">   
    <?php include 'includes/button.php';?>
    <h3 style="padding-bottom:50px;"><?php myName (); ?></h3>
</div> 

<h5 class="text-center" ><strong>Описание товара</strong></h5>
<div class="panel panel-default myTable">
    <div class="panel-body text-justify" ><?php read ();?></div>
</div>



</div>

</body>
</html>