<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html>
<head>
<title>CREATE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require 'settings/settings.php'; ?>
<?php require 'functions.php'; ?>


<div class="container text-center myTable">
    
<?php include 'includes/button.php';?>

    <div class="myForm">
        <form method='post' action="<?php myServer ();?>" enctype="multipart/form-data">
        <div class="form-group">
        <label for="myTovar">Выберите название товара</label>      
       
       <?php include 'includes/select.php';?>
      
        </div><br>
        
        <div class="form-group">
        <label for="myDescription">Описание товара</label>
        <textarea name='info' rows='10' cols='30' minlength="140" maxlength="200" class="form-control" placeholder="Максимально допустимое количество символов 200, минимально допустимое 140" required id="myDescription"><?php myTextarea (); ?></textarea>
        </div><br>
        
        <div class="form-group">
        <label for="myPrice">Цена, руб.</label>
        <input type='number' name='price' class="form-control myInput" placeholder="Введите цену товара в рублях"  required id="myPrice" min="0" max="99999" step="1">
        </div><br>
        
        <input type="file" name="fileToUpload" id="fileToUpload" required style="margin:auto;"><br>
        
        <button type='submit' name='submiter' class="btn btn-info">Создать товар</button>
        </form>
    </div>

</div>

<?php create (); ?>

</body>
</html>