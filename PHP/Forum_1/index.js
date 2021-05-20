console.log("kevin")
var n1s1db = document.getElementById('n1s1-dropbox');
var item3a = document.getElementById('n1s13a');
var n1s2btn = document.getElementById('n1s2-btn');
var modal1 = document.getElementById('modal-1');
var mbcls = document.getElementById('mbcls');

var n2s2btn2 = document.getElementById('n2s2-btn2');
var modal2 = document.getElementById('modal-2');
var mbcls2 = document.getElementById('mbcls2');

document.addEventListener('click', (e) => {
    if (e.target == item3a){
        if (n1s1db.style.display != 'flex'){
            n1s1db.style.display = 'flex';
            item3a.style.color = 'rgb(160, 160, 160)';
            return
        }
        else{
            n1s1db.style.display = 'none';
            item3a.style.color = 'rgba(255, 255, 255, 0.822)';
            return 
        }
    }
    n1s1db.style.display = 'none';
    item3a.style.color = 'rgba(255, 255, 255, 0.822)';
})

n1s2btn.addEventListener('click', (e) => {

    modal1.style.visibility = 'visible';
    modal1.style.opacity = '1';
})
mbcls.addEventListener('click', (e) => {
    modal1.style.opacity = '0';
    modal1.style.visibility = 'hidden';
})
n2s2btn2.addEventListener('click', (e) => {
    modal2.style.visibility = 'visible';
    modal2.style.opacity = '1';
})
mbcls2.addEventListener('click', (e) => {
    modal2.style.opacity = '0';
    modal2.style.visibility = 'hidden';
})
function togglep(){
    if (document.getElementById('loginpassword').type !== 'password'){
        document.getElementById('loginpassword').setAttribute('type','password');
        document.getElementById('togglePassword').classList.toggle('fa-eye-slash')
    }
    else{
        document.getElementById('loginpassword').setAttribute('type','text');
        document.getElementById('togglePassword').classList.remove('fa-eye-slash')
    }
}

function togglecp1(){
    if (document.getElementById('password2').type !== 'password'){
    document.getElementById('password2').setAttribute('type','password');
    document.getElementById('togglePassword1').classList.toggle('fa-eye-slash')
    }
    else{
        document.getElementById('password2').setAttribute('type','text');
        document.getElementById('togglePassword1').classList.remove('fa-eye-slash')
    }
}
function togglecp2(){
    if (document.getElementById('cpassword').type !== 'password'){
    document.getElementById('cpassword').setAttribute('type','password');
    document.getElementById('togglePassword2').classList.toggle('fa-eye-slash')
    // far fa-eye fa-eye-slash
    }
    else{
        document.getElementById('cpassword').setAttribute('type','text');
        document.getElementById('togglePassword2').classList.remove('fa-eye-slash')
    }
}

/// for ajax


var dp = document.getElementById('dp');
var afterlogin = document.getElementById('afterimg');
function getImage(imagename){
    let dam = imagename.replace(/^.*\\/,"");
    console.log(dam)
}   