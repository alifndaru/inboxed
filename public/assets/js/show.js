var a;
function showPassword()
{
    if (a==1){
        document.getElementById('password').type ='password';
        document.getElementById('pass-icon').src="assets/img/eye.png";
        a = 0;
    }else {
        document.getElementById('password').type ='text';
        document.getElementById('pass-icon').src="assets/img/eye.png";
        a = 1;
    }
}

// console.log(showPassword);