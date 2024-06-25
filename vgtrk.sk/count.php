<?php
    include_once 'connect.php';

    $section = "area";
    
    if(!isset($_SESSION['section'])){
        $_SESSION['section'] = $section;
    }
    
    $section = $_SESSION['section'];
    
    if(isset($_POST['select'])) {
        if(isset($_POST['select_option'])){
            $_SESSION['section'] = $_POST['select_option'];
        }
        header("refresh: 0");
    }
    
    if(isset($_POST['change']) && isset($_POST['active'])!="") {
        $status = preg_replace('/[0-9]+/', '', $_POST['active']);
        $id = preg_replace('/[^0-9]/', '', $_POST['active']);
        $sql = "UPDATE `$section` SET `active` = '$status' WHERE `id` = '$id'";
        $mysqli -> query($sql);
    }
    
    if(isset($_POST['delete']) && is_array($_POST['delete'])) {
        foreach($_POST['delete'] as $id => $useless){
            $sql = "DELETE FROM `$section` WHERE `$section`.`id` = '$id'";
            $mysqli -> query($sql);
            ?> 
                <script>
                    alert("Вы удалили заявку!");
                    document.location.replace("count.php");
                </script> 
            <?php
        }
    }

    if(isset($_POST['add'])) {
        $name = $_POST['name'];
        $value = $_POST['value'];
        $sql = "INSERT INTO `$section` (`name`, `value`) VALUES ('$name', '$value')";
        $mysqli -> query($sql);
        ?> 
            <script>
                alert("Вы добавили пункт!");
                document.location.replace("count.php");
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
        <title>Калькулятор стоимости</title>
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
                                            <textarea class="input_admin_change"  class="text_admin" placeholder="Название" name="name" type="text"></textarea>
                                            <input class="input_admin_change"  class="text_admin" placeholder="Стоимость" name="value" type="number">
                                        </div>
                                        <div class="modal-footer">
                                            <button name="add" class="button_screen_admin_change" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Добавить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a class="button_screen_admin_out" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Добавить</a>
                    </span>
                    <span class="back_admin">
                        <form class="text_admin" method="POST">
                                <span class="back_admin">
                                    <select name="select_option" class="select_admin">
                                        <option selected disabled hidden value="none">
                                            <?php
                                                switch ($_SESSION['section']) {
                                                    case "area":
                                                        echo "Районы";
                                                        break;
                                                    
                                                    case "equipment":
                                                        echo "Оборудование";
                                                        break;
                                                    
                                                    case "pression":
                                                        echo "Давление в сети";
                                                        break;
                                                    
                                                    case "room":
                                                        echo "Место установки оборудования";
                                                        break;
                                                    
                                                    case "distance":
                                                        echo "Расстояние от границы участка со стороны дороги до дома";
                                                        break;
                                                    
                                                    case "distance2":
                                                        echo "Расстояние от дома до помещения по стене";
                                                        break;
                                                }
                                            ?>
                                        </option>
                                        <option value="area" class="background_color_screen_sixth">Районы</option>
                                        <option value="equipment" class="background_color_screen_sixth">Оборудование</option>
                                        <option value="pression" class="background_color_screen_sixth">Давление в сети</option>
                                        <option value="room" class="background_color_screen_sixth">Место установки оборудования</option>
                                        <option value="distance" class="background_color_screen_sixth">Расстояние от границы участка со стороны дороги до дома</option>
                                        <option value="distance2" class="background_color_screen_sixth">Расстояние от дома до помещения по стене</option>
                                    </select>
                                </span>
                                <span class="back_admin">
                                    <input class="button_screen_admin_out"  class="text_admin" value="Выбрать" name="select" type="submit">
                                </span>
                        </form>
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
                <span class=first_table_calculator><?php echo "Название";?></span>
                <span class=second_table_calculator><?php echo "Стоимость";?></span>
                <span class=third_table_calculator><?php echo "Статус";?></span>
            </p>
            <br>
        </div>
        <?php $result = $mysqli-> query("SELECT * FROM `$section`");
            foreach($result as $rows) {?>
                <form class="form_admin" method="POST">
                <div class="screen_admin">
                    <p class="text_admin left_block">
                        <span class="first_table_calculator"><?php echo $rows['name']?></span> <span class="none1150"><br class="none1150"></span>
                        <span class="second_table_calculator"><?php echo $rows['value']?></span> <span class="none1150"><br class="none1150"></span>
                        <span class="third_table_calculator"><?php
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