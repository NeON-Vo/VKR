<?php
    include_once 'connect.php';
    
    if(isset($_POST['change']) && isset($_POST['active'])!="") {
        $active = preg_replace('/[0-9]+/', '', $_POST['active']);
        $id = preg_replace('/[^0-9]/', '', $_POST['active']);
        $sql = "UPDATE `swiper_first_screen` SET `active` = '$active' WHERE `id` = '$id'";
        $mysqli -> query($sql);
    }
    
    if(isset($_POST['delete']) && is_array($_POST['delete'])) {
        foreach($_POST['delete'] as $id => $useless){
            $sql = "DELETE FROM `swiper_first_screen` WHERE `swiper_first_screen`.`id` = '$id'";
            $mysqli -> query($sql);
            ?> 
                <script>
                    alert("Вы удалили слайд!");
                    document.location.replace("swiper_first_screen.php");
                </script> 
            <?php
        }
    }

    if(isset($_POST['add'])) {
        $name = $_POST['name'];
        $uploaddir = './img/swiper_first/';
        $uploadfile = $uploaddir . basename($_FILES['way']['name']);
        move_uploaded_file($_FILES['way']['tmp_name'], $uploadfile);
        $way = basename($_FILES['way']['name']);
        $sql = "INSERT INTO `swiper_first_screen` (`name/alt`, `way`) VALUES ('$name', '$way')";
        $mysqli -> query($sql);
        ?> 
            <script>
                alert("Вы добавили слайд!");
                document.location.replace("swiper_first_screen.php");
            </script> 
        <?php
    }

    if(isset($_POST['enter'])) {
        header("location: enter.php");
    }
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Фото слайдера главного экрана</title>
    </head>

    <body class="center_admin">
        <?php
            if(!empty($_SESSION['id'])) {
                ?>
                    <span class="out_admin">
                        <form action="" method="POST">
                            <input class="button_screen_admin_out"  class="text_admin" value="Выйти" name="out" type="submit">
                        </form>
                    </span>
                    <span class="back_admin">
                        <form action="" method="POST">
                            <input class="button_screen_admin_out"  class="text_admin" value="Назад" name="back" type="submit">
                        </form>
                    </span>
                    <span class="back_admin">
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text_admin" id="exampleModalToggleLabel">Добавление</h5>
                                        <button type="button" class="btn-close button_modal" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form class="center_column_block" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <textarea class="input_admin_change"  class="text_admin" placeholder="Введите название фото" name="name" type="text"></textarea>
                                            <input class="input_admin_change"  class="text_admin" placeholder="Выберите фото" name="way" type="file" accept="image/*">
                                        </div>
                                        <div class="modal-footer">
                                            <button name="add" class="button_screen_admin_change" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Добавить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a class="button_screen_admin" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Добавить</a>
                    </span>
                <?php
            }
            if(!isset($_SESSION['id'])) {
                ?> 
                    <span class="enter_admin text_admin">Вы не вошли в админ-панель</span> 
                    <span class="enter_admin">
                        <form action="" method="POST">
                            <button class="button_screen_admin_enter" name="enter" type="submit">
                                <p class="text_admin">Войти</p>
                            </button>
                        </form>
                    </span>
                <?php
            } else {
        ?>

        <div class="screen_admin none1 none650">
            <p class="text_admin left_block margin_top_bottom">
                <span class=first_table_swiper><?php echo "Название";?></span>
                <span class=second_table_swiper><?php echo "Фото";?></span>
                <span class=third_table_swiper><?php echo "Статус";?></span>
            </p>
            <br>
        </div>
        <?php $result = $mysqli-> query("SELECT * FROM `swiper_first_screen`");
            foreach($result as $rows) {?>
                <form class="form_admin" method="POST">
                <div class="screen_admin">
                    <p class="text_admin left_block">
                        <span class="first_table_swiper"><?php echo $rows['name/alt']?></span> <span class="none1150"><br class="none1150"></span>
                        <span class="second_table_swiper"><img class="admin_image" src="./img/swiper_first/<?php echo $rows['way']?>"></span> <span class="none1150"><br class="none1150"></span>
                        <span class="third_table_swiper"><?php
                            if($rows['active'] == "активно") {
                                ?><select name="active" class="select_admin">
                                    <option selected disabled hidden value="none">активно</option>
                                    <option value="активно<?php echo $rows['id']?>" class="background_color_screen_sixth">активно</option>
                                    <option value="не активно<?php echo $rows['id']?>" class="background_color_screen_sixth">не активно</option>
                                </select><?php
                            } elseif($rows['active'] == "не активно") {
                                ?><select name="active" class="select_admin">
                                    <option selected disabled hidden value="none">не активно</option>
                                    <option value="активно<?php echo $rows['id']?>" class="background_color_screen_sixth">активно</option>
                                    <option value="не активно<?php echo $rows['id']?>" class="background_color_screen_sixth">не активно</option>
                                </select><?php
                            }?></span>
                        <input class="button_screen_admin"  class="text_admin" value="Обновить" name="change" type="submit">
                        <input class="button_screen_admin"  class="text_admin" value="Удалить" name="delete[<?php echo $rows['id'];?>]" type="submit">
                    </p>
                    <br>
                </div>
                </form>
            <?php
            }
        ?>

        <script src="./bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
    }
    
    $mysqli -> close();
?>