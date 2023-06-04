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
if (!empty($_SESSION["UserName"])){
    if ($_SESSION["ProfileType"][0]==2){
        header("Location: http://timotheatos.itweblab.eu/ACGOne/noaccess2.php");
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ACG Whiteboard</title>
    <style>
        .checked {
            color: orange;
        }
    </style>
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
    <table class="table" id="RegiCatalogue">
        <thead>
        <tr>
            <th>Catalogue Code</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "ACGOne/dbconnect.php";
        $usertoto=$_SESSION["UserID"][0];
        $sql = "SELECT * FROM MyCourses where UserToReg='$usertoto'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>" . "<td>" . $row["CourseCode"] . "</td>" .
                    '<td>
                    <span style="cursor: pointer" class="fa fa-star" id="star1" onclick="changestar1()"></span>
                    <span style="cursor: pointer" class="fa fa-star" id="star2" onclick="changestar2()"></span>
                    <span style="cursor: pointer" class="fa fa-star" id="star3" onclick="changestar3()"></span>
                    <span style="cursor: pointer" class="fa fa-star" id="star4" onclick="changestar4()"></span>
                    <span style="cursor: pointer" class="fa fa-star" id="star5" onclick="changestar5()"></span>

</td>' . "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        </tbody>
    </table>
    <p>To evaluate your courses please click on the respective star. The scroes are between 1 (Not Good) and 5 (Excellent).</p>
</div>

<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
<script>
    function changestar1(){
        document.getElementById("star1").className="fa fa-star checked";
    }
    function changestar2(){
        document.getElementById("star2").className="fa fa-star checked";
        changestar1();
    }
    function changestar3(){
        document.getElementById("star3").className="fa fa-star checked";
        changestar2();
    }
    function changestar4(){
        document.getElementById("star4").className="fa fa-star checked";
        changestar3();
    }
    function changestar5(){
        document.getElementById("star5").className="fa fa-star checked";
        changestar4();
    }
</script>
</body>
</html>