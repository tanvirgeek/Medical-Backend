<?php
    require "init.php";

    // Get all users
    $sql_get_all_questions = "SELECT * FROM `questions`;";
    $result_all_questions = mysqli_query($con,$sql_get_all_questions);

    // show all data
    echo "Mysqli_fetch_array: <br>";
    //var_dump(mysqli_fetch_array($result_all_users));
    echo "<br><br>";
    while( $row = mysqli_fetch_array($result_all_questions)){
        echo "<br>".$row["id"]."<br>".$row["question"]."<br>".$row["option1"]."<br>".$row["option2"]."<br>".$row["option3"]."<br>".$row["option4"]."<br>".$row["answer_no"]."<br>".$row["chapter_name"]."<br>";
    }

?>