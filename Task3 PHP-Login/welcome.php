<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="main-body">
        <div id="header">
            <h1>Dashboard</h1>
            <h2>Main</h2>
        </div>
        <div class="main-section">
        <div class="link-button">
            <a href="index.html" title="Go to homepage" class="page-button" style="margin-right: 5px;">Homepage</a>
       
            <a href="logout.php" title="Logout" class="page-button" style="margin-right: 1px;">Logout</a>
        </div>
        <br>    
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table-data">
                
            </tbody>
        </table>
    </div>
</body>
</html>