<?php
    include_once 'connect.php';
    
    if(isset($_POST['change']) && isset($_POST['stat'])!="") {
        $status = preg_replace('/[0-9]+/', '', $_POST['stat']);
        $id = preg_replace('/[^0-9]/', '', $_POST['stat']);
        $sql = "UPDATE `zayavki` SET `status` = '$status' WHERE `id` = '$id'";
        $mysqli -> query($sql);
    }
    
    if(isset($_POST['delete']) && is_array($_POST['delete'])) {
        foreach($_POST['delete'] as $id => $useless){
            $sql = "DELETE FROM `zayavki` WHERE `zayavki`.`id` = '$id'";
            $mysqli -> query($sql);
            ?> 
                <script>
                    alert("Вы удалили заявку!");
                    document.location.replace("change_applications.php");
                </script> 
            <?php
        }
    }

    if(isset($_POST['enter'])) {
        header("location: enter.php");
    }
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <link rel="stylesheet" href="./style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Просмотр заявок</title>
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
                <span class=first_table><?php echo "Место выезда";?></span>
                <span class=second_table><?php echo "Номер телефона";?></span>
                <span class=third_table><?php echo "ФИО";?></span>
                <span class=fourth_table><?php echo "Время подачи";?></span>
                <span class=fifth_table><?php echo "Заявка обработана";?></span>
            </p>
            <br>
        </div>
        <?php $result = $mysqli-> query("SELECT * FROM `zayavki`");
            foreach($result as $rows) {?>
                <form class="form_admin" method="POST">
                <div class="screen_admin">
                    <p class="text_admin left_block">
                        <span class="first_table"><?php echo $rows['location']?></span> <span class="none1150"><br class="none1150"></span>
                        <span class="second_table"><?php echo $rows['number']?></span> <span class="none1150"><br class="none1150"></span>
                        <span class="third_table"><?php echo $rows['initials']?></span> <span class="none1150"><br class="none1150"></span>
                        <span class="fourth_table"><?php echo $rows['time']?></span> <span ><br class="none1150"></span>
                        <span class="fifth_table"><?php
                            if($rows['status'] == "Создано") {
                                ?><select name="stat" class="select_admin">
                                    <option selected disabled hidden value="none">Создано</option>
                                    <option value="Создано<?php echo $rows['id']?>" class="background_color_screen_sixth">Создано</option>
                                    <option value="Перезвонить<?php echo $rows['id']?>" class="background_color_screen_sixth">Перезвонить</option>
                                    <option value="Ожидает выезда<?php echo $rows['id']?>" class="background_color_screen_sixth">Ожидает выезда</option>
                                    <option value="Контракт заключен<?php echo $rows['id']?>" class="background_color_screen_sixth">Контракт заключен</option>
                                    <option value="Отменен<?php echo $rows['id']?>" class="background_color_screen_sixth">Отменен</option>
                                </select><?php
                            } elseif($rows['status'] == "Перезвонить") {
                                ?><select name="stat" class="select_admin">
                                    <option selected disabled hidden value="none">Перезвонить</option>
                                    <option value="Создано<?php echo $rows['id']?>" class="background_color_screen_sixth">Создано</option>
                                    <option value="Перезвонить<?php echo $rows['id']?>" class="background_color_screen_sixth">Перезвонить</option>
                                    <option value="Ожидает выезда<?php echo $rows['id']?>" class="background_color_screen_sixth">Ожидает выезда</option>
                                    <option value="Контракт заключен<?php echo $rows['id']?>" class="background_color_screen_sixth">Контракт заключен</option>
                                    <option value="Отменен<?php echo $rows['id']?>" class="background_color_screen_sixth">Отменен</option>
                                </select><?php
                            } elseif($rows['status'] == "Ожидает выезда") {
                                ?><select name="stat" class="select_admin">
                                    <option selected disabled hidden value="none">Ожидает выезда</option>
                                    <option value="Создано<?php echo $rows['id']?>" class="background_color_screen_sixth">Создано</option>
                                    <option value="Перезвонить<?php echo $rows['id']?>" class="background_color_screen_sixth">Перезвонить</option>
                                    <option value="Ожидает выезда<?php echo $rows['id']?>" class="background_color_screen_sixth">Ожидает выезда</option>
                                    <option value="Контракт заключен<?php echo $rows['id']?>" class="background_color_screen_sixth">Контракт заключен</option>
                                    <option value="Отменен<?php echo $rows['id']?>" class="background_color_screen_sixth">Отменен</option>
                                </select><?php
                            } elseif($rows['status'] == "Контракт заключен") {
                                ?><select name="stat" class="select_admin">
                                    <option selected disabled hidden value="none">Контракт заключен</option>
                                    <option value="Создано<?php echo $rows['id']?>" class="background_color_screen_sixth">Создано</option>
                                    <option value="Перезвонить<?php echo $rows['id']?>" class="background_color_screen_sixth">Перезвонить</option>
                                    <option value="Ожидает выезда<?php echo $rows['id']?>" class="background_color_screen_sixth">Ожидает выезда</option>
                                    <option value="Контракт заключен<?php echo $rows['id']?>" class="background_color_screen_sixth">Контракт заключен</option>
                                    <option value="Отменен<?php echo $rows['id']?>" class="background_color_screen_sixth">Отменен</option>
                                </select><?php
                            } else {
                                ?><select name="stat" class="select_admin">
                                    <option selected disabled hidden value="none">Отменен</option>
                                    <option value="Создано<?php echo $rows['id']?>" class="background_color_screen_sixth">Создано</option>
                                    <option value="Перезвонить<?php echo $rows['id']?>" class="background_color_screen_sixth">Перезвонить</option>
                                    <option value="Ожидает выезда<?php echo $rows['id']?>" class="background_color_screen_sixth">Ожидает выезда</option>
                                    <option value="Контракт заключен<?php echo $rows['id']?>" class="background_color_screen_sixth">Контракт заключен</option>
                                    <option value="Отменен<?php echo $rows['id']?>" class="background_color_screen_sixth">Отменен</option>
                                </select><?php
                            }?></span>
                        <input class="button_screen_admin"  class="text_admin" value="Изменить" name="change" type="submit">
                        <input class="button_screen_admin"  class="text_admin" value="Удалить" name="delete[<?php echo $rows['id'];?>]" type="submit">
                    </p>
                    <br>
                </div>
                </form>
            <?php
            }

            ?>
    </body>
</html>
<?php
    }
    
    $mysqli -> close();
?>