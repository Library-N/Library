const inputs = document.querySelectorAll('form input');

inputs.forEach(input => {
    input.addEventListener('focus', () => {
        input.previousElementSibling.classList.add('focused');
    });

    input.addEventListener('blur', () => {
        if (input.value === '') {
            input.previousElementSibling.classList.remove('focused');
        }
    });

    if (input.value !== '') {
        input.previousElementSibling.classList.add('focused');
    }
});
const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.textContent = type === 'password' ? 'Show' : 'Hide';
        });

        document.addEventListener('DOMContentLoaded', function() {
            const errorDiv = document.getElementById('error');
            if (errorDiv.textContent.trim() !== '') {
                errorDiv.style.display = 'block';
                setTimeout(() => {
                    errorDiv.style.display = 'none';
                }, 3000); // 5 seconds
            }
        });