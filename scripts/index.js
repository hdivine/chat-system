function log(msg) {
    console.log(msg);
}
function dir(msg) {
    console.dir(msg);
}

var setGroup;
var setPwd;

var groupExists;

var setUser = function () {
    var user = document.getElementById('user').value;
    var elem = document.getElementsByClassName('form');
    var error = document.getElementsByClassName('error');
    var errorMsg='';
    
    if (user.length === 0) {
        errorMsg = 'Please Enter User-Name';
    }
    else if ( /^[a-zA-Z0-9]*(^\s)*$/.test(user)){
        // valid user name 
        elem[0].style.display = 'none';
        elem[1].style.display = 'block';

        // check group
        setGroup = function() {
            var groupName = document.getElementById('group').value;
            errorMsg='';
            if (groupName.length == 0) {
                errorMsg = 'Please Enter Group Name';
            }
            else if (/^[a-zA-Z0-9\s]*$/.test(groupName)){
                // valid group
                elem[1].style.display = 'none';
                elem[2].style.display = 'block';

                // check for existence of group
                if (groupExists) 
                    document.getElementById('pwdLbl').innerHTML='Old';
                else
                    document.getElementById('pwdLbl').innerHTML='New';
                // check password
                setPwd = function() {
                    var pwd = document.getElementById('pwd').value;
                    errorMsg=''
                    if (pwd.length == 0) {
                        errorMsg = 'Please Enter Password';
                    }
                    else {
                        return true;
                    }
                    error[2].innerHTML = errorMsg
                    return false;
                }
            }
            else {
                errorMsg = 'Invalid Group Name. Shuld contain [a-z][A-Z][0-9] only';
            }
            error[1].innerHTML = errorMsg
            return false;
        }

    }
    else {
        errorMsg = 'Invalid User Name. Shuld contain [a-z][A-Z][0-9] only';
    } 

    error[0].innerHTML = errorMsg;

}


// group keyup process
function checkGroup() {
    var gname = document.getElementById('group').value;
    var info = document.getElementById('info');

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'checkGroups.php');
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 'found' && gname.length != 0 ) {
                groupExists=true;
                info.innerHTML = 'Group Exists already';
            }
            else {
                groupExists=false;
                info.innerHTML = '';
            }
        }
    };
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('group='+gname);
    
}

