<?php

function addToDB() {
    
}

if (isset($_POST['msg'])) {
    $msg = htmlspecialchars($_POST['msg']);
    if (strlen($msg) == 0) {
        header('Location: ./../index.php');
        die();
    }

    include './../../con/con.php';
    addToDB($con, $msg);

}
?>