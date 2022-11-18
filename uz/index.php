<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Professional Rezyume Yarating | Tez va Oson</title>
    <meta name="description" content="Zamonaviy Rezyumeni Bir Zumda Tayyorlang va Yuklab Oling. Bepul va Tez Rezyume. Bepul va Tez CV. O'zbek Tilidagi Birinchi CV Yaratish Websahifasi">
    <meta name="keywords" content="rezyume, cv, rezyume yaratish, rezyume tayyorlash, professional rezyume, rezyume o'zbek tilida, cv o'zbek tilida, rezyumeni yuklash, bepul rezyume, bepul cv">

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
                <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-globe"></i>&nbsp O'zbek</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="../index.php">English</a>
                    <a href="../ru/index.php">Русский</a>
                    <a href="../kz/index.php">Қазақ</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!--  Title -->

    <h1>Professional Rezyume<br><span>- bir zumda tayyorlang -</span>
    </h1>

    <!-- Form container -->
    <form action="insert.php" enctype="multipart/form-data" method="post" target="_blank">
        <!-- Personal Information Fields -->
        <section>
            <h2>Shaxsiy Ma'lumotlar</h2>
            <div class="container">
                <div class="row">
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="fname" placeholder="Ism" />
                        </div>
                        <label for="fname"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="lname" placeholder="Familiya" />
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
                            <input type="tel" name="phone" placeholder="Telefon raqami" />
                        </div>
                        <label for="phone"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="country" placeholder="Davlat" />
                        </div>
                        <label for="country"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="city" placeholder="Shahar" />
                        </div>
                        <label for="city"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-calendar"></i>
                            <select name="age">
                                <?php
                                echo "<option value='0'>Yoshingiz</option>";
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
                                <option value="" hidden>Jins</option>
                                <option value="Female">Ayol</option>
                                <option value="Male">Erkak</option>
                                <option value="Other">Boshqa</option>
                            </select>
                        </div>
                        <label for="gender"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-camera"></i>
                            <input type="file" name="userfile" class="jfilestyle" data-text="Foto" data-buttonBefore="true" data-placeholder="rezyume uchun" />
                        </div>
                        <label for="userfile"></label>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Experience Fields-->
        <section>
            <h2>Ish Staji</h2>
            <div class="container" id="employer">
                <div class="row">
                    <div class="column">
                        <i class="fa-solid fa-building"></i>
                        <input type="text" name="employer[]" placeholder="Ish beruvchi" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-briefcase"></i>
                        <input type="text" name="position[]" placeholder="Lavozim" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="employer_country[]" placeholder="Davlat" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="employer_city[]" placeholder="Shahar" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="date-border datepicker" name="employment_from[]" placeholder="Dan" />
                        <input type="text" class="datepicker" name="employment_to[]" id="employerTo" placeholder="Gacha" />
                    </div>
                    <div class="column ongoing">
                        <input type="checkbox" id="checked" name="employment_ongoing[]" value="Ongoing" />Hozirgacha
                    </div>
                </div>
            </div>
            <a href="#" id="addEmployer" class="add-btn">Yana</a>
        </section>

        <!-- Education Fields-->
        <section>
            <h2>Ta'lim</h2>
            <div class="container" id="school">
                <div class="row">
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-building-columns"></i>
                            <input type="text" name="school[]" placeholder="O'quv maskani" />
                        </div>
                        <label for="school[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-scroll"></i>
                            <select name="degree[]" id="">
                                <option value="" hidden>Daraja</option>
                                <option value="Secondary School">O'rta Ta'lim</option>
                                <option value="High School">O'rta-Maxsus</option>
                                <option value="Bachelor Degree">Bakalavr</option>
                                <option value="Master Degree">Magistr</option>
                                <option value="PhD">PhD</option>
                                <option value="Diploma">Diplom</option>
                                <option value="Certificate">Sertifikat</option>
                            </select>
                        </div>
                        <label for="degree[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <input type="text" name="specialization[]" placeholder="Ta'lim yo'nalishi" />
                        </div>
                        <label for="specialization[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="school_country[]" placeholder="Davlat" />
                        </div>
                        <label for="school_country[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="school_city[]" placeholder="Shahar" />
                        </div>
                        <label for="school_city[]"></label>
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-calendar"></i>
                        <input type="text" class="date-border datepicker" name="school_from[]" placeholder="Dan" />
                        <input type="text" class="datepicker" id="schoolTo" name="school_to[]" placeholder="Gacha" />
                    </div>
                    <div class="column ongoing">
                        <input type="checkbox" id="checkedschool" name="school_ongoing[]" value="Ongoing" />Hozirgacha
                    </div>
                </div>
            </div>
            <a href="#" id="addSchool" class="add-btn">Yana</a>
        </section>

        <!-- Lanuage Skills Fields -->
        <section>
            <h2>Xorijiy Tillar</h2>
            <div class="container">
                <div class="row language-flex" id="language">
                    <div class="column language">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" name="language[]" placeholder="Til" />
                        <select name="lang_level[]">
                            <option value="" hidden>Daraja</option>
                            <option value="Basic">Boshlang'ich</option>
                            <option value="Good">Yaxshi</option>
                            <option value="Expert">Ekspert</option>
                        </select>
                        <a href="" style="pointer-events: none;"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" id="addLanguage" class="add-btn">Yana</a>
        </section>

        <!-- Digital Skills Fields-->
        <section>
            <h2>Raqamli Ko'nikmalar</h2>
            <div class="container">
                <div class="row language-flex" id="digital">
                    <div class="column language">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" name="digital[]" placeholder="mas: Excel" />
                        <select name="dig_level[]">
                            <option value="" hidden>Daraja</option>
                            <option value="Basic">Boshlang'ich</option>
                            <option value="Good">Yaxshi</option>
                            <option value="Expert">Ekspert</option>
                        </select>
                        <a href="" style="pointer-events: none;"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" id="addDigital" class="add-btn">Yana</a>
        </section>
        <input type="submit" name="submit" value="Yuklash" />
    </form>
    <footer>
        <p>
        <ul>
            <li><a id="sample-btn">Namuna</a></li>
            <li><a id="tips-btn">Muvoffaqiyatli Rezyume</a></li>
            <li><a href="shartlar.php">Shartlar & Shaxsiy Ma'lumotlar</a></li>
            <li><a href="contact.php">Kontakt</a></li>
        </ul>
        </p>
    </footer>
    <!-- Sample -->
    <div class="sample">
        <div class="sample-content">
            <img src="../images/rezyume.jpg" alt="">
        </div>
    </div>

    <!-- Tips -->
    <div class="tips">
        <div class="tips-content">
            <h2>Rezyume Qanday Bo'lishi Kerak?</h2>
            <ol>
                <li>Rezyumeni doim uni topshirmoqchi bo'lgan ishingizga moslab yarating</li>
                <li>O'sha ishga aloqasi bo'lmagan ma'lumotlarni (ish tajribasi, ta'lim) rezyumega kiritmang</li>
            </ol>
            <h2>Foydali Maslahatlar</h2>
            <ol>
                <li>Ko'pchilik ish beruvchilar bitta rezyumeni ko'rib chiqish uchun o'rtacha 10 soniyadan kam vaqt sarflaydi. Shuning uchun, ko'p sahifali va ortiqcha ma'lumotga ega rezyume sizning imkoniyatingizni pasaytiradi</li>
                <li>Agar sizda kollej, universitet darajasi bo'lsa, <i>o'rta maktab</i> haqida ma'lumotni rezyumega kiritishning umuman hojati yo'q</li>
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