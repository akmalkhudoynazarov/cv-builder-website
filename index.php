<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Build Your Professional CV | Fast, Simple and Free</title>
    <meta name="description" content="Create and download CV for Free. Free CV Builder, Free Resume Builder, Create Professional Resume in 5min, Modern Resume Templates">
    <meta name="keywords" content="cv, resume, cv template, resume template, cv builder, resume builder, download cv, free cv, free resume, modern cv">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">


    <!-- Styles -->
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/sample.css">
    <link rel="stylesheet" href="styles/tips.css">

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
                <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
            </div>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-globe"></i>&nbsp English</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="uz/index.php">O'zbek</a>
                    <a href="kz/index.php">Қазақ</a>
                    <a href="ru/index.php">Русский</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Title -->
    <h1><span>- Create Your -</span><br>Professional CV</h1>

    <!-- Form container -->
    <form action="insert.php" enctype="multipart/form-data" method="post" target="_blank">

        <!-- Personal Information -->
        <section>
            <h2>Personal Information</h2>
            <div class="container">
                <div class="row">
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="fname" placeholder="First name" />
                        </div>
                        <label for="fname"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="lname" placeholder="Last name" />
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
                            <input type="tel" name="phone" placeholder="Phone number" />
                        </div>
                        <label for="phone"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="country" placeholder="Country" />
                        </div>
                        <label for="country"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="city" placeholder="City" />
                        </div>
                        <label for="city"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-calendar"></i>
                            <select name="age">
                                <?php
                                echo "<option value='0'>Select Your Age</option>";
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
                                <option value="0">Select Your Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <label for="gender"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-camera"></i>
                            <input type="file" name="userfile" class="jfilestyle" data-text="Choose" data-buttonBefore="true" data-placeholder="Your Photo" />
                        </div>
                        <label for="userfile"></label>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work Experience Fields-->
        <section>
            <h2>Work Experience</h2>
            <div class="container" id="employer">
                <div class="row">
                    <div class="column">
                        <i class="fa-solid fa-building"></i>
                        <input type="text" name="employer[]" placeholder="Employer" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-briefcase"></i>
                        <input type="text" name="position[]" placeholder="Position" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="employer_country[]" placeholder="Country" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="employer_city[]" placeholder="City" />
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="date-border datepicker" name="employment_from[]" placeholder="From" />
                        <input type="text" class="datepicker" name="employment_to[]" id="employerTo" placeholder="To" />
                    </div>
                    <div class="column ongoing">
                        <input type="checkbox" id="checked" name="employment_ongoing[]" value="Ongoing" />Ongoing
                    </div>
                </div>
            </div>
            <a href="#" id="addEmployer" class="add-btn">Add</a>
        </section>

        <!-- Education Fields-->
        <section>
            <h2>Education</h2>
            <div class="container" id="school">
                <div class="row">
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-building-columns"></i>
                            <input type="text" name="school[]" placeholder="School" />
                        </div>
                        <label for="school[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-scroll"></i>
                            <select name="degree[]">
                                <option value="" hidden>Degree</option>
                                <option value="Secondary School">Secondary School</option>
                                <option value="High School">High School</option>
                                <option value="Bachelor Degree">Bachelor Degree</option>
                                <option value="Master Degree">Master Degree</option>
                                <option value="PhD">PhD</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Certificate">Certificate</option>
                            </select>
                        </div>
                        <label for="degree[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <input type="text" name="specialization[]" placeholder="Specialization" />
                        </div>
                        <label for="specialization[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="school_country[]" placeholder="Country" />
                        </div>
                        <label for="school_country[]"></label>
                    </div>
                    <div class="personal">
                        <div class="personal-col">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="school_city[]" placeholder="City" />
                        </div>
                        <label for="school_city[]"></label>
                    </div>
                    <div class="column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="text" class="date-border datepicker" name="school_from[]" placeholder="From" />
                        <input type="text" class="datepicker" id="schoolTo" name="school_to[]" placeholder="To" />
                    </div>
                    <div class="column ongoing">
                        <input type="checkbox" id="checkedschool" name="school_ongoing[]" value="Ongoing" />Ongoing
                    </div>
                </div>
            </div>
            <a href="#" id="addSchool" class="add-btn">Add</a>
        </section>

        <!-- Lanuage Skills Fields -->
        <section>
            <h2>Language Skills</h2>
            <div class="container">
                <div class="row language-flex" id="language">
                    <div class="column language">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" name="language[]" placeholder="Language" />
                        <select name="lang_level[]">
                            <option value="" hidden>Level</option>
                            <option value="Basic">Basic</option>
                            <option value="Good">Good</option>
                            <option value="Expert">Expert</option>
                        </select>
                        <a href="" style="pointer-events: none;"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" id="addLanguage" class="add-btn">Add</a>
        </section>

        <!-- Digital Skills Fields-->
        <section>
            <h2>Digital Skills</h2>
            <div class="container">
                <div class="row language-flex" id="digital">
                    <div class="column language">
                        <i class="fa-solid fa-globe"></i>
                        <input type="text" name="digital[]" placeholder="ex.Excel" />
                        <select name="dig_level[]">
                            <option value="" hidden>Level</option>
                            <option value="Basic">Basic</option>
                            <option value="Good">Good</option>
                            <option value="Expert">Expert</option>
                        </select>
                        <a href="" style="pointer-events: none;"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" id="addDigital" class="add-btn">Add</a>
        </section>
        <input type="submit" name="submit" value="Download" />


    </form>
    <br>
    <footer>
        <p>
        <ul>
            <li><a id="sample-btn">Sample</a></li>
            <li><a id="tips-btn">Tips For Successful CV</a></li>
            <li><a href="terms.php">Terms & Privacy Policy</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        </p>
    </footer>

    <!-- Sample -->
    <div class="sample">
        <div class="sample-content">
            <img src="images/resume.jpg" alt="">
        </div>
    </div>

    <!-- Tips -->
    <div class="tips">
        <div class="tips-content">
            <h2>Best Practices</h2>
            <ol>
                <li>Always create CV based on a job offer you are applying to</li>
                <li>Do not include information which is not relevant to the job</li>
            </ol>
            <h2>Tips</h2>
            <ol>
                <li>Most recruiters spend less than 10 seconds on CV. That's why CV with many pages and too much information may reduce your chance</li>
                <li>No need to include information about <i>elemantary and secondary school</i> if you have a degree from a college or university</li>
            </ol>
        </div>
    </div>

    <!-- jQuery events -->
    <script type="text/javascript" src="js/employer.js"></script>
    <script type="text/javascript" src="js/school.js"></script>
    <script type="text/javascript" src="js/language.js"></script>
    <script type="text/javascript" src="js/digital.js"></script>
    <!--Drop-down JS-->
    <script type="text/javascript" src="js/drop-down.js"></script>
    <!-- jQuery File Styel -->
    <script type="text/javascript" src="js/fileupload/jquery-filestyle.min.js"></script>
    <!-- Datepicker -->
    <script type="text/javascript" src="js/datepicker.js"></script>
    <!-- Popup content -->
    <script type="text/javascript" src="js/sample.js"></script>
    <script type="text/javascript" src="js/tips.js"></script>
</body>

</html>