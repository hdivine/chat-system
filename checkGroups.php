<?php
if(isset($_POST['group'])) {
    $group = htmlspecialchars($_POST['group']);

    if (preg_match('/^[a-z\s]*$/i', $group)) {
        include 'con/con.php';
        $sql = 'SELECT room FROM rooms where room=?';

        $room = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($room, 's', $group);
        mysqli_stmt_execute($room);
        $result = mysqli_stmt_get_result($room);
        $row = mysqli_fetch_assoc($result);
        if ($row != NULL){
            if ($row['room'] == $group){
                echo 'found';
                die();
            }
        }

    }

    
}
// echo 'found';
?>