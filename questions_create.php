<?php

    require "init.php";
    $question = $_GET["question"];
    $option1 = $_GET["option1"];
    $option2 = $_GET["option2"];
    $option3 = $_GET["option3"];
    $option4 = $_GET["option4"];
    $answer_no = $_GET["answer_no"];
    $chapter_name = $_GET["chapter_name"];

    echo "<br>".$question."<br>";
    //CREATE
    $sql = "select * from questions where Question = '$question'";
    $result = mysqli_query($con,$sql);
    //var_dump($result);
    // checking if questions exists or not
    if (mysqli_num_rows($result)>0){
        $status = "exists";
        echo "The question exists";
    }else{
        $sql = "INSERT INTO `questions`(`question`, `option1`, `option2`, `option3`, `option4`, `answer_no`, `chanpter_name`) VALUES ('$question','$option1','$option2','$option3','$option4','$answer_no','$chapter_name');";
        if(mysqli_query($con,$sql)){
            $status = "Question Create Success";
            echo $status;
        }else{
            $status = "Question Create Failed";
            echo $status;
        }
    }
    echo json_encode(array("response" => $status));
    mysqli_close($con);

?>