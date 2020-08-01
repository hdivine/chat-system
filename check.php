<?php
// /*
function getGroupId($con, $group, $pwd) {
    $validGroupId = groupExists($con, $group, $pwd);
    if (!$validGroupId) {
        // create new group
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $sql = 'INSERT into rooms(`room`, `pwd`) values (?, ?)';
        $res = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($res, 'ss', $group, $hashedPwd);
        mysqli_stmt_execute($res);
        $validGroupId = groupExists($con,$group, $pwd);
    }
    return $validGroupId;
}

function groupExists($con,$group,$pwd) {
    // check if group is created or not
    // echo '1<br>';
    $sql = 'SELECT id, pwd FROM rooms where room=?';
    $prep = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($prep, 's', $group);
    mysqli_stmt_execute($prep);
    $getGroup = mysqli_stmt_get_result($prep);
    $res = mysqli_fetch_assoc($getGroup);
    // var_dump($res);
    if ($res != NULL) {
        // exists
        $validpwd = 0;
        $newPwd = $res['pwd'];
        $validpwd = password_verify($pwd, $newPwd);
        // echo $validpwd.'<b r>';

        if ($validpwd == '1') {
            return $res['id'];
        }
        else {
            header('Location: ./index.php?msg=pwd');
            die();
        }
    }
    return false;
    
}

function getUserId($con, $user) {
    $sql = 'INSERT INTO users(`username`) VALUE(?)';
    $res = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($res, 's', $user);
    mysqli_stmt_execute($res);

    $sql = 'SELECT id FROM users where username = ?';
    $res = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($res, 's', $user);
    mysqli_stmt_execute($res);
    $result = mysqli_stmt_get_result($res);
    $row = mysqli_fetch_assoc($result);
    return $row['id'];

}


if(isset($_POST['username']) && isset($_POST['group']) && isset($_POST['pwd'])) {
    $user = htmlspecialchars($_POST['username']);
    $group = htmlspecialchars($_POST['group']);
    $pwd = htmlspecialchars($_POST['pwd']);

    if (preg_match('/^[a-z0-9]*$/i',$user) && preg_match('/^[a-z0-9\s]*$/i', $group) && strlen($pwd) != 0){
        include './con/con.php';
        $gid = getGroupId($con, $group, $pwd);
        $uid = getUserId($con, $user);
        
        session_start();
        $_SESSION['gid'] = $gid;
        $_SESSION['uid'] = $uid;
        $_SESSION['group'] = $group;

        header('Location: ./room/index.php');
        die();
    } else {
        header('Location: ./index.php');
        die();
    }

} 
else {
    header('Location: ./index.php');
    die();
}
// */
?>

