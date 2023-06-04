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
<!--Navbar here-->
<div data-role="appbar" data-expand-point="md">
    <a href="dashboard.php" class="brand no-hover" style="font-family: 'Billabong', 'Segoe UI'; font-size: 30px ">
        ACG Whiteboard
    </a>

    <ul class="app-bar-menu">
        <?php
        if ($_SESSION["ProfileType"][0]==1){
            echo "
            <li><a href='dashboard.php'>Dashboard</a></li>
            <li><a href='mycourses.php'>My Courses</a></li>
            <li><a href='myexams.php'>My Exams</a></li>
            <li><a href='mygrades.php'>My Grades</a></li>
            <li><a href='mytexts.php'>My Textbooks</a></li>
            ";
        }
        ?>
        <?php
        if ($_SESSION["ProfileType"][0]!=1){
            echo  "<li><a href='dashboard.php'>Dashboard</a></li>
                   <li><a href='#'>My Classes</a></li>
                   <li><a href='#'>My Content</a></li>
                   <li><a href='https://grd.acg.edu/'>Grading</a></li>
                   <li><a href='http://forms.acg.edu/absences/'>Absences</a></li>
                   <li><a href='ACGOne/admintools.php'>Admin Tools</a></li>


                    ";
        }
        else{
            //Do nothing
        }
        ?>
    </ul>
</div>
<br><br><br><br><br>
<div class="container">
    <?php
    echo "<h3> Welcome, ".$_SESSION["UserName"][0]." (".$_SESSION["UserID"][0].")</h3>";
    ?>
    <br><br>
    <?php
    if ($_SESSION["ProfileType"][0]==1){
        echo '
        <div class="row">
        <div class="cell-3">
            <div class="tiles-grid tiles-group size-2" data-group-title="Whiteboard Applications">
                <a href="mycourses.php" data-role="tile" data-size="wide" class="bg-cyan">
                    <span class="mif-book-reference icon"></span>
                    <span class="branding-bar">My Courses</span>
                </a>
                <a href="myexams.php" data-role="tile" class="bg-teal">
                    <span class="mif-pencil icon"></span>
                    <span class="branding-bar">My Exams</span>
                </a>
                <a href="mygrades.php" data-role="tile" class="bg-crimson">
                    <span class="mif-assignment icon"></span>
                    <span class="branding-bar">My Grades</span>
                </a>
                <a href="mytexts.php" data-role="tile" data-size="wide" class="bg-olive">
                    <span class="mif-books icon"></span>
                    <span class="branding-bar">My Textbooks</span>
                </a>
            </div>
        </div>
        
        ';
    }
    else{
        echo '
        <div class="row">
        <div class="cell-3">
            <div class="tiles-grid tiles-group size-2" data-group-title="Whiteboard Applications">
                <a href="#" data-role="tile" data-size="wide" class="bg-teal">
                    <span class="mif-school icon"></span>
                    <span class="branding-bar">My Classes</span>
                </a>
                 <a href="#" data-role="tile" data-size="wide" class="bg-indigo">
                    <span class="mif-files-empty icon"></span>
                    <span class="branding-bar">My Content</span>
                </a>
                <a href="https://grd.acg.edu/" data-role="tile" class="bg-magenta">
                    <span class="mif-checkmark icon"></span>
                    <span class="branding-bar">Grading</span>
                </a>
                <a href="http://forms.acg.edu/absences/" data-role="tile" class="bg-amber">
                    <span class="mif-users icon"></span>
                    <span class="branding-bar">Absences</span>
                </a>
            </div>
        </div>
       ';
    }
    ?>
        <div class="cell-3">
                <div class="tiles-grid tiles-group size-5" data-group-title="ACG ONE Applications">
                    <a href="ACGOne/coursecatalogue.php" data-role="tile" data-size="medium" class="bg-steel">
                        <span class="mif-search icon"></span>
                        <span class="branding-bar">Courses Catalogue</span>
                    </a>
                    <a href="ACGOne/colleguessearch.php" data-role="tile" class="bg-emerald">
                        <span class="mif-contacts-mail icon"></span>
                        <span class="branding-bar">Collegues</span>
                    </a>
                    <a href="http://webmail.acg.edu" data-role="tile" data-size="wide" class="bg-cobalt">
                        <span class="mif-envelop icon"></span>
                        <span class="branding-bar">ACG Email</span>
                    </a>
                    <a href="https://itservices.acg.edu/PasswordReset" data-role="tile" class="bg-red">
                        <span class="mif-lock icon"></span>
                        <span class="branding-bar">ACG Password Reset</span>
                    </a>
                    <?php
                    if ($_SESSION["ProfileType"][0]==1){
                        echo '
                        <a href="registration.php" data-role="tile" data-size="large" class="bg-amber">
                        <span class="mif-note-add icon"></span>
                        <span class="branding-bar">Registration</span>
                    </a>
                        ';
                    }
                    else{
                        echo '
                        <a href="ACGOne/admintools.php" data-role="tile" data-size="large" class="bg-pink">
                        <span class="mif-apps icon"></span>
                        <span class="branding-bar">Admin Tools</span>
                    </a>
                        ';
                    }
                    ?>
                    <a href="http://helpdesk.acg.edu" data-role="tile" data-size="medium" class="bg-lime">
                        <span class="mif-help icon"></span>
                        <span class="branding-bar">HelpDesk</span>
                    </a>
                    <a href="http://www.acg.edu" data-role="tile" data-size="wide" data-effect="image-set">
                        <!--Animated LIVE tile-->
                        <span class="branding-bar">ACG website</span>
                        <!--<span class="badge-top">1 new</span>--->
                        <img src="https://www.in.gr/wp-content/uploads/2018/08/Deree-18.jpg">
                        <img src="https://schol.io/upload/school/acg/1.jpg">
                        <img src="https://www.acg.edu/wp-content/uploads/2020/11/ACG-Venus-Library.jpg">
                        <img src="https://www.acg.edu/wp-content/uploads/2019/06/Commencement_mainDSC_0074-1.jpg">
                        <img src="https://www.acg.edu/wp-content/uploads/2019/07/undergrad_progs.jpg">
                    </a>
                    <a href="forum.php" data-role="tile" data-size="medium" class="bg-grayBlue">
                        <span class="mif-chat icon"></span>
                        <span class="branding-bar">Courses Evaluation</span>
                    </a>
                    <a href="#" data-role="tile" data-size="medium" class="bg-orange">
                        <span class="mif-profile icon"></span>
                        <span class="branding-bar">My ACG ONE Profile</span>
                    </a>
                    <a href="validatelogout.php" data-role="tile" data-size="medium" class="bg-gray">
                        <span class="mif-exit icon"></span>
                        <span class="branding-bar">Logout</span>
                    </a>
                </div>
    </div>
</div>
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>