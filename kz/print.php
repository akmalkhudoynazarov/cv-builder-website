<?php
require_once '../dompdf/autoload.inc.php';
include '../connect.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// Strings from insert page
session_start();
$lastID = $_SESSION['lastID'];
$fileNewName = $_SESSION['$fileNewName'];

// Html page
$html = '<!DOCTYPE html><html lang="kz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Түйіндеме жүктеп алу</title>
    <style>
      
      body{
        font-family: DejaVu Serif;
      }
      
    @page{
        padding: 0;
        background-color: rgba(244,244,243,1);
        position: relative;
    }
    
    section{
        width: 100%;
    }
    
    /* Personal information */
    .personal{
        background-color: rgb(196, 189, 151);
        position: absolute;
        top: -12mm;
        left: -12mm;
        right: -12mm;
        width: 210mm;
    }
    .empty-container{
        margin-top: 30mm;
    }
    
    .name{
        width: 100%;
    }

    .name table{
        padding: 12mm 12mm 5mm 12mm;
    }

    table{
        width: 100%;
        border-collapse: collapse;
    }
    td, tr, th{
        margin: 0;
        padding: 0;
        vertical-align: top;
    }
    
    h1, h2, h3, h4, h5{
        padding: 0;
        margin: 0;
        text-transform: capitalize;
    }
    
    h1{
        font-size: 40px;
        line-height: 40px;
        font-family: DejaVu Serif;
        font-style: normal;
        font-weight: 700;
    }

    .circle{
        width: 140px;
        height: 140px;
        border-radius: 70px;
        background-size: cover;
        background-position: center center;
        vertical-align: top;
    }
    
    .contact{
        background-color: black;
        margin-top: 5mm;
        padding: 2mm 15mm;
    }
    .contact td{
        padding:0;
        margin: 0;
        text-align: center;
        color: white;
        font-style: italic;
        font-size: 12px;
    }
    
    /* Work experience */
    
    .work{
        padding: 4mm 5mm;
    }
    h2{
        font-size: 23px;
        text-align: left;
    }
    hr{
        border-bottom: 2px solid rgb(196, 189, 151);
        margin-top: 10px;
    }
    
    .col-desc{
        width: 50%;
    }
    .col-year{
        width: 50%;
        text-align: center;
    }
    
    .work td{
        padding-top: 15px;
    }
    h3{
        padding-bottom: 5px;
        font-size: 16px;
    }
    .col-year h3{
        text-align: center;
        font-size: 14px;
    }
    
    h4{
        font-weight: lighter;
        font-size: 14px;
    }
    
    /* Education */
    
    .degree{
        font-style: italic;
    }
    
    /* Language */

    .language{
        margin-top: 15px;
        width: 100%;
    }
    
    ul{
        padding: 0;
        margin: 0;
    }
    
    ul li{
        display: inline-block;
        margin-right: 6mm;
        vertical-align:top
    }
    li h4{
        font-weight: bolder;
    }
    </style>
</head>
<body>';

// Connection to DB
// $conn = new mysqli('localhost', 'root', '', 'cvdataen');

$sql = "SELECT * FROM personalData WHERE UserID=$lastID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<section class="personal">
                <div class="name">
                    <table>
                        <tr>
                            <td style="width: 80%;">
                                <h1>' . $row['First_Name'] . '<br>' . $row['Last_Name'] . '</h1>
                            </td>
                            <td style="width: 20%;">
                            <div class="circle" style="background-image: url(uploads/' . $row['User_Photo'] . ')"></div>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="contact">
                    <table>
                        <tr>
                            <td style="padding-left: 0;">' . $row['City'] . ', ' . $row['Country'] . '</td>
                            <td style="border-left: 1px solid white;text-align:center;">' . $row['Email'] . '</td>
                            <td style="border-left: 1px solid white;text-align:center;">' . $row['Phone'] . '</td>';

        // Gender in russian language
        $x = $row['Gender'];
        if ($x == "Female") {
            $html .= '<td style="border-left: 1px solid white;text-align:center;padding-left: 4px;padding-right: 4px;">Әйел</td>';
        } elseif ($x == "Male") {
            $html .= '<td style="border-left: 1px solid white;text-align:center;padding-left: 4px;padding-right: 4px;">Еркек</td>';
        } elseif ($x == "Other") {
            $html .= '<td style="border-left: 1px solid white;text-align:center;padding-left: 4px;padding-right: 4px;">Басқа</td>';
        }

        $html .= '<td style="border-left: 1px solid white;text-align:center;padding-left: 4px;padding-right: 4px;">' . $row['Age'] . '</td>
                        </tr>
                    </table>
                </div>
            </section><div class="empty-container"></div><br>';
    }
}


// Work experience
$sql = "SELECT * FROM employerData WHERE UserID=$lastID";
$result = $conn->query($sql);
$check = mysqli_fetch_assoc($conn->query($sql));
if ($result->num_rows > 0) {
    if (!empty($check['Employer'])) {
        $html .= '<div class="empty-container"></div><section>
            <div class="work">
                <table>
                    <tr>
                        <th colspan="2">
                            <h2 style="letter-spacing: 1.5px">Жұмыс Тәжірибесі</h2>
                            <hr>
                        </th>
                    </tr>';
        while ($row = $result->fetch_assoc()) {
            $html .= '<tr>
                            <td class="col-desc"">
                                <h3 style="letter-spacing: 1.3px">' . $row['Position'] . '</h3>
                                <h4>' . $row['Employer'] . ', ' . $row['Employer_City'] . ', ' . $row['Employer_Country'] . '</h4>
                            </td>
                            <td class="col-year">';
            if (empty($row['Employment_Ongoing'])) {
                $html .= '<h3>' . $row['Employment_From'] . ' <span>/</span> ' . $row['Employment_To'] . '</h3>';
            } else {
                $html .= '<h3>' . $row['Employment_From'] . ' <span>/</span> Қазірге дейін</h3>';
            }

            $html .= '</td>
                        </tr>';
        }
        $html .= '</table>
            </div>
        </section>';
    }
}


// Education
$sql = "SELECT * FROM schoolData WHERE UserID=$lastID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $html .= '<section>
            <div class="work">
                <table>
                    <tr>
                        <th colspan="2">
                            <h2 style="letter-spacing: 1.5px">Білім</h2>
                            <hr>
                        </th>
                    </tr>';
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>
                            <td class="col-desc"">
                                <h3 style="letter-spacing: 1.3px">' . $row['Specialization'] . '</h3>';
        $y = $row['Degree'];
        if ($y == "Secondary School") {
            $html .= '<h4 class="degree">Орта білім</h4>';
        } elseif ($y == "High School") {
            $html .= '<h4 class="degree">Орта-арнайы</h4>';
        } elseif ($y == "Bachelor Degree") {
            $html .= '<h4 class="degree">Бакалавр</h4>';
        } elseif ($y == "Master Degree") {
            $html .= '<h4 class="degree">Магистр</h4>';
        } elseif ($y == "PhD") {
            $html .= '<h4 class="degree">PhD</h4>';
        } elseif ($y == "Diploma") {
            $html .= '<h4 class="degree">Диплом</h4>';
        } elseif ($y == "Certificate") {
            $html .= '<h4 class="degree">Сертификат</h4>';
        }

        $html .= '<h4>' . $row['School'] . ', ' . $row['School_City'] . ', ' . $row['School_Country'] . '</h4>
                            </td>
                            <td class=" col-year">';

        if (empty($row['School_Ongoing'])) {
            $html .= '<h3>' . $row['School_From'] . ' <span>/</span> ' . $row['School_To'] . '</h3>';
        } else {
            $html .= '<h3>' . $row['School_From'] . ' <span>/</span> Қазірге дейін</h3>';
        }

        $html .= '</td>
                        </tr>';
    }
    $html .= '</table>
            </div>
        </section>';
}

// Languages
$sql = "SELECT * FROM languageData WHERE UserID=$lastID";
$check = mysqli_fetch_assoc($conn->query($sql));
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    if (!empty($check['Language'])) {
        $html .= '<section>
            <div class="work">
                            <h2 style="letter-spacing: 1.5px">Шет Тілдері</h2>
                            <hr>
                            <div class="language">
                            <ul>';
        while ($row = $result->fetch_assoc()) {
            $html .= '<li>';
            if ($row['Language_Level'] == "Basic") {
                $html .= "<h4>" . $row['Language'] . "<span style='font-weight: normal;'> - Негізгі</span></h4>";
            } elseif ($row['Language_Level'] == "Good") {
                $html .= "<h4>" . $row['Language'] . "<span style='font-weight: normal;'> - Жақсы</span></h4>";
            } elseif ($row['Language_Level'] == "Expert") {
                $html .= "<h4>" . $row['Language'] . "<span style='font-weight: normal;'> - Эксперт</span></h4>";
            }
            $html .= '</li>';
        }
        $html .= '</ul>
            </div>
            </div>
        </section>';
    }
}

// Digital skills
$sql = "SELECT * FROM digitalData WHERE UserID=$lastID";
$check = mysqli_fetch_assoc($conn->query($sql));
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    if (!empty($check['Digital'])) {
        $html .= '<section>
            <div class="work">
                            <h2 style="letter-spacing: 1.5px">Сандық Дағдылар</h2>
                            <hr>
                            <div class="language">
                            <ul>';
        while ($row = $result->fetch_assoc()) {
            $html .= '<li>';
            if ($row['Digital_Level'] == "Basic") {
                $html .= "<h4>" . $row['Digital'] . "<span style='font-weight: normal;'> - Негізгі</span></h4>";
            } elseif ($row['Digital_Level'] == "Good") {
                $html .= "<h4>" . $row['Digital'] . "<span style='font-weight: normal;'> - Жақсы</span></h4>";
            } elseif ($row['Digital_Level'] == "Expert") {
                $html .= "<h4>" . $row['Digital'] . "<span style='font-weight: normal;'> - Эксперт</span></h4>";
            }
            $html .= '</li>';
        }
        $html .= '</ul>
            </div>
            </div>
</section>';
    }
}

// HTML closing elements
$html .= '
</body>
</html>';


// PDF settings
$options = new Options;
$options->setChroot($options);
$options->setIsRemoteEnabled(true);
// $options->setDefaultFont('DejaVu Sans');
$dompdf = new DOMPDF(["chroot" => __DIR__]);
$dompdf->setPaper('A4', 'portrait');
$dompdf->loadHtml($html);
$dompdf->render();
//For view
// $dompdf->stream("Резюме", array("Attachment" => true));
// for download
$dompdf->stream("түйіндеме.pdf");
