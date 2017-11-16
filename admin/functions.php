<?php
$target_dir = "uploads/";//оригиналы изображений
$target_dir_zebra_images = "zebra-images/";//обрезаные копии изображений при помощи библиотеки stefangabos/zebra_image из Packagist 

function delete () {

    if (isset($_GET['ffile3'])) {
    $name = $_GET['ffile3'];
    $conn = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
    $sql = "DELETE FROM tovar WHERE name='$name'";

    if (!$conn) {
        die("Ошибка подключения: " . mysqli_connect_error());
        }

    if (!mysqli_query($conn, $sql)) {
    echo "Ошибка удаления: " . mysqli_error($conn);
        }

    mysqli_close($conn);
    }
}


function create () {
    global $target_dir;
	global $target_dir_zebra_images;
    
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if(isset($_POST['submiter'])) {    
        $info = trim(filter_var($_POST['info'], FILTER_SANITIZE_STRING));      
        $info2 = trim(filter_var($_POST['info2'], FILTER_SANITIZE_STRING));
        $price = $_POST['price'];
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
       
        $uploadOk = 1;
            } else {
        echo '<p class="text-center">Этот файл - не изображение.</p>';
        $uploadOk = 0;
        }
        
    if (file_exists($target_file)) {
    echo '<p class="text-center">Извините, такой файл уже существует.</p>';
    $uploadOk = 0;
    }
    
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo '<p class="text-center">Извините, Ваш файл слишком большой.</p>';
    $uploadOk = 0;
    }
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
       
    echo '<p class="text-center">Извините, только JPG, JPEG, PNG и GIF файлы разрешены.</p> ';
    $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
    echo '<p class="text-center">Извините, Ваш файл не загружен.</p>';
    
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        $foto = basename( $_FILES["fileToUpload"]["name"]);
        $conn = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
        $sql = "INSERT INTO tovar (name, description, price, url) VALUES ('$info2', '$info', '$price' , '$foto')";
        $sql2 = "SELECT id FROM tovar WHERE name='$info2'";

        if (!$conn) {
            die("Ошибка подключения: " . mysqli_connect_error());
            }    

        $result = mysqli_query($conn, $sql2);  
        $row = mysqli_fetch_assoc($result);
        
        if (!empty($row["id"])) {
             die('<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-down"></span></h2><br>
                <div style="width:200px; margin:0 auto;">
                <p class="alert alert-warning text-center" role="alert">Товар с названием <span><b>'.$info2.'</b></span> уже существует в базе!</p>
                </div>
                     ');
            }
        
        if (mysqli_query($conn, $sql)) {
		
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
		$image->resize(100, 100, ZEBRA_IMAGE_CROP_CENTER);
           
        echo '<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-up"></span></h2>';
        } else {
        echo '<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-down"></span></h2><br>';    
            }
        mysqli_close($conn);  
        
    } else {
        echo '<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-down"></span></h2><br>
        <p class="text-center">Извините, возникла ошибка при загрузке Вашего файла.</p>';
        
            }
        }
       
    }
}

function read () {
    global $target_dir;

    if (isset($_GET['ffile'])) {
        $about = $_GET['ffile'];
        $conn = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
        $sql = "SELECT description, url FROM tovar WHERE name = '$about' ";

        if (!$conn) {
            die("Ошибка подключения: " . mysqli_connect_error());
        }

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {  
            $row = mysqli_fetch_assoc($result);
            echo '<img src='.$target_dir.$row["url"].' class="img-thumbnail pull-left" alt="tovar" width="100" style="margin-right:10px;">';
            echo nl2br ($row["description"]);
            }
        } else {
        echo "0 results";
            }
    mysqli_close($conn);
}


function edit () {

    if (isset($_GET['ffile2'])) {
        $about = $_GET['ffile2']; 
        $conn = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
        $sql = "SELECT description FROM tovar WHERE name = '$about'";
        if (!$conn) {
            die("Ошибка подключения: " . mysqli_connect_error());
            }

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {  
        $row = mysqli_fetch_assoc($result);
        echo $row["description"];
        }
    } 
}

function edit_price () {

    if (isset($_GET['price'])) {
    $newprice = $_GET['price']; 
    echo $newprice;
    }
}

function edit2 () {

if(isset($_POST['submiter'])) {    
    
    $info = trim(filter_var($_POST['info'], FILTER_SANITIZE_STRING));      
    $info2 = $_POST['info2']; 
    $price = $_POST['price'];
    $conn = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
    $sql = "UPDATE tovar SET price='$price', description = '$info'  WHERE name='$info2'";
    
    if (!$conn) {
        die("Ошибка подключения: " . mysqli_connect_error());
        }    


    if (mysqli_query($conn, $sql)) {

    echo '<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-up"></span></h2>';
        } else {
    echo '<h2 class=" text-center"><span class="glyphicon glyphicon-thumbs-down"></span></h2><br>';    
        }
    mysqli_close($conn);
    }
}

function myServer () {
    echo htmlspecialchars($_SERVER["PHP_SELF"]);
}

function myName () {
    if (isset($_GET['ffile'])) {echo $_GET['ffile'];}
}

function myName2 () {
    if (isset($_GET['price'])) {echo $_GET['price'];}
}

function myName3 () {
    if (isset($_GET['ffile2'])) {echo $_GET['ffile2'];}
}


function myAttr () {
    if(isset($_POST['submiter'])) {   
        echo 'readonly'  ; 
        } else {
        echo 'required';
        }
}

function myTextarea () {
    if(isset($_POST['submiter'])) {   
            $info = $_POST['info'];
            echo $info; 
        }
}
?>