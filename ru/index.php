<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Создайте Профессиональное Резюме | Быстро, Удобно и Бесплатно</title>
    <meta name="description" content="Создайте профессиональное резюме за пару минут. Создайте свое резюме на разных языках и скачайте бесплатно! Выберите один из современных шаблонов резюме">
    <meta name="keywords" content="Резюме, создать резюме, скачать резюме, резюме бесплатно, современное резюме, резюме на английском, резюме на русском, резюме на узбекском">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../images/fav.png">


    <!-- Styles -->
    <link rel="stylesheet" href="../styles/index.css" />
    <link rel="stylesheet" href="../styles/sample.css">
    <link rel="stylesheet" href="../styles/tips.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/d0799216f8.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet" />
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- jQuery Validator -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
    <script src="js/validation.js"></script>

    <!-- JQuery Filestyle -->
    <link rel="stylesheet" href="js/fileupload/jquery-filestyle.min.css">

    <!-- jQuery Datepicker -->
    <script type="text/javascript" src="js/jdate/jquery-ui.js"></script>
    <link rel="stylesheet" href="js/jdate/jquery-ui.css">
    <link rel="stylesheet" href="js/jdate/jquery-ui.structure.css">
    <link rel="stylesheet" href="js/jdate/jquery-ui.theme.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5ZMCQ5LZJV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5ZMCQ5LZJV');
    </script>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <div class="header-row">
            <div class="logo">
                <a href="index.php"><img src="../images/logo.png" alt="Logo"></a>
            </div>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-globe"></i>&nbsp Русский</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="../uz/index.php">O'zbek</a>
                    <a href="../index.php">English</a>
                    <a href="../kz/index.php">Қазақ</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Title -->

    <h1>
        <span>- Создайте Свое -</span><br />
        Профессиональное Резюме
    </h1>

    <!-- Form container -->
    <form action="insert.php" enctype="multipart/form-data" method="post" target="_blank">
        <!-- Personal Information Fields -->
        <section>
            <h2>Личные Данные</h2>
            <div class="container">
                <div class="row">
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="fname" placeholder="Имя" />
                        </div>
                        <label for="fname"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="lname" placeholder="Фамилия" />
                        </div>
                        <label for="lname"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" placeholder="E-mail" />
                        </div>
                        <label for="email"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-square-phone"></i>
                            <input type="tel" name="phone" placeholder="Номер телефона" />
                        </div>
                        <label for="phone"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="country" placeholder="Страна" />
                        </div>
                        <label for="country"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="city" placeholder="Город" />
                        </div>
                        <label for="city"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-calendar"></i>
                            <select name="age">
                                <?php
                                echo "<option value='0'>Ваш возраст</option>";
                                for ($i = 17; $i <= 70; $i++) {
                                ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <label for="age"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-mars-and-venus"></i>
                            <select name="gender">
                                <option value="" hidden>Пол</option>
                                <option value="Female">Женщина</option>
                                <option value="Male">Мужчина</option>
                                <option value="Other">Другой</option>
                            </select>
                        </div>
                        <label for="gender"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-camera"></i>
                            <input type="file" name="userfile" class="jfilestyle" data-text="Фото" data-buttonBefore="true" data-placeholder="для резюме" />
                        </div>
                        <label for="userfile"></label>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Experience Fields-->
        <section>
            <h2>Опыт Работы</h2>
            <div class="container" id="employer">
                <div class="row">
                    <div class="column">
                        <i class="fa-solid fa-building"></i>
                        <input type="text" name="employer[]" placeholder="Работодатель" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-briefcase"></i>
                        <input type="text" name="position[]" placeholder="Должность" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="employer_country[]" placeholder="Страна" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="employer_city[]" placeholder="Город" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="date-border datepicker" name="employment_from[]" placeholder="От" />
                        <input type="text" class="datepicker" name="employment_to[]" id="employerTo" placeholder="До" />
                    </div>
                    <div class="column ongoing">
                        <input type="checkbox" id="checked" name="employment_ongoing[]" value="Ongoing" />До сих пор
                    </div>
                </div>
            </div>
            <a href="#" id="addEmployer" class="add-btn">Ещё</a>
        </section>

        <!-- Education Fields-->
        <section>
            <h2>Education</h2>
            <div class="container" id="school">
                <div class="row">
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-building-columns"></i>
                            <input type="text" name="school[]" placeholder="Учебное заведение" />
                        </div>
                        <label for="school[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-scroll"></i>
                            <select name="degree[]" id="">
                                <option value="" hidden>Степень</option>
                                <option value="Secondary School">
                                    Среднее образование
                                </option>
                                <option value="High School">
                                    Среднее специальное
                                </option>
                                <option value="Bachelor Degree">Бакалавр</option>
                                <option value="Master Degree">Магистр</option>
                                <option value="PhD">PhD</option>
                                <option value="Diploma">Диплом</option>
                                <option value="Certificate">Сертификат</option>
                            </select>
                        </div>
                        <label for="degree[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <input type="text" name="specialization[]" placeholder="Направление" />
                        </div>
                        <label for="specialization[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="school_country[]" placeholder="Страна" />
                        </div>
                        <label for="school_country[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="school_city[]" placeholder="Город" />
                        </div>
                        <label for="school_city[]"></label>
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="date-border datepicker" name="school_from[]" placeholder="От" />
                        <input type="text" class="datepicker" id="schoolTo" name="school_to[]" placeholder="До" />
                    </div>
                    <div class="column ongoing">
                        <input type="checkbox" id="checkedschool" name="school_ongoing[]" value="Ongoing" />До сих пор
                    </div>
                </div>
            </div>
            <a href="#" id="addSchool" class="add-btn">Ещё</a>
        </section>

        <!-- Lanuage Skills Fields -->
        <section>
            <h2>Знание Языков</h2>
            <div class="container">
                <div class="row language-flex" id="language">
                    <div class="column language">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" name="language[]" placeholder="Язык" />
                        <select name="lang_level[]">
                            <option value="" hidden>Уровень</option>
                            <option value="Basic">Базовый</option>
                            <option value="Good">Средний</option>
                            <option value="Expert">Эксперт</option>
                        </select>
                        <a href="" style="pointer-events: none;"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" id="addLanguage" class="add-btn">Ещё</a>
        </section>

        <!-- Digital Skills Fields-->
        <section>
            <h2>Цифровые Навыки</h2>
            <div class="container">
                <div class="row language-flex" id="digital">
                    <div class="column language">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" name="digital[]" placeholder="напр.Excel" />
                        <select name="dig_level[]">
                            <option value="" hidden>Уровень</option>
                            <option value="Basic">Базовый</option>
                            <option value="Good">Средний</option>
                            <option value="Expert">Эксперт</option>
                        </select>
                        <a href="" style="pointer-events: none;"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" id="addDigital" class="add-btn">Ещё</a>
        </section>
        <input type="submit" name="submit" value="Скачать" />
    </form>
    <footer>
        <p>
        <ul>
            <li><a id="sample-btn">Образец</a></li>
            <li><a id="tips-btn">Советы</a></li>
            <li><a href="terms.php">Условия & Политика Конфиденциальности</a></li>
            <li><a href="contact.php">Контакт</a></li>
        </ul>
        </p>
    </footer>
    <!-- Sample -->
    <div class="sample">
        <div class="sample-content">
            <img src="../images/resumeru.jpg" alt="">
        </div>
    </div>

    <!-- Tips -->
    <div class="tips">
        <div class="tips-content">
            <h2>Как улучшить резюме?</h2>
            <ol>
                <li>Всегда создавайте резюме на основе предложения о работе, на которое вы подаете заявку</li>
                <li>Не включайте информацию, которая не имеет отношения к этой работе</li>
            </ol>
            <h2>Советы</h2>
            <ol>
                <li>Большинство рекрутеров тратят на резюме менее 10 секунд. Поэтому резюме с большим количеством страниц и слишком много информации может снизить ваши шансы</li>
                <li>Нет необходимости указывать информацию о <i>средней школе</i>, если у вас есть диплом колледжа или университета.</li>
            </ol>
        </div>
    </div>

    <!-- jQuery events -->
    <script src="js/employer.js"></script>
    <script src="js/school.js"></script>
    <script src="js/language.js"></script>
    <script src="js/digital.js"></script>
    <!--Drop-down JS-->
    <script type="text/javascript" src="js/drop-down.js"></script>
    <!-- jQuery File Styel -->
    <script src="js/fileupload/jquery-filestyle.min.js"></script>
    <!-- Datepicker -->
    <script type="text/javascript" src="js/datepicker.js"></script>
    <!-- Popup content -->
    <script type="text/javascript" src="js/sample.js"></script>
    <script type="text/javascript" src="js/tips.js"></script>
</body>

</html>