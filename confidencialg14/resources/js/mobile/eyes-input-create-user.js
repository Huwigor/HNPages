document.addEventListener('DOMContentLoaded', function(){
    const openEye = document.querySelector('.open-eye1');
    const closeEye = document.querySelector('.close-eye1');
    const openEye2 = document.querySelector('.open-eye2');
    const closeEye2 = document.querySelector('.close-eye2');
    const inputPassword = document.querySelector('.inputs-hidden-pass1');
    const inputPassword2 = document.querySelector('.inputs-hidden-pass2');

    openEye.addEventListener('click', function(e){
        e.preventDefault();
        closeEye.classList.remove('hidden-eye');
        openEye.classList.add('hidden-eye');
        inputPassword.type = "password";
    });

    closeEye.addEventListener('click', function(e){
        e.preventDefault();
        openEye.classList.remove('hidden-eye');
        closeEye.classList.add('hidden-eye');
        inputPassword.type = "text";
    });

    openEye2.addEventListener('click', function(e){
        e.preventDefault();
        closeEye2.classList.remove('hidden-eye');
        openEye2.classList.add('hidden-eye');
        inputPassword2.type = "password";
    });

    closeEye2.addEventListener('click', function(e){
        e.preventDefault();
        openEye2.classList.remove('hidden-eye');
        closeEye2.classList.add('hidden-eye');
        inputPassword2.type = "text";
    });
});