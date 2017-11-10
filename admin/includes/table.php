<?php delete(); ?>
<table class="table table-condensed myTable tablesorter" id="myTable">
        <thead>
            <tr>
                <th class="text-center">Название</th>
                <th class="text-center">Цена, руб</th>
                <th colspan="2" class="text-center">Действие</th>
            </tr>
        </thead>
<tbody>
<?php
$conn = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
$sql = "SELECT name, price FROM tovar";
if (!$conn) {
            die("Ошибка подключения: " . mysqli_connect_error());
            }  
$result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {  
while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
        <td><a href="read.php?ffile=<?php echo $row["name"];?>"><?php echo $row["name"];?></a></td>
        <td class="text-center"><?php echo $row["price"]; ?></td>
        <td><small><a href="edit.php?ffile2=<?php echo $row["name"];?>&price=<?php echo $row["price"];?>">Редактировать</a></small></td>
        <td><small><a href="<?php myServer (); ?>?ffile3=<?php echo $row["name"];?>" onclick="if(!confirm('Вы уверены?')){return false};">Удалить</a></small></td>
        </tr>
<?php }
    echo "</tbody>";
    } 
    
mysqli_close($conn);
?>
</table>