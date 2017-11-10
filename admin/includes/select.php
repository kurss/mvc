<select class="form-control" id="myTovar" name='info2'>
    <?php 
        $jsonPath = 'js/tovar.json';
        $jsonFile = file_get_contents($jsonPath);
        $jsonArray = json_decode($jsonFile);
        $tovar = $jsonArray->response;
        foreach($tovar as $value){
    ?>

    <option value="<?php echo $value;?>">
    <?php echo $value;?>
    </option>
 
    <?php } ?>
</select>