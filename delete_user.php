<?php
    require "init.php";
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