<?php
    require "init.php";
    $username = $_GET["username"];
    $password = md5($_GET["password"]);

    // make an sql query with this username and pass for login
    $sql = "select * from users where Username = '$username' and Password = '$password';";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $name = $row['Username'];
        $status = "Longin Success";
        echo json_encode(array('response' => $status, "name"=>$name));
    }else{
        $status = "Login Failed";
        echo json_encode(array("resoponse"=>$status));
    }

    

    

?>