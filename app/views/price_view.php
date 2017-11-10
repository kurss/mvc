<?php require 'admin/functions.php'; ?>
<section id="plan" style="margin-top:120px;">
            <div class="container">
                    <div class="title">
                        <h2 class="flex fadeInUp animated">Цены</h2>
                        <p class="description fadeInUp animated">У нас есть следующие товары</p>
                    </div><!--end title-->
            
                    <div class="row"> 
                                  
<?php   foreach ($data as $row) { //start foreach ?>
    
<div class="price-table col-sm-6 col-md-3 fadeInUp myPrice" data-wow-delay="0.1s">
    
<?php 
//Библиотека stefangabos/zebra_image из Packagist для обрезки изображений    
    $image = new Zebra_Image();
    $image->auto_handle_exif_orientation = false;
    $image->source_path = 'admin/'.$target_dir.$row["url"];
    $image->target_path = 'admin/'.$target_dir_zebra_images.$row["url"];
    $image->jpeg_quality = 100;
    $image->preserve_aspect_ratio = true;
    $image->enlarge_smaller_images = true;
    $image->preserve_time = true;
    $image->handle_exif_orientation_tag = true;
    if (!$image->resize(100, 100, ZEBRA_IMAGE_CROP_CENTER)) {

    // if there was an error, let's see what the error is about
    switch ($image->error) {

        case 1:
            echo 'Source file could not be found!';
            break;
        case 2:
            echo 'Source file is not readable!';
            break;
        case 3:
            echo 'Could not write target file!';
            break;
        case 4:
            echo 'Unsupported source file format!';
            break;
        case 5:
            echo 'Unsupported target file format!';
            break;
        case 6:
            echo 'GD library version does not support target file format!';
            break;
        case 7:
            echo 'GD library is not installed!';
            break;
        case 8:
            echo '"chmod" command is disabled via configuration!';
            break;
        case 9:
            echo '"exif_read_data" function is not available';
            break;

    }

// if no errors
} else 
   
   echo '<a href="#" data-toggle="modal" data-target="#'.$row["id"].'" ><img src=/admin/'.$target_dir_zebra_images.$row["url"].' class="img-thumbnail" alt="tovar"></a>';
   
?>
    
    <h6><?php echo $row["name"];?></h6>
    <span class="dollar"><i class="fa fa-rub" aria-hidden="true"></i></span>
    <span class="price"><?php echo $row["price"]; ?></span><br>
    <p><?php echo $row["description"];?> </p>
    <div id="<?php echo $row["id"]; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog" onclick="$('.modal').modal('hide');">

    <?php echo '<img src=/admin/'.$target_dir.$row["url"].'  alt="tovar" width="500" style="margin:auto;padding-top:85px;">';?>

    </div>
    </div>
        
    </div><!--end div class price-table col-sm-6 col-md-3-->

<?php } //end foreach  ?>
                    
                    </div><!--end row-->
            </div><!--end container-->                                       
</section><!--end plan-->     