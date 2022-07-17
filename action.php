<?php

require_once './vendor/autoload.php';

use App\classes\Home;
use App\classes\Auth;
use App\classes\FileUpload;

session_start();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page']=='login')
    {
        include 'pages/login.php';
    }
    elseif ($_GET['page']=='dashboard')
    {
        include 'pages/dashboard.php';
    }
    elseif ($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
    elseif ($_GET['page'] == 'student-info')
    {
        $fileUpload = new FileUpload();
        $students = $fileUpload->getStudentInfo();
        include 'pages/student-info.php';
    }
}
elseif (isset($_POST['loginBtn']))
{
    $auth = new Auth($_POST);
    $message = $auth->login();
    include "pages/login.php";
}
elseif (isset($_POST['studentInfoBtn']))
{
    $fileUpload = new FileUpload($_POST, $_FILES);
    $message = $fileUpload->saveStudentData();
    include 'pages/dashboard.php';
}