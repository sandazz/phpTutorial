<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error displaying in web page</title>
</head>
<body>
    <h2>sign up</h2>
    <form action="signup.inc.php" method="post">

        <?php?>








        <input type="text" name="first_name" id="" placeholder="first name"><br>
        <input type="text" name="last_name" id="" placeholder="last name"><br>
        <input type="text" name="email" id="" placeholder="email"><br>
        <input type="text" name="uid" id="" placeholder="user name"><br>
        <input type="text" name="password" id="" placeholder="password"><br>
        <button type="submit" name="submit" value="submit">Sign up</button>

    </form>


    <?php
    /*
    //This cheack from the url
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl,"signup=empty")==true){
        echo "You did not fill in all fields !";
        exit();
    }elseif(strpos($fullUrl,"signup=char")==true){
        echo "You used invalid characters !";
        exit();
    }elseif(strpos($fullUrl,"signup=email")==true){
        echo "You used invalid email !";
        exit();
    }elseif(strpos($fullUrl,"signup=success")==true){
        echo "You have been signed up !";
        exit();
    }
    */
    
    
    
    
    //directly take from the signup

    if(!isset($_GET['signup'])){
        exit();
    }else{
        $signupCheck = $_GET['signup'];

        if($signupCheck == "empty"){
            echo "you did not fill in all the fields !";
            exit();
        }elseif($signupCheck == "char"){
            echo "you used invalid characters";
            exit();
        }elseif($signupCheck== "email"){
            echo "you used invalid email";
            exit();
        }elseif($signupCheck == "success"){
            echo "you have been signed up";
        }
    }

     
    
    
    
    ?>
</body>
</html>