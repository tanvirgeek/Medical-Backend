<?php
    require "init.php";

    // Get all users
    $sql_getall_users = "SELECT `ID`,`Username`, `Email`, `Fullname`, `College`, `Gender`, `DOB` FROM `users`;";
    $result_all_users = mysqli_query($con,$sql_getall_users);

    // show all data
    echo "Mysqli_fetch_array: <br>";
    //var_dump(mysqli_fetch_array($result_all_users));
    echo "<br><br>";
    while( $row = mysqli_fetch_array($result_all_users)){
        echo "<br>".$row["ID"]."<br>".$row["Username"]."<br>".$row["Email"]."<br>".$row["Fullname"]."<br>".$row["College"]."<br>".$row["Gender"]."<br>".$row["DOB"]."<br>";
    }
    echo "Rows:".$row;

?>