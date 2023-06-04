<!DOCTYPE HTML>
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
<html>
<head>
    <title>ACG Whiteboard</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
    <style>
        #formbox {
            margin: auto;
            width: 40%;
            border: 3px solid darkblue;
            padding: 10px;
            text-align: center;
        }
        #acglogo{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            height:100px ;
        }
    </style>
</head>
<body>
<img src="https://www.acg.edu/wp-content/uploads/2018/07/ACGLogo_Transparent.png" id="acglogo">
<h1 style="font-family: 'Segoe UI Light'; text-align: center">ACG One - Registration</h1>
<p style="text-align: center">Registration (Step 2 of 2)</p>
<p style="text-align: center;">Connected as <?php echo $_SESSION["UserName"][0]; ?> via ACG Whiteboard</p>
<p  style="text-align: center;"><a href="#" onclick="goBack()">Go back</a></p>
<br><br>
<div id="formbox">
    <p>Enter the <b>Catalogue Codes</b> of the courses you would like to register.</p>
    <form class="pure-form" action="ACGOne/validateregistration.php" method="POST">
        <label for="course1">1. </label>
        <input id="course1" name="course1" type="text">
        <br>
        <label for="course2">2. </label>
        <input id="course2" name="course2" type="text">
        <br>
        <label for="course3">3. </label>
        <input id="course3" name="course3" type="text">
        <br>
        <label for="course4">4. </label>
        <input id="course4" name="course4" type="text">
        <br>
        <label for="course5">5. </label>
        <input id="course5" name="course5" type="text">
        <br>
        <label for="course6">6. </label>
        <input id="course6" name="course6" type="text">
        <br><br>
        <button type="submit" class="pure-button">Register</button>
    </form>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>
