document.addEventListener('DOMContentLoaded', function(){

    const openEye = document.querySelector('.open-eye1')
    const closeEye = document.querySelector('.close-eye1')
    const inputPassword = document.getElementById('password');

    openEye.addEventListener('click', function(e){
       e.preventDefault();
       closeEye.classList.remove('hidden-eye')
       openEye.classList.add('hidden-eye');
       inputPassword.type = "password" 
    });

    closeEye.addEventListener('click', function(e){
        e.preventDefault();
        openEye.classList.remove('hidden-eye')
        closeEye.classList.add('hidden-eye');
        inputPassword.type = "text" 
     });

});