function showSignup() {
    document.getElementById('signup-form').classList.remove('hidden');
    document.getElementById('login-form').classList.add('hidden');
    document.querySelector('.head .active').classList.remove('active');
    document.querySelector('.head .Login').classList.remove('active');
    document.querySelector('.head .active').classList.add('active');
}

function showLogin() {
    document.getElementById('signup-form').classList.add('hidden');
    document.getElementById('login-form').classList.remove('hidden');
    document.querySelector('.head .active').classList.remove('active');
    document.querySelector('.head .Login').classList.add('active');
}
function home(){
 
var home = document.querySelector('.active1');

home.addEventListener('click', function() {
   
    window.location.href = "index.html";
});

}
