document.addEventListener('DOMContentLoaded', function(){
    function verificarResolucao(){

        const mobileURL = '/home-mobile';
        const desktopURL = '/home-desktop';

        if (window.innerWidth < 768 && window.location.pathname !== mobileURL) {
            window.location.href = mobileURL;
        } else if (window.innerWidth > 768 && window.location.pathname !== desktopURL) {
            window.location.href = desktopURL;
        }
    }       
    verificarResolucao()
});

