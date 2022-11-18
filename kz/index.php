<!DOCTYPE html>
<html lang="kz">

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
                <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-globe"></i>&nbsp Қазақ</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="../uz/index.php">O'zbek</a>
                    <a href="../index.php">English</a>
                    <a href="../ru/index.php">Русский</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Title -->

    <h1>Кәсіби Түйіндеме<br><span>- әп-сәтте дайындаңыз -</span></h1>

    <!-- Form container -->
    <form action="insert.php" enctype="multipart/form-data" method="post" target="_blank">
        <!-- Personal Information Fields -->
        <section>
            <h2>Жеке Ақпарат</h2>
            <div class="container">
                <div class="row">
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="fname" placeholder="Аты" />
                        </div>
                        <label for="fname"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="lname" placeholder="Тегі" />
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
                            <input type="tel" name="phone" placeholder="Телефон нөмірі" />
                        </div>
                        <label for="phone"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="country" placeholder="Мемлекет" />
                        </div>
                        <label for="country"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="city" placeholder="Қала" />
                        </div>
                        <label for="city"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-calendar"></i>
                            <select name="age">
                                <?php
                                echo "<option value='0'>Жасыңыз</option>";
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
                                <option value="" hidden>Жыныс</option>
                                <option value="Female">Әйел</option>
                                <option value="Male">Еркек</option>
                                <option value="Other">Басқа</option>
                            </select>
                        </div>
                        <label for="gender"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-camera"></i>
                            <input type="file" name="userfile" class="jfilestyle" data-text="Фото" data-buttonBefore="true" data-placeholder="түйіндеме үшін" />
                        </div>
                        <label for="userfile"></label>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Experience Fields-->
        <section>
            <h2>Жұмыс Тәжірибесі</h2>
            <div class="container" id="employer">
                <div class="row">
                    <div class="column">
                        <i class="fa-solid fa-building"></i>
                        <input type="text" name="employer[]" placeholder="Жұмыс беруші" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-briefcase"></i>
                        <input type="text" name="position[]" placeholder="Лауазым" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="employer_country[]" placeholder="Мемлекет" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="employer_city[]" placeholder="Қала" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="date-border datepicker" name="employment_from[]" placeholder="Дан" />
                        <input type="text" class="datepicker" name="employment_to[]" id="employerTo" placeholder="Дейін" />
                    </div>
                    <div class="column ongoing">
                        <input type="checkbox" id="checked" name="employment_ongoing[]" value="Ongoing" />Қазірге дейін
                    </div>
                </div>
            </div>
            <a href="#" id="addEmployer" class="add-btn">Тағы</a>
        </section>

        <!-- Education Fields-->
        <section>
            <h2>Білім</h2>
            <div class="container" id="school">
                <div class="row">
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-building-columns"></i>
                            <input type="text" name="school[]" placeholder="Білім ордасы" />
                        </div>
                        <label for="school[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-scroll"></i>
                            <select name="degree[]" id="">
                                <option value="" hidden>Дәреже</option>
                                <option value="Secondary School">Орта білім</option>
                                <option value="High School">Орта-арнайы</option>
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
                            <input type="text" name="specialization[]" placeholder="Білім бағити" />
                        </div>
                        <label for="specialization[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="school_country[]" placeholder="Мемлекет" />
                        </div>
                        <label for="school_country[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="school_city[]" placeholder="Қала" />
                        </div>
                        <label for="school_city[]"></label>
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="date-border datepicker" name="school_from[]" placeholder="Дан" />
                        <input type="text" class="datepicker" id="schoolTo" name="school_to[]" placeholder="Дейін" />
                    </div>
                    <div class="column ongoing">
                        <input type="checkbox" id="checkedschool" name="school_ongoing[]" value="Ongoing" />Қазірге дейін
                    </div>
                </div>
            </div>
            <a href="#" id="addSchool" class="add-btn">Тағы</a>
        </section>

        <!-- Lanuage Skills Fields -->
        <section>
            <h2>Шет Тілдері</h2>
            <div class="container">
                <div class="row language-flex" id="language">
                    <div class="column language">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" name="language[]" placeholder="Тіл" />
                        <select name="lang_level[]">
                            <option value="" hidden>Дәреже</option>
                            <option value="Basic">Негізгі</option>
                            <option value="Good">Жақсы</option>
                            <option value="Expert">Эксперт</option>
                        </select>
                        <a href="" style="pointer-events: none;"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" id="addLanguage" class="add-btn">Тағы</a>
        </section>

        <!-- Digital Skills Fields-->
        <section>
            <h2>Сандық Дағдылар</h2>
            <div class="container">
                <div class="row language-flex" id="digital">
                    <div class="column language">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" name="digital[]" placeholder="мыс: Excel" />
                        <select name="dig_level[]">
                            <option value="" hidden>Дәреже</option>
                            <option value="Basic">Негізгі</option>
                            <option value="Good">Жақсы</option>
                            <option value="Expert">Эксперт</option>
                        </select>
                        <a href="" style="pointer-events: none;"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" id="addDigital" class="add-btn">Ещё</a>
        </section>
        <input type="submit" name="submit" value="Жүктеп алу" />
    </form>

    <!-- Footer -->
    <footer>
        <p>
        <ul>
            <li><a id="sample-btn">Үлгі</a></li>
            <li><a id="tips-btn">Сәтті түйіндеме</a></li>
            <li><a href="terms.php">Шарттар & Жеке ақпарат</a></li>
            <li><a href="contact.php">Контакт</a></li>
        </ul>
        </p>
    </footer>
    <!-- Sample -->
    <div class="sample">
        <div class="sample-content">
            <img src="../images/resumekz.jpg" alt="">
        </div>
    </div>

    <!-- Tips -->
    <div class="tips">
        <div class="tips-content">
            <h2>Түйіндемені қалай жақсартуға болады?</h2>
            <ol>
                <li>Әрқашан өтініш берген жұмыс ұсынысы негізінде түйіндеме жасаңыз</li>
                <li>Бұл жұмысқа қатысы жоқ ақпаратты қоспаңыз</li>
            </ol>
            <h2>Кеңестер</h2>
            <ol>
                <li>Рекрутерлердің көпшілігі түйіндемеге 10 секундтан аз уақыт жұмсайды. Сондықтан, көп беттер мен тым көп ақпарат бар түйіндеме сіздің мүмкіндігіңізді азайтуы мүмкін</li>
                <li>Егер сізде колледж немесе университет білімі болса, <i>орта мектеп</i> туралы ақпаратты ұсынудың қажеті жоқ</li>
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