document.getElementById('form-login').addEventListener('submit', async function(e) {
    e.preventDefault();

    const erroLogin = document.getElementById('erro-login-user');
    const erroIcon = document.getElementById('error-email')

    let inputSenha = document.getElementById('password').value.trim();
    let inputEmail = document.getElementById('email').value.trim();

    if (!inputSenha || !inputEmail){
        erroLogin.textContent = 'Todos os campos devem estar preenchidos!'
        erroIcon.style.display = "block"
        return;
    }
    
    const csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
    const csrfToken = csrfTokenElement ? csrfTokenElement.getAttribute('content') : null;

    if (!csrfToken) {
        console.error("Token CSRF não encontrado. Verifique se o meta tag está presente no HTML.");
        return;
    }

    try {
        const response = await fetch('/login-auth-user', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ email: inputEmail, password: inputSenha })
        });

        if (!response.ok) {
            throw new Error(`Erro HTTP: ${response.status}`);
        }

        const data = await response.json();

        if (data.success) {
            erroLogin.textContent = ''
            document.getElementById('form-login').reset();
            window.location.href = '/home-mobile';
        } else {
            const erroLogin = document.getElementById('erro-login-user');
            erroLogin.textContent = data.message;
        }
    } catch (error) {
        console.error('Erro na requisição:', error);
        const erroLogin = document.getElementById('erro-login-user');
        erroLogin.textContent = "Erro ao tentar fazer login. Tente novamente mais tarde.";
    }
});
