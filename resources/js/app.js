import './bootstrap';
import '../css/app.css';
import Alpine from 'alpinejs';
import * as Turbo from "@hotwired/turbo";
window.Alpine = Alpine;
Alpine.start();


// my password toggle
document.addEventListener("DOMContentLoaded", () => {
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("toggle-password");
    const eyeIcon = document.getElementById("eye-icon");

    if (!passwordInput || !togglePassword || !eyeIcon) return; // Exit if elements are missing

    togglePassword.addEventListener("click", () => {
        const isPassword = passwordInput.type === "password";
        passwordInput.type = isPassword ? "text" : "password";
        eyeIcon.src = isPassword 
            ? "https://cdn-icons-png.flaticon.com/512/159/159605.png" 
            : "https://cdn-icons-png.flaticon.com/512/159/159604.png";
    });
});
