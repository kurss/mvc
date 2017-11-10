<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html>
<head>
<title>EDIT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require 'settings/settings.php'; ?>
<?php require 'functions.php'; ?>

<div class="container text-center">
    
    <?php include 'includes/button.php';?>
    
    <!--<h3><?php myName3 ();?></h3>-->
    <h3 ><input type="text" form="myForm" readonly value="<?php myName3 (); ?>" name="info2" class="text-center" style="background-color:#eee;border-style:none;"></h3>
    
    <div class="myForm">
        <form method='post' action="<?php myServer (); ?>" id="myForm">
            
            
        <div class="form-group">
            <label for="myDescription">Описание товара</label>
        <textarea name='info' rows='10' cols='30' minlength="140" maxlength="200" placeholder="Максимально допустимое количество символов 200, минимально допустимое 140" class="form-control myText" <?php myAttr ();?> id="myDescription"><?php edit (); ?></textarea>
        </div>
        <div class="form-group">
            <label for="myPrice">Цена, руб.</label>
            <input type='number' name='price' class="form-control myInput" placeholder="Введите цену товара в рублях" value="<?php myName2 ();?>" <?php myAttr ();?> id="myPrice" min="0" max="99999" step="1"><br> 
            </div>
        <button type='submit' name='submiter' class="btn btn-info">Изменить данные товара</button>
        </form>
    </div>
    
    <?php  edit2 ();?>
</div>

</body>
</html>