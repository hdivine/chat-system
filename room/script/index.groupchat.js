function send() {
    var msg = document.getElementById('grp-msg');

    // should not send empty strings
    if (msg.value.length == 0) {
        msg.style['border-bottom'] = '1px solid red';
        return false;
    }
    
    msg.style['border-bottom'] = '1px solid #0f0';

    // send to backend
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log('send');
        }
    }
    xhr.open('post', './backend/index.group-chat.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('msg='+msg.value);

    return false;
}