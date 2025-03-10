document.addEventListener('DOMContentLoaded', function(){

    const btnMenu = document.getElementById('btn-menu');
    const menu = document.getElementById('menu-header');
    const line1 = document.querySelector('.line1')
    const line2 = document.querySelector('.line2')
    const line3 = document.querySelector('.line3')

    btnMenu.addEventListener('click', function(e){
        e.preventDefault();
        line1.classList.toggle('line1-active');
        line2.classList.toggle('line2-active');
        line3.classList.toggle('line3-active');
        menu.classList.toggle('abrir-menu');
    });

    const authUser = document.querySelector('.user-options');
    const btnAuthUser = document.querySelector('.btn-auth');
    const svgAuth = document.querySelector('.svg-auth');

    btnAuthUser.addEventListener('click', function(e){
        e.preventDefault();
        authUser.classList.toggle('user-options-active');
        svgAuth.classList.toggle('svg-auth-active');
    });

});