<?php
    include_once 'connect.php';

    $errors_message = "";

    if(isset($_POST["send"])) {
        $_SESSION["login"] = $_POST["login"];
        if(!empty($_POST["login"]) && !empty($_POST["pass"])){
            $login = $_POST["login"];
            $sql = "SELECT * FROM `admin` WHERE `login` = '$login'";
            $query = $mysqli -> query($sql);
            if(mysqli_num_rows($query) == 1) {

                $pass = $_POST["pass"];
                $row = mysqli_fetch_assoc($query);
                if($pass == $row["pass"]){
                    $_SESSION['id'] = $row['id'];
                    ?> 
                        <script>
                            document.location.replace("adminpanel.php");
                        </script> 
                    <?php
                } else $errors_message = "Не правильный пароль";
            } else $errors_message = "Пользователь не зарегестрирован";
        } else $errors_message = "Не все поля заполнены";
    }
    $mysqli -> close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход в панель</title>
</head>
    <body>
        <form action="" method="POST" class="enter_admin">
            <p class="text_admin">Форма входа:</p><br>
            <p class="text_admin">Логин</p>
            <input class="input_admin" type="text" name="login" placeholder="login"><br>
            <p class="text_admin">Введите пароль</p>
            <input class="input_admin" type="password" name="pass" placeholder="***"><br>
            <input class="button_screen_admin_enter" type="submit" name="send" value="Войти"><br>

            <span class="text_admin"><?php
                echo $errors_message;
            ?></span>
        </form>
    </body>
</html>