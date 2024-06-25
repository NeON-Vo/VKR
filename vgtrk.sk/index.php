<!DOCTYPE html>
<html lang="ru">

<?php
    include_once 'connect.php';

    $errors_message = "";
    
    if(isset($_POST["send"])) {
        if(!empty($_POST["location"])) {
            if(!empty($_POST["number"])) {
                if(!empty($_POST["initials"])) {
                    $location = $_POST["location"];
                    $number = $_POST["number"];
                    $initials = $_POST["initials"];
                    $sql = "INSERT INTO `zayavki` (`location`, `number`, `initials`) VALUES ('$location', '$number', '$initials')";
                    $mysqli -> query($sql);
                    ?> 
                        <script>
                            alert("Вы создали заявку!");
                            document.location.replace("index.php");
                        </script> 
                    <?php
                } else $errors_message = "Вы не заполнили ФИО";
            } else $errors_message = "Вы не заполнили номер телефона";
        } else $errors_message = "Вы не заполнили адрес";
    } else $errors_message = "";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Газификация от ООО "ВГТРК СК"</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="./swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="./swiper/swiper-bundle.min.css"/>
</head>

    <body>
        <header>
            <div class="fixed none1">
                <a href="#"><img src="./img/fixed/fig_header_one.svg" class="img_header_one no_select" alt="Блок"><p class="p_header_one p_logo">ВГТРК<br>СК</p></a>
                <a href="#about_us"><img src="./img/fixed/fig_header_two.svg" class="img_header_two no_select" alt="Блок"><p class="p_header_two">О нас</p></a>
                <a href="#about_gas"><img src="./img/fixed/fig_header_two.svg" class="img_header_two no_select" alt="Блок"><p class="p_header_two">О газификации</p></a>
                <a href="#portfolio"><img src="./img/fixed/fig_header_two.svg" class="img_header_two no_select" alt="Блок"><p class="p_header_two">Портфолио</p></a>
                <a href="#feedback"><img src="./img/fixed/fig_header_two.svg" class="img_header_two no_select" alt="Блок"><p class="p_header_two">Отзывы</p></a>
                <a href="#calculator_of_count"><img src="./img/fixed/fig_header_two.svg" class="img_header_two_second no_select" alt="Блок"><p class="p_header_two_second">Калькулятор<br>стоимости</p></a>
                <a href="#submit_an_application"><img src="./img/fixed/fig_header_three.svg" class="img_header_three no_select" alt="Блок"><p class="p_header_three">Подать заявку</p></a>
            </div>

            <nav class="navbar fixed-top none1150 none650">
                <div class="container-fluid">
                    <a href="#"><img src="./img/fixed/fig_header_one.svg" class="img_header_one no_select" alt="Блок"><p class="p_header_one p_logo">ВГТРК<br>СК</p></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                      <span class="navbar-toggler-icon burger_icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a href="#"><img src="./img/fixed/fig_header_one.svg" class="img_header_one no_select" alt="Блок"><p class="p_header_one p_logo">ВГТРК<br>СК</p></a>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                                <button class="button_none" data-bs-dismiss="offcanvas"><a href="#about_us"><img src="./img/fixed/fig_header_two.svg" class="img_header_two no_select" alt="Блок"><p class="p_header_two">О нас</p></a></button>
                                <button class="button_none" data-bs-dismiss="offcanvas"><a href="#about_gas"><img src="./img/fixed/fig_header_two.svg" data-bs-dismiss="offcanvas" class="img_header_two_second no_select" alt="Блок"><p class="p_header_two">О газификации</p></a></button>
                                <button class="button_none" data-bs-dismiss="offcanvas"><a href="#portfolio"><img src="./img/fixed/fig_header_two.svg" class="img_header_two_second no_select" alt="Блок"><p class="p_header_two">Портфолио</p></a></button>
                                <button class="button_none" data-bs-dismiss="offcanvas"><a href="#feedback"><img src="./img/fixed/fig_header_two.svg" class="img_header_two_second no_select" alt="Блок"><p class="p_header_two">Отзывы</p></a></button>
                                <button class="button_none" data-bs-dismiss="offcanvas"><a href="#calculator_of_count"><img src="./img/fixed/fig_header_two.svg" class="img_header_two_third no_select" alt="Блок"><p class="p_header_two_second">Калькулятор<br>стоимости</p></a></button>
                                <button class="button_none" data-bs-dismiss="offcanvas"><a href="#submit_an_application"><img src="./img/fixed/fig_header_two.svg" class="img_header_two_fourth no_select" alt="Блок"><p class="p_header_two">Подать заявку</p></a></button>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <a href="#" class="a_up fixed_up none1"><img src="./img/fixed/up.svg" class="up" alt="Наверх"></a>

        <content>
            <swiper_first>
                <div class="swiper mySwiper_first swiper_first">
                    <div class="swiper-wrapper">
                        <?php
                        $sql = "SELECT * FROM `swiper_first_screen` WHERE `active`='активно'";
                            $first_slider = $mysqli -> query($sql);
                            foreach($first_slider as $rows){
                                ?>
                                    <div class="swiper-slide"><img src="./img/swiper_first/<?php echo $rows['way']?>" alt="<?php echo $rows['name/alt']?>" class="swiper_first_img"></div>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="swiper_first_next_button"><img src="./img/swiper_first/button_right.svg" class="swiper_button" alt="Вправо"></div>
                    <div class="swiper_first_prev_button"><img src="./img/swiper_first/button_left.svg" class="swiper_button" alt="Влево"></div>
                </div>
                <div class="swiper_first_block">
                    <img src="./img/swiper_first/swiper_one_text.svg" class="swiper_first_block_img none1" alt="Блок">
                    <div class="swiper_first_text">
                        <p class="swiper_first_name_text">
                            ООО “ВГТРК СК”
                        </p>
                        <p class="swiper_first_ordinary_text">
                            Мы предоставляем услуги по газификации физическим и <br class="none1">
                            юридическим лицам на территориях Вологодской области
                        </p>
                    </div>
                </div>
            </swiper_first>

            <screen_second class="screen_size_and_top" id="about_us">
                <div class="title">
                    <p>О нас</p>
                </div>
                <div class="content_screen_second">
                    <div class="text_content top_text">
                        <p>
                            ООО “<span class="medium_text">ВГТРК СК</span>” - <br class="none1">
                            высокомеханизированная<br>
                            <span class="medium_text">строительно-монтажная<br class="none1">
                            организация</span>, имеющая<br>
                            большой опыт в сфере работы <span class="medium_text">по<br class="none1">
                            созданию коммуникаций</span><br>
                            <br class="none1">
                            Мы предоставляем <span class="medium_text">услуги по<br class="none1">
                            газификации</span> на территории<br class="none1">
                            <span class="medium_text">Вологодской области</span><br>
                        </p>
                    </div>
                    <swiper_second>
                        <div class="swiper mySwiper_second swiper_second">
                            <div class="swiper-wrapper">
                            <?php
                                $sql = "SELECT * FROM `swiper_about_us` WHERE `active`='активно'";
                                $first_slider = $mysqli -> query($sql);
                                foreach($first_slider as $rows){
                                    ?>
                                        <div class="swiper-slide swiper_second_slide"><img src="./img/swiper_second/<?php echo $rows['way']?>" alt="<?php echo $rows['name/alt']?>" class="swiper_second_slide_img"></div>
                                    <?php
                                }
                            ?>
                            </div>
                            <div class="swiper_second_next_button"><img src="./img/swiper_second/button_right.svg" class="swiper_button" alt="Вправо"></div>
                            <div class="swiper_second_prev_button"><img src="./img/swiper_second/button_left.svg" class="swiper_button" alt="Влево"></div>
                            <div class="swiper_pagination"></div>
                        </div>
                    </swiper_second>
                </div>
            </screen_second>

            <third_screen class="screen_size_and_top" id="about_gas">
                <div class="title">
                    <p>О газификации</p>
                </div>
                <div class="content_screen_thrid">
                    <img src="./img/content/img_screen_thrid.png" class="img_screen_thrid none1" alt="Инженер идет на объект">
                    <div class="text_content top_text">
                        <p>
                            <span class="medium_text">Газификация</span> - это прокладка газовой трубы на ваш участок и подключение <span class="medium_text">газового <br class="none1">
                            оборудования</span> к газораспределительным сетям.<span class="none1"><br>
                            <br>
                            Подав нам заявку мы<span class="medium_text"> в ближайшее время перезвоним</span> вам, после чего<span class="medium_text"> отправим к вам <br>
                            специалиста</span>, чтобы <span class="medium_text">проверить</span> соответствует ли <span class="medium_text">ваш дом</span> требованиям, <span class="medium_text">наметить план</span> <br>
                            предстоящих работ и <span class="medium_text">заключить</span> с вами <span class="medium_text">договор</span>.<br></span>
                            <br>
                            Ниже <span class="medium_text">вы можете скачать памятку <span class="none1">абонента</span></span>, где описываются требования <span class="medium_text">от</span> <span class="none1">сотрудников</span> <br class="none1">
                            “<span class="medium_text">Газпром газораспределение Вологда</span>”.<br>
                        </p>
                        <div class="center_block">
                            <button onclick="location.href='./files/dlya_abonenta.pdf'" class="button_screen">
                                <p class="text_content">Посмотреть “Памятку абонента”</p>
                                <img src="./img/content/btn_icon_screen_three.svg" class="img_button_screen" alt="Иконка файла">
                            </button>
                        </div>
                    </div>
                </div>
            </third_screen>

            <fourth_screen class="screen_size_and_top" id="portfolio">
                <div class="title">
                    <p>Портфолио</p>
                </div>
                <div class="content_screen_fourth">
                    <div>
                        <div class="gap_block_screen_fourth">
                            <?php
                                $sql = "SELECT * FROM `images_portfolio` WHERE `active`='активно'";
                                $first_slider = $mysqli -> query($sql);
                                foreach($first_slider as $rows){
                                    ?>
                                        <img src="./img/content/screen_fourth/<?php echo $rows['way']?>" class="img_screen_fourth" alt="<?php echo $rows['name/alt']?>">
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="text_block_fourth">
                            <img src="./img/content/screen_fourth/img_screen_fourth.svg" class="block_img_screen_fourth none1" alt="Блок">
                            <img src="./img/content/screen_fourth/img_screen_fourth_phone.svg" class="block_img_screen_fourth none650 none1150" alt="Блок">
                            <p class="text_content text_content_fourth">
                                <span class="medium_text">На нашем счету</span> более чем <span class="medium_text">1200 проектов</span> по всей <br>
                                Вологодской области <span class="medium_text">за три года</span> работы <br>
                                в сфере <span class="medium_text">газификации</span><br>
                            </p>
                        </div>
                    </div>
                </div>
                
            </fourth_screen>

            <fifth_screen class="screen_size_and_top" id="feedback">
                <div class="title top_screen_fifth">
                    <p>Отзывы</p>
                </div>
                <div class="content_screen_fifth">
                    <div class="block_screen_fifth">
                        <p class="text_content">
                            На нашем<br class="none1">
                            счету более <span class="medium_text">1200<br class="none1">
                            довольных клиентов</span>
                        </p>
                    </div>
                    <third_slider>
                        <div class="swiper mySwiper_third swiper_third none1">
                            <div class="swiper-wrapper">
                                <?php
                                    $sql = "SELECT * FROM `swiper_feedback` WHERE `active`='активно'";
                                    $first_slider = $mysqli -> query($sql);
                                    foreach($first_slider as $rows){
                                        ?>
                                            <div class="swiper-slide swiper_third_slide"><img src="./img/swiper_third/<?php echo $rows['way']?>" class="swiper_third_slide_img" alt="<?php echo $rows['name/alt']?>"></div>
                                        <?php
                                    }
                                ?>
                            </div>
                            <div class="swiper_third_next_button"><img src="./img/swiper_second/button_right.svg" class="swiper_button" alt="Вправо"></div>
                            <div class="swiper_third_prev_button"><img src="./img/swiper_second/button_left.svg" class="swiper_button" alt="Влево"></div>
                            <div class="swiper_pagination"></div>
                          </div>
                    </third_slider>
                    <third_slider>
                        <div class="swiper mySwiper_third_phone swiper_third none650 none1150">
                            <div class="swiper-wrapper">
                                <?php
                                    $sql = "SELECT * FROM `swiper_feedback` WHERE `active`='активно'";
                                    $first_slider = $mysqli -> query($sql);
                                    foreach($first_slider as $rows){
                                        ?>
                                            <div class="swiper-slide swiper_third_slide"><img src="./img/swiper_third/<?php echo $rows['way']?>" class="swiper_third_slide_img" alt="<?php echo $rows['name/alt']?>"></div>
                                        <?php
                                    }
                                ?>
                            </div>
                            <div class="swiper_third_next_button_phone"><img src="./img/swiper_second/button_right.svg" class="swiper_button" alt="Вправо"></div>
                            <div class="swiper_third_prev_button_phone"><img src="./img/swiper_second/button_left.svg" class="swiper_button" alt="Влево"></div>
                            <div class="swiper_pagination"></div>
                          </div>
                    </third_slider>
                </div>
            </fifth_screen>


            <sixth_screen class="screen_size_and_top" id="calculator_of_count">
                <div class="title">
                    <p>Калькулятор стоимости</p>
                </div>
                <form class="content_screen_sixth" method="post">
                    <div class="block_screen_sixth">
                        <p class="text_content width_phone_label">Ваш район:</p>
                        <select name="area" id="area" class="input" >
                            <option selected disabled hidden value="none">Выберите</option>
                            <?php
                                $sql = "SELECT * FROM `area` WHERE `active`='активно'";
                                $area = $mysqli -> query($sql);
                                foreach($area as $rows) {
                                    ?>
                                        <option value="<?php echo $rows['value'] ?>" class="background_color_screen_sixth"><?php echo $rows['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="block_screen_sixth">
                        <p class="text_content width_phone_label">
                            Населённый пункт:
                        </p>
                        <input type="text" placeholder="Поле ввода" class="input_two top_input_content_screen_sixth_two">
                    </div>
                    <div class="block_screen_sixth">
                        <p class="text_content width_phone_label">
                            Оборудование:
                        </p>
                        <select name="equipment" id="equipment" class="input">
                            <option selected disabled hidden value="none">Выберите</option>
                            <?php
                                $sql = "SELECT * FROM `equipment` WHERE `active`='активно'";
                                $equipment = $mysqli -> query($sql);
                                foreach($equipment as $rows) {
                                    ?>
                                        <option value="<?php echo $rows['value'] ?>" class="background_color_screen_sixth"><?php echo $rows['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="block_screen_sixth">
                        <p class="text_content width_phone_label">
                            Давление в сети:
                        </p>
                        <select name="pression" id="pression" class="input">
                            <option selected disabled hidden value="none">Выберите</option>
                            <?php
                                $sql = "SELECT * FROM `pression` WHERE `active`='активно'";
                                $pression = $mysqli -> query($sql);
                                foreach($pression as $rows) {
                                    ?>
                                        <option value="<?php echo $rows['value'] ?>" class="background_color_screen_sixth"><?php echo $rows['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="block_screen_sixth">
                        <p class="text_content width_phone_label">
                            Место установки оборудования:
                        </p>
                        <select name="room" id="room" class="input">
                            <option selected disabled hidden value="none">Выберите</option>
                            <?php
                                $sql = "SELECT * FROM `room` WHERE `active`='активно'";
                                $room = $mysqli -> query($sql);
                                foreach($room as $rows) {
                                    ?>
                                        <option value="<?php echo $rows['value'] ?>" class="background_color_screen_sixth"><?php echo $rows['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="block_screen_sixth_second">
                        <p class="text_content width_phone_label">
                            Расстояние от границы участка<br class>
                            со стороны дороги до дома (метров):
                        </p>
                        <select name="distance" id="distance" class="input">
                            <option selected disabled hidden value="none">Выберите</option>
                            <?php
                                $sql = "SELECT * FROM `distance` WHERE `active`='активно'";
                                $distance = $mysqli -> query($sql);
                                foreach($distance as $rows) {
                                    ?>
                                        <option value="<?php echo $rows['value'] ?>" class="background_color_screen_sixth"><?php echo $rows['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="block_screen_sixth_second">
                        <p class="text_content width_phone_label">
                            Расстояние от дома <br>
                            до помещения по стене (метров):
                        </p>
                        <select name="distance2" id="distance2" class="input">
                            <option selected disabled hidden value="none">Выберите</option>
                            <?php
                                $sql = "SELECT * FROM `distance2` WHERE `active`='активно'";
                                $distance2 = $mysqli -> query($sql);
                                foreach($distance2 as $rows) {
                                    ?>
                                        <option value="<?php echo $rows['value'] ?>" class="background_color_screen_sixth"><?php echo $rows['name'] ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <button class="button_screen_only_text" type="submit">
                        <p class="text_content">Рассчитать стоимость</p>    
                    </button>
                    <span class="text_content_amount amount"></span>
                    <p class="text_content text_under_button_screen_sixth">
                        <span class="red_colour">*</span> Итоговая стоимость может отличаться от примерного расчета
                    </p>
                </form>
            </sixth_screen>

            <seventh_screen class="screen_size_and_top" id="submit_an_application">
                <div class="title">
                    <p>Подать заявку</p>
                </div>
                <form method="POST" class="content_screen_seventh">
                    <div class="block_screen_seventh">
                        <p class="text_content">
                            Введите ваш адрес:
                        </p>
                        <input type="text" placeholder="Поле ввода" class="input_two top_input_content_screen_sixth_two" name="location">
                    </div>
                    <div class="block_screen_seventh">
                        <p class="text_content">
                            Введите номер <br class="none650 none1150">
                            телефона:
                        </p>
                        <input type="text" placeholder="Поле ввода" class="input_two top_input_content_screen_sixth_two" name="number">
                    </div>
                    <div class="block_screen_seventh">
                        <p class="text_content">
                            Введите ваше ФИО:
                        </p>
                        <input type="text" placeholder="Поле ввода" class="input_two top_input_content_screen_sixth_two" name="initials">
                    </div>
                    <button class="button_screen" name="send" type="submit">
                        <p class="text_content">Создать заявку</p>
                        <img src="./img/content/btn_icon_screen_sixth.svg" class="img_button_screen" alt="Иконка файла">
                    </button>
                    <?php if(!empty($errors_message)){ ?> 
                        <span class="text_content_amount amount"> 
                            <?php echo $errors_message;} ?> 
                        </span>
                    <p class="text_content text_under_button_screen_sixth">
                        <span class="red_colour">*</span> После подачи заявки внимательно следите за звонками на ваш телефон!
                    </p>
                </form>
            </seventh_screen>
        </content>

        <footer>
            <a href="#"><p class="p_logo">ВГТРК<br>СК</p></a>
            <div>
                <p class="margin_top_footer">Наш телефон: +7 (931) 510 09 04</p>
                <p class="margin_top_footer">Наша почта: zayavki.vgtrk.sk@gmail.com</p>
                <p class="margin_top_footer">Наш адрес: Вологда, Советский проспект, дом 125</p>
            </div>
            <div>
                <p class="p_footer">Мы в соцсетях:</p>
                <div class="margin_top_and_center_footer">
                    <a href="viber://chat?number=+79315100904" class="hover_img"><img src="./img/footer/viber.svg" alt="Viber" class="img_footer"></a>
                    <a href="https://api.whatsapp.com/send?phone=79315100904" class="hover_img"><img src="./img/footer/whatsapp.svg" alt="Whatsapp" class="img_footer"></a>
                    <a href="https://vk.com/MishaVasilev" class="hover_img"><img src="./img/footer/vk.svg" alt="VK" class="img_footer"></a>
                    <a href="https://t.me/MishaVasilev" class="hover_img"><img src="./img/footer/tg.svg" alt="Telegramm" class="img_footer"> </a>
                </div>
            </div>
        </footer>

        <script src="./bootstrap/bootstrap.bundle.min.js"></script>
        <script src="./script.js"></script>
        
        <?php
            $mysqli -> close();
        ?>
    </body>
</html>