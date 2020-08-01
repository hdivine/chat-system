<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Box</title>
    <link rel="stylesheet" href="style/index.css?<?echo time();?>">
<!--  -->
</head>
<body>
    <?php
        if (isset($_GET['msg'])) {
            $msg='';
            if ($_GET['msg'] == 'pwd') {
                $msg = 'Please Enter Valid Password';
            }
            echo '<div class="invalidPwd">'.$msg.'</div>';

        }
    ?>
    <div id='center'>
        <div id="form">
            <form action="check.php" method="post" id='form'>
                <div id="user-form" class='form'>
                    <label for="user">Enter User Name - </label>
                    <br>
                    <input type="text" name="username" id="user" class='inpt' placeholder=''>
                    <br>
                    <span class="error"></span>
                    <input type="button" value="Next" id='next' class='nextBtn' onclick='return setUser()'></input>
                </div>
                <div id="group-form" class='form' style='display:none'>
                    <label for="group">Enter Group Name - </label>
                    <br>
                    <input type="text" name="group" id="group" class='inpt' placeholder='' onkeyup='checkGroup()'>
                    <br>
                    <span class="error"></span>
                    <span id="info"></span>
                    <input type="button" value="Next" class='nextBtn'  onclick='return setGroup()' id='next'></input>
                </div>
                <div id="pass-form" class='form' style='display:none' >
                    <label for="group">Enter <span id='pwdLbl'>New</span> Password - </label>
                    <br>
                    <input type="password" name="pwd" id="pwd" class='inpt' placeholder=''>
                    <br>
                    <span class="error"></span>
                    <input type="submit" value="Go To Room" class='nextBtn'  onclick='return setPwd()' id='next'></input>
                </div>
            </form>
        </div>
    </div>

    <script src="./scripts/index.js?<?=time();?>"></script>
    
</body>
</html>