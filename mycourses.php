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
    <h5>My Courses</h5>
    <div class="row">
        <div class="cell-4">
            <div class="card image-header">
                <div class="card-header fg-white"
                     style="background-image: url(https://i.pinimg.com/originals/6f/4a/57/6f4a57be3d213af39eb32460f2c0bbee.png)">
                    Demo Course
                </div>
                <div class="card-footer">
                    <a href="https://zoom.us/test" class="button secondary">Connect to course</a>
                </div>
            </div>
        </div>
        <?php
        include 'ACGOne/dbconnect.php';
        $ureg = $_SESSION["UserID"][0];
        $sql = "SELECT CourseCode FROM MyCourses where UserToReg='$ureg'; ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '
             

    
            <div class="cell-4">
            <div class="card image-header">
                <div class="card-header fg-white"
                     style="background-image: url(https://i.pinimg.com/originals/6f/4a/57/6f4a57be3d213af39eb32460f2c0bbee.png)">
                 ' . $row["CourseCode"] . '
             </div>
                <div class="card-footer">
                    <a href="https://zoom.us/test" class="button secondary">Connect to course</a>
                </div>
            </div>
        </div>

             
             ';
            }
        } else {
            //Do nothing
        }
        $conn->close();
        ?>
    </div>
    <br>
    <h5>My Progress</h5>
    <div class="row">
        <div class="cell-6">
            <div class="more-info-box bg-brown fg-white">
                <div class="content">
                    <h2 class="text-bold mb-0"><?php echo $_SESSION["UserCredits"][0]; ?></h2>
                    <div>Total Credits</div>
                </div>
                <div class="icon">
                    <span class="mif-chart-bars"></span>
                </div>
            </div>

        </div>
        <div class="cell-6">
            <div class="more-info-box bg-green fg-white">
                <div class="content">
                    <h2 class="text-bold mb-0"><?php echo $_SESSION["UserComCour"][0]; ?></h2>
                    <div>Completed Courses</div>
                </div>
                <div class="icon">
                    <span class="mif-checkmark"></span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>