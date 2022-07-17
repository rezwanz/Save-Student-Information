<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
if (isset($_SESSION['id']))
{
?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=student-info" class="nav-link text-capitalize">Student Info</a></li>
            <li><a href="action.php?page=dashboard" class="nav-link text-capitalize">Home</a></li>
            <li><a href="action.php?page=logout" class="nav-link text-capitalize">Logout</a></li>
        </ul>
    </div>
</nav>

<?php
}
?>