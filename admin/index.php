<?php header('Content-Type: text/html; charset=utf-8');?>
<?php require 'security.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN</title>
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
        <?php include 'includes/button-main.php';?>  
        <h3>У вас есть следующие товары:</h3>
    </div>

        <?php include 'includes/table.php';?>

</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!-- код для сортировки данных в алфавитном порядке в первом столбце таблицы -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.29.0/js/jquery.tablesorter.min.js"></script>
<script src="js/myJs.js"></script>
<script>$(document).ready(myJs);</script>
<!-- /код для сортировки данных в алфавитном порядке в первом столбце таблицы -->
</body>
</html>
