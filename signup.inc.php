<?php
if(isset($_POST['submit'])){
    //include_once 'dbs.inc.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $password = $_POST['password'];

    if(empty($first_name)||empty($last_name)||empty($email)||empty($username)||empty($password)){
        header("Location: index.php?signup=empty");
        exit();
    }
    else{
        if(!preg_match("/^[a-zA-Z]*$/",$first_name) || !preg_match("/^[a-zA-Z]*$/",$last_name)){
            header("Location: index.php?signup=char");
            exit();
        }else{
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("Location: index.php?signup=email&first_name=$first_name&last_name=$last_name&uid=$username");
                exit();
            }else{
                header("Location: index.php?signup=success");
                exit();
            }
        }
    }
}else{
    header("Location: index.php");
    exit();
}


?>