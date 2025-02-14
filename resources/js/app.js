import './bootstrap';

// my password toggle
document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("toggle-password");
    const eyeIcon = document.getElementById("eye-icon");

    if (passwordInput && togglePassword && eyeIcon) {
        togglePassword.addEventListener("click", () => {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.src = "https://cdn-icons-png.flaticon.com/512/159/159605.png"; // Eye open
            } else {
                passwordInput.type = "password";
                eyeIcon.src = "https://cdn-icons-png.flaticon.com/512/159/159604.png"; // Eye closed
            }
        });
    }
});
