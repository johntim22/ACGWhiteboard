<!DOCTYPE html>
<?php
session_start();
if (!empty($_SESSION["UserName"])) {
//Do nothing, just check that user name exists
} else {
    //If username is not set then session has not been established
    header("Location: http://timotheatos.itweblab.eu");
}
?>
<?php
session_start();
if (!empty($_SESSION["UserName"])) {
    if ($_SESSION["ProfileType"][0] == 2) {
        header("Location: http://timotheatos.itweblab.eu/ACGOne/noaccess.php");
    }
} else {
    //If username is not set then session has not been established
    header("Location: http://timotheatos.itweblab.eu");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link href="http://fonts.cdnfonts.com/css/billabong" rel="stylesheet">
    <title>ACG Whiteboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.js"
            integrity="sha512-1tEJqn7mstsHrTV4jCgx/TMwF3JAS3Gc84hdTwXlUk7HsBu81wNi/TUyjZqjf7M40isIUUk9xwlsNxAVOI5TGQ=="
            crossorigin="anonymous"></script>
    <script src="makepdf.js"></script>
</head>
<body>
<div data-role="appbar" data-expand-point="md">
    <a href="dashboard.php" class="brand no-hover" style="font-family: 'Billabong', 'Segoe UI'; font-size: 30px ">
        ACG Whiteboard
    </a>

    <ul class="app-bar-menu">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="mycourses.php">My Courses</a></li>
        <li><a href="myexams.php">My Exams</a></li>
        <li><a href="mygrades.php">My Grades</a></li>
        <li><a href="mytexts.php">My Textbooks</a></li>
    </ul>
</div>
<br><br><br>
<div class="container" id="transcript">
    <h4 style="text-align: center">Unofficial Transcript</h4>
    <p><b>Student's Name: <?php echo $_SESSION["UserName"][0] ?> </b></p>
    <p><b>Student's ID: <?php echo $_SESSION["UserID"][0] ?> </b></p>
    <p><b>Earned Credits: <?php echo $_SESSION["UserCredits"][0] ?> </b></p>
    <br><br>
    <table class="table">
        <thead>
        <tr>
            <td>Course</td>
            <td>Grade</td>
            <td>Credits Possible</td>
            <td>Credits Earned</td>
        </tr>
        </thead>
        <tbody>
        <?php
        include "ACGOne/dbconnect.php";
        $usertoto = $_SESSION["UserID"][0];
        $sql = "select CourseCode from MyCourses where UserToReg='$usertoto';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr>' . '<td>' . $row['CourseCode'] . '</td>' . '<td>WIP</td>' . '<td>3.00</td>' .'<td>0.00</td>' . '</tr>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        </tbody>
    </table>
    <br><br>
</div>
<div class="container">
    <button id="download" class="button primary">Transcript in PDF</button>
    <button class="button secondary">See previous grades</button>
</div>

<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>