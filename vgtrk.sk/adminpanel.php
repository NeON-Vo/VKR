<?php
    include_once 'connect.php';
    
    if(isset($_POST['enter'])) {
        header("location: enter.php");
    }

    if(isset($_POST['change_applications'])) {
        header("location: change_applications.php");
    }

    if(isset($_POST['swiper_first_screen'])) {
        header("location: swiper_first_screen.php");
    }

    if(isset($_POST['swiper_about_us'])) {
        header("location: swiper_about_us.php");
    }

    if(isset($_POST['images_portfolio'])) {
        header("location: images_portfolio.php");
    }

    if(isset($_POST['swiper_feedback'])) {
        header("location: swiper_feedback.php");
    }

    if(isset($_POST['count'])) {
        header("location: count.php");
    }
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <link rel="stylesheet" href="./style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Админ панель</title>
    </head>

    <body class="center_admin">
        <?php
            if(!empty($_SESSION['id'])) {
                ?>
                    <span class="out_admin">
                        <form action="" method="POST">
                            <input class="button_screen_admin_out text_admin" value="Выйти" name="out" type="submit">
                        </form>
                    </span>
                    <div class="buttons_change">
                        <span class="change_admin">
                            <form action="" method="POST">
                                <input class="button_screen_admin_change text_admin" value="Заявки" name="change_applications" type="submit">
                            </form>
                        </span>
                        <span class="change_admin">
                            <form action="" method="POST">
                                <input class="button_screen_admin_change text_admin" value="Слайдер главного экрана" name="swiper_first_screen" type="submit">
                            </form>
                        </span>
                        <span class="change_admin">
                            <form action="" method="POST">
                                <input class="button_screen_admin_change text_admin" value="Слайдер ''О нас''" name="swiper_about_us" type="submit">
                            </form>
                        </span>
                        <span class="change_admin">
                            <form action="" method="POST">
                                <input class="button_screen_admin_change text_admin" value="Изображения в портфолио" name="images_portfolio" type="submit">
                            </form>
                        </span>
                        <span class="change_admin">
                            <form action="" method="POST">
                                <input class="button_screen_admin_change text_admin" value="Слайдер ''Отзывы''" name="swiper_feedback" type="submit">
                            </form>
                        </span>
                        <span class="change_admin">
                            <form action="" method="POST">
                                <input class="button_screen_admin_change text_admin" value="Калькулятор стоимости" name="count" type="submit">
                            </form>
                        </span>
                    </div>
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
    </body>
</html>
<?php
    }
    
    $mysqli -> close();
?>