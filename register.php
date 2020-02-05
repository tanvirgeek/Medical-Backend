<?php

    require "init.php";
    $user_name = $_GET["username"];
    $password = md5($_GET["password"]);
    $email = $_GET["email"];
    $fullname = $_GET["fullname"];
    $college = $_GET["college"];
    $gender = $_GET["gender"];
    $dob = $_GET["DOB"];

    //echo $password;

    $sql = "select * from users where Username = '$user_name'";

    $result = mysqli_query($con,$sql);
    //var_dump($result);
    // checking if username exists or not
    if (mysqli_num_rows($result)>0){
        $status = "exists";
        echo "The username exists";
    }else{
        $sql = "insert into users (Username, Password, Email, Fullname, College, Gender, DOB) values('$user_name','$password','$email','$fullname','$college','$gender','$dob');";
        if(mysqli_query($con,$sql)){
            $status = "Registration Success";
            echo $status;
        }else{
            $status = "Resgistration Failed";
            echo $status;
        }
    }
    echo json_encode(array("response" => $status));
    mysqli_close($con);

?>