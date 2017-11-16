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