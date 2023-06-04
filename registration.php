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
<?php
session_start();
if (!empty($_SESSION["UserName"])){
    if ($_SESSION["ProfileType"][0]==2){
        header("Location: http://timotheatos.itweblab.eu/ACGOne/noaccess.php");
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
    <title>ACG Whiteboard</title>
    <style>
        #CSSSearch {
            background-image: url('https://www.w3schools.com/css/searchicon.png'); /* Add a search icon to input */
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            width: 100%; /* Full-width */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
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
    <h5>Registration (Step 1 of 2)</h5>
    <p>Currently you are able to register for Summer Period only!<br>
    Seach the courses you would like to register for and write down their <b>Catalogue Code</b></p>
    <p><a href="registrationstep2.php">Go to Step 2</a> </p>
    <br>
    <input type="text" id="CSSSearch" onkeyup="SearchRegister();" placeholder="Search the catalogue by Course Name...">
    <br>
    <table class="table" id="RegiCatalogue">
        <thead>
        <tr>
            <th>Catalogue Code</th>
            <th>Course Name</th>
            <th>Semester to be offered</th>
            <th>Course Category</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "ACGOne/dbconnect.php";
        $sql = "SELECT * FROM CoursesList where SemOffcer like 'Summer%' order by SemOffcer, CourseCodeCat";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>"."</td>"."<td>".$row["CourseCodeCat"]."</td>"."<td>".$row["CourseNameCat"]."</td>"."<td>".$row["SemOffcer"]."</td>"."<td>".$row["CourseCategory"]."</td>"."</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

    </tbody>
    </table>
</div>

<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
<script>
        function SearchRegister() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("CSSSearch");
        filter = input.value.toUpperCase();
        table = document.getElementById("RegiCatalogue");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
    } else {
        tr[i].style.display = "none";
    }
    }
    }
    }
</script>
</body>
</html>