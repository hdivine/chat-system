<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_SESSION['group']; ?>'s group</title>
    <link rel="stylesheet" href="./style/index.chat.css?<?=time();?>">
    <link rel="stylesheet" href="./style/index.pers-chat.css?<?=time();?>">
    <link rel="stylesheet" href="./style/index.serchgrp.css?<?=time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="head">
        <h2><?= $_SESSION['group']; ?></h2>
    </div>
    <!-- all groups -->
<!--     <div id="top-left" class='block'>

        <input type="text" id='srch-grp' name='srch-grp' required="true">
        <label for="srch-grp" id='srch-lbl'>Search Groups Here...</label>
        <br>
        <br>
        <br>
        <br>
        <div id="listed">
            <div class="grpStyle">The hackeasdfkasdfasdkfasdfkasdfklasdjfasdfjlaskdfjalskdfjalsdkfaslkdjfaljsrs group</div>
            <div class="grpStyle">Vibrant</div>
            <div class="grpStyle">Anonyms</div>
            <div class="grpStyle">Cicada</div>
            <div class="grpStyle">The hackers group</div>
            <div class="grpStyle">Vibrant</div>
            <div class="grpStyle">Anonyms</div>
            <div class="grpStyle">Cicada</div>
            <div class="grpStyle">The hackers group</div>
            <div class="grpStyle">Vibrant</div>
            <div class="grpStyle">Anonyms</div>
            <div class="grpStyle">Cicada</div>
        </div>
    </div> -->
    <!-- chat box -->
    <div id='center' class='block'>
        <div id="middle">
            <div id="chats">
                <!-- chating starts from here -->
                <div class='outer-msg-other'>
                    <div class="msg other">
                        <div class='img'>
                            <img src='./src/avatar.svg' > 
                        </div>
                        <br>
                        <span class='real-msg'>
                            <span class='name'><b>HD</b></span>
                            <span class="date"><i>10:30am</i></span>
                            <br>
                            <span class="real-msg-main">asdf asdf asdf na</span> 
                        </span>
                    </div>
                </div>
                <!-- my -->
                <div class='outer-msg-my'>
                    <div class="msg my">
                        <div class='img'>
                            <img src='./src/avatar.svg'> 
                        </div>
                        <br>
                        <span class='real-msg'>
                            <span class="real-msg-main">asdf asdf asdf na</span> 
                            <br>
                            <span class="date"><i>- 10:30am</i></span>
                        </span>
                    </div>
                </div>
                <!-- my and other example ends here -->
                <!-- end of chat -->
            </div>
            <hr>
            <div id="inpt">
                <form action="#" id='form' onsubmit='return send()' method='post'>
                    <input type="text" name="" id="grp-msg">
                    <input type="text" name='' id='grp-id' value='<?= $_SESSION["gid"]; ?>' hidden='true'>
                    <input type="text" name='' id='grp-usr' value='<?= $_SESSION["uid"] ?>' hidden='true'>
                </form>
            </div>
        </div>
    </div>
    <!-- users in group -->
    <div id="top-right" class='block'>
                <!-- search groups from listed ones -->
                <input type="text" id='srch-grp' name='srch-grp' required="true">
        <label for="srch-grp" id='srch-lbl'>Search Users Here...</label>
        <br>
        <br>
        <br>
        <br>
        <div id="listed">
            <div class="grpStyle" >Hdivine</div>
            <div class="grpStyle">toxicoder</div>
            <div class="grpStyle">nightvision</div>
            <div class="grpStyle">khiladi</div>
            <div class="grpStyle">user</div>
            <div class="grpStyle">nobbei</div>
            <div class="grpStyle">probro</div>
            <div class="grpStyle">stormer</div>
            <div class="grpStyle">byteCoder</div>
            <div class="grpStyle">VisibleFisible</div>
            <div class="grpStyle">HD</div>
            <div class="grpStyle">father</div>
        </div>
    </div>
    <!-- personal chat -->
    <div id="bottom-right" class='block'>
        <!-- heading -->
        <div class="prs-chat-head">
            <span>HD</span>
        </div>
        <div id="pers-middle">
            <div id="pers-chats">
                <!-- chating starts from here -->
                <div class='outer-msg-other'>
                    <div class="msg other">
                        <div class='img'>
                            <img src='./src/avatar.svg' > 
                        </div>
                        <br>
                        <span class='real-msg'>
                           <span class="real-msg-main">asdf asdf asdf na</span> 
                            <br>
                            <span class="date"><i>- 10:30am</i></span>
                        </span>
                    </div>
                </div>
                <!-- my -->
                <div class='outer-msg-my'>
                    <div class="msg my">
                        <div class='img'>
                            <img src='./src/avatar.svg'> 
                        </div>
                        <br>
                        <span class='real-msg'>
                            <span class="real-msg-main">
                                asdf asdf asdf na
                                asdf asdf asdf naasdf asdf asdf naasdf asdf asdf na
                            </span>
                            <br>
                            <span class="date"><i>- 10:30am</i></span>
                        </span>
                    </div>
                </div>
                <!-- my and other example ends here -->
  
                <!-- end of chat -->
            </div>
            <hr>
            <div id="inpt">
                <form action="#" id='form'>
                    <input type="text" name="" id="">
                </form>
            </div>
        </div>
    </div>
    <!-- not desided -->
    <div id="bottom-left" class='block'>    
    </div>

<!-- for group chat -->
    <script src="./script/index.groupchat.js"></script>
</body>
</html>