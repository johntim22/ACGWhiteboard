<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!empty($_SESSION["UserName"])) {
    header("Location: http://timotheatos.itweblab.eu/dashboard.php");
} else {
    //Do nothing
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link href="http://fonts.cdnfonts.com/css/billabong" rel="stylesheet">
    <title>ACG Whiteboard</title>
</head>
<body>
<div data-role="appbar" data-expand-point="md">
    <a href="#" class="brand no-hover" style="font-family: 'Billabong', 'Segoe UI'; font-size: 30px ">
        ACG Whiteboard
    </a>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="cell-6">
            <h5>Login Panel</h5>
            <p>Login with your ACG ONE account!</p><br>
            <form action="validatelogin.php" method="POST">
                <div class="form-group">
                    <label>ACG ONE Id Number</label><br>
                    <input type="number" placeholder="Enter your Student or Professor ID"
                    id="studentid" name="studentid" size="60">
                </div>
                <div class="form-group">
                    <label>Password</label><br>
                    <input type="password" id="password" name="password" size="60">
                </div>
                <div class="form-group">
                    <button class="button success">Login</button>
                </div>
            </form>
            <p>Forgot your password? <a href="http://helpdesk.acg.edu">Submit a ticket!</a> </p>
            <p>Don't have an ACG ONE account? <a href="ACGOne/acgoneaccountnew.php">Create one here!</a></p>
        </div>
        <div class="cell-6">
            <img src="https://img.freepik.com/free-vector/college-students-university-education-concept-people-illustration_169479-534.jpg?size=626&ext=jpg" style="height: 300px">
        </div>
    </div>
    <br>
    <div class="row">
        <h5>Administration Messages</h5>
        <br>
        <div class="card">
            <div class="card-header">
                Download now the ACG ONE Java Application!
            </div>
            <div class="card-content p-2">
                Dear faculty and staff,<br>
                For easier ERP Management in your local machine please contact the IRM Department in order to send you
                the installation file of ACG ONE Desktop.
            </div>
            <div class="card-footer">
                IRM Department
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>