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

    // Get all users
    $sql_getall_users = "SELECT `ID`,`Username`, `Email`, `Fullname`, `College`, `Gender`, `DOB` FROM `users`;";
    $result_all_users = mysqli_query($con,$sql_getall_users);

    // show all data
    while( $row = mysqli_fetch_array($result_all_users)){
        echo "<br>".$row["ID"]."<br>".$row["Username"]."<br>".$row["Email"]."<br>".$row["Fullname"]."<br>".$row["College"]."<br>".$row["Gender"]."<br>".$row["DOB"]."<br>";
    }

    // Delete a specific ID
    $delete_id = $_GET["id"];
    $sql_delete_id = "DELETE FROM users WHERE ID = '$delete_id';";
    $r= mysqli_query($con,$sql_delete_id);
    //echo "<br>ROWS:<br>". mysql_affected_rows($con);
    //echo mysqli_affected_rows($con);
    if(mysqli_affected_rows($con)>0){
        $status = "ID Deleted";
        echo $status;
    }else{
        $status = "ID Not Deleted";
        echo $status;
    }

    mysqli_close($con);

?>