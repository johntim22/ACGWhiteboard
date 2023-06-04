<!DOCTYPE html>
<?php
session_start();
if (!empty($_SESSION["UserName"])){
//Do nothing, just check that user name exists
}
else {
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
<div class="container">
    <h5>Active Exams</h5>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Course</th>
            <th>Term Exam</th>
            <th>Exam Type</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Demo Course</td>
            <td>Final Exam</td>
            <td>Online Invigilated Exam</td>
            <td><a href="WhiteboardExams/demoexaminv1.html">Begin</a></td>
        </tr>
        </tbody>
    </table>
    <br><br>
    <h5>Upcoming Exams</h5>
    <p>There are no scheduled exams for now!</p>
    </div>

    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>