<?php
session_start();
include '../connect.php';

// $conn = new mysqli('localhost', 'root', '', 'cvdataen');

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    // Photo input
    $fileName = $_FILES['userfile']['name'];
    $fileError = $_FILES['userfile']['error'];
    $fileTmpname = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    if (empty($fileName)) {
        $fileNewName = NULL;
    } else {
        if ($fileError == 0) {
            $fileNewName = uniqid('', true) . $fname . "." . $fileActualExt;
            $_SESSION['$fileNewName'] = $fileNewName;
            $fileDestination = 'uploads/' . $fileNewName;
            move_uploaded_file($fileTmpname, $fileDestination);
        } else {
            echo 'There was an error uploading your file. Please, try again.';
        }
    }
    // Personal information inputs

    $sql = "INSERT INTO `personalData`(`First_Name`, `Last_Name`, `Email`, `Phone`, `Country`, `City`, `Age`, `Gender`, `User_Photo`) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssiss', $fname, $lname, $email, $phone, $country, $city, $age, $gender, $fileNewName);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $lastID = $stmt->insert_id;
        $_SESSION['lastID'] = $lastID;

        // Work experience inputs
        $count = count($_POST['employer']);
        for ($a = 0; $a < $count; $a++) {

            $employer = $_POST['employer'][$a];
            $position = $_POST['position'][$a];
            $employer_country = $_POST['employer_country'][$a];
            $employer_city = $_POST['employer_city'][$a];
            $employment_from = $_POST['employment_from'][$a];
            $employment_to = $_POST['employment_to'][$a];
            $employment_ongoing = empty($_POST['employment_ongoing'][$a]) ? NULL : $_POST['employment_ongoing'][$a];
            $sql2 = "INSERT INTO `employerData`(`Employer`, `Position`, `Employer_Country`, `Employer_City`, `Employment_From`, `Employment_To`, `Employment_Ongoing`, `UserID`) VALUES (?,?,?,?,?,?,?,?)";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bind_param('sssssssi', $employer, $position, $employer_country, $employer_city, $employment_from, $employment_to, $employment_ongoing, $lastID);
            $stmt2->execute();
        }

        // Education inputs
        $countschool = count($_POST['school']);
        for ($b = 0; $b < $countschool; $b++) {
            $school = $_POST['school'][$b];
            $degree = $_POST['degree'][$b];
            $specialization = $_POST['specialization'][$b];
            $school_country = $_POST['school_country'][$b];
            $school_city = $_POST['school_city'][$b];
            $school_from = $_POST['school_from'][$b];
            $school_to = $_POST['school_to'][$b];
            $school_ongoing = empty($_POST['school_ongoing'][$b]) ? NULL : $_POST['school_ongoing'][$b];
            $sql3 = "INSERT INTO `schoolData`(`School`, `Degree`, `Specialization`, `School_Country`, `School_City`, `School_From`, `School_To`, `School_Ongoing`, `UserID`) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt3 = $conn->prepare($sql3);
            $stmt3->bind_param('ssssssssi', $school, $degree, $specialization, $school_country, $school_city, $school_from, $school_to, $school_ongoing, $lastID);
            $stmt3->execute();
        }


        // Language
        $countlanguage = count($_POST['language']);
        for ($c = 0; $c < $countlanguage; $c++) {
            $language = empty($_POST['language'][$c]) ? NULL : $_POST['language'][$c];
            $lang_level = empty($_POST['lang_level'][$c]) ? NULL : $_POST['lang_level'][$c];
            $sql4 = "INSERT INTO `languageData`(`Language`, `Language_Level`, `UserID`) VALUES (?,?,?)";
            $stmt4 = $conn->prepare($sql4);
            $stmt4->bind_param('ssi', $language, $lang_level, $lastID);
            $stmt4->execute();
        }

        // Digital
        $countdigital = count($_POST['digital']);
        for ($d = 0; $d < $countdigital; $d++) {
            $digital = empty($_POST['digital'][$d]) ? NULL : $_POST['digital'][$d];
            $dig_level = empty($_POST['dig_level'][$d]) ? NULL : $_POST['dig_level'][$d];
            $sql5 = "INSERT INTO `digitalData`(`Digital`, `Digital_Level`, `UserID`) VALUES (?,?,?)";
            $stmt5 = $conn->prepare($sql5);
            $stmt5->bind_param('ssi', $digital, $dig_level, $lastID);
            $stmt5->execute();
        }

        header("Location: print.php");
    }
}
